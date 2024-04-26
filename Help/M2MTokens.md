# M2M Tokens: Best practices

M2M tokens are used at Plume to facilitate cloud-to-cloud solutions wherein CSPs make API calls against Plume’s cloud using said tokens. The tokens are generated using client credentials flow, which is an OAuth 2.0 grant type ideal for server-to-server authentication where the client is also the resource owner. It is primarily used for backend applications requiring access to a service without human intervention. In this flow, the client application authenticates with the authorization server using its credentials (client ID and client secret) and requests an access token. Upon successful authentication, the server issues an access token.

If you still need to create an M2M token on the Plume Partner Portal, please read the article: Plume Portal M2M API Credential Generation

This article describes best practices regarding how the lifecycle of M2M tokens should be managed within cloud-to-cloud applications.

## Content:

- Secure storage of credentials
- Efficient token usage
- Handling token expiration
- Error handling
- Limitation

## Secure storage of credentials

One of the data bits that Plume shares with a CSP is an authorization header. Which looks something like this:

    Basic MG9hMXkxM2VwYTlOZVhlY00waDg6YnhLM0duSTJPSmtjRVBuSkNvUHZjMXlualNCQ2VEOXZqWEIyeXFJd0hmRVIycFRkVGdXN1dqQTdpVzUyUEZkWA==

This header contains encoded client ID and client secret and it should be treated and stored the same way as any other credential such as a password. The value should be stored securely in environment variables or a secret management tool. The CSP should follow their internal security best practices and if needed consult their internal infosec team to determine where to store this data and how to retrieve it. It should not be hardcoded in application code or version control systems.

To decode the header you need to parse it using the following format:

    Basic base64Decode(clientId:clientSecret)

For example if we decoded token, it would look like this:

    Basic 0oa1y13epa9NeXecM0h8:bxK3GnI2OJkcEPnJCoPvc1ynjSBCeD9vjXB2yqIwHfER2pTdTgW7WjA7iW52PFdX

where 0oa1y13epa9NeXecM0h8 is the client ID and bxK3GnI2OJkcEPnJCoPvc1ynjSBCeD9vjXB2yqIwHfER2pTdTgW7WjA7iW52PFdX is the client secret.

## Efficient token usage

M2M tokens have a lifespan from 10 minutes to 24 hours, depending on how Plume configured the credentials. This lifespan means that tokens can and should be used multiple times. CSPs should not generate a new M2M token for each API call against the Plume cloud. Unless said API calls are made further apart than the token's lifespan.

Tokens should be cached to reduce unnecessary token generating, thus minimizing network calls and load on the authorization server. The cache should be configured using an appropriate eviction strategy, such as LRU - Least Recently Used, to manage cache effectively.

The token lifespan is returned when CSPs generate a new token. In the API response, the authorization server returns an expires_in property and the access_token property. The expires_in is a numerical property defining token lifespan in seconds since the authorization server returned the response. Here’s an example of such a response containing the expires_in property:

    {
        "token_type": "Bearer",
        "expires_in": 1800,
        "access_token": "eyJraWQiOiJLeW9kYy1Mb1RNM1Q1UlpWWTFNTkJTaVNpMkhTSU1zSm9zWW05dm5xQ2MwIiwiYWxnIjo
        iUlMyNTYifQ.eyJ2ZXIiOjEsImp0aSI6IkFULi1MVW14cXVVbkVucGNqT1dYR0lTeDFoOFZaakhKUXB2eXBFbjZLdEFxeVEi
        LCJpc3MiOiJodHRwczovL2V4dGVybmFsLWRldi5zc28ucGx1bWUuY29tL29hdXRoMi9hdXN5b2JvbGNjOFQycUxoUDBoNyIs
        ImF1ZCI6ImFwaTovL20ybV9jaV9kZXYiLCJpYXQiOjE3MDMyNzgxNDEsImV4cCI6MTcwMzI3OTk0MSwiY2lkIjoiMG9hMXkx
        M2VwYTlOZVhlY00waDgiLCJzY3AiOlsicGFydG5lcklkOm1vY2hhLXBhcnRuZXIiLCJyb2xlOnBhcnRuZXJJZEFkbWluIl0s
        InN1YiI6IjBvYTF5MTNlcGE5TmVYZWNNMGg4In0.SAAvuc1U2esjUa0PLiskYEU3fVn_avTgzZTDjEsgoxp6IjilaZxZa8eA
        zqMFnAfuz3dirUZi00opArp08rSxlKg3aDOhjeYISvjXXlJO6JUXkDc-MeHNKlzV1KaYbx_gnzGeastflRbhRW-kyPAaKtH3
        wpTHJbQbeNGuAGS8jyOlaA_JlwxmaL3lGBniSH8JOQjDepLF5_nDtyX46yHVt8Vdp5kOMO3JalDowf6m4xDA8OoS5cXkPC6X
        Cm21smXlhIYzDYT1AXXPtYbIqj8aAVWc6uJcfCOeL7LJsbsz6gljSm7YLA-6luoKScc5lgxuh2T3tfwW3TaQPL0RXwq6GQ",
        "scope": "partnerId:partner role:partnerIdAdmin"
    }


In this example response the expires_in is set to 1800 seconds, translating into 30 minutes. Thus, if the CSP received this response at 2023-12-22T20:49:01 adding 30 minutes to this time would mean that the token will expire at 2023-12-22T21:19:01.

## Handling token expiration

It’s important that the CSPs cloud-to-cloud application has token expiry awareness. It needs to implement a logic to handle token expiration, either by preemptive token refreshment or reactive token regeneration upon receiving a 401 Unauthorized response back from Plume’s APIs. If utilising a preemptive token refreshment it’s important to implement a grace period for token expiration to account for clock skew between different systems. Clock skew can differ from system to system and depends on various factors, such as which protocol the system uses to synchronize time (NTP, PTP, etc.). Clock skew can be measured in milliseconds on some systems, seconds in other and even minutes in some. Our recommendation is that the CSP renews the token about 30 seconds before the official expiration time.

There are three ways for a CSP to identify token expiry, the first one was described above where the authorization server returns expires_in property. The second method is by decoding the M2M token. The token returned by the authorization server is a JWT token which can be decoded to extract the expiration time. Decoding a JWT token is outside the scope of this article, but a good documentation can be found here: JWT.IO - JSON Web Tokens Introduction. When the token is decoded, its payload contains an exp property, a UNIX timestamp of when the token expires.

If we decode the JWT token in the access_token above, we’d find the following exp value 1703279941, which translates to 2023-12-22T21:19:01.

The third method is by calling the introspect API to determine if the token is active and, if it is when it expires. For example, if we wanted to make the introspect API call for the above access_token and the authorization URL Plume shared with the CSP would be https://external-dev.sso.plume.com/oauth2/ausyobolcc8T2qLhP0h7/v1/token, the introspect API call would look like:


    curl -X "POST" https://external-dev.sso.plume.com/oauth2/ausyobolcc8T2qLhP0h7/v1/introspect \
    -H 'Content-Type: application/x-www-form-urlencoded; charset=utf-8' \
    -H 'Authorization: Basic MG9hMXkxM2VwYTlOZVhlY00waDg6YnhLM0duSTJPSmtjRVBuSkNvUHZjMXlualNCQ2VEOXZqWEIyeXFJd0hmRVIycFRkVGdXN1dqQTdpVzUyUEZkWA==' \
    --data-urlencode "token=eyJraWQiOiJLeW9kYy1Mb1RNM1Q1UlpWWTFNTkJTaVNpMkhTSU1zSm9zWW05dm5xQ2MwIiwiYWxnIjoiUlMyNTYifQ.eyJ2ZXIiOjEsImp0aSI6IkFULmRXS2VLOGlFUW1JMUVORGZUQlM0NkpMSEU1RERQd2pNeV83cnpKeG8yaXciLCJpc3MiOiJodHRwczovL2V4dGVybmFsLWRldi5zc28ucGx1bWUuY29tL29hdXRoMi9hdXN5b2JvbGNjOFQycUxoUDBoNyIsImF1ZCI6ImFwaTovL20ybV9jaV9kZXYiLCJpYXQiOjE3MDMyODA4NTksImV4cCI6MTcwMzI4MjY1OSwiY2lkIjoiMG9hMXkxM2VwYTlOZVhlY00waDgiLCJzY3AiOlsicGFydG5lcklkOm1vY2hhLXBhcnRuZXIiLCJyb2xlOnBhcnRuZXJJZEFkbWluIl0sInN1YiI6IjBvYTF5MTNlcGE5TmVYZWNNMGg4In0.RRKXvW7YdDMpQsGgyjzNCWfvo_bs0CkYLve-dSx_xmK-BYhH1lhytq2sdEU7Sjm92ikxUMEwwiEaCikjavQYUnFLoPISWaAKlmJLfr6esQV7WW7kw0CdoQ_SG5YdvLmAh5j91VzCMG39RFDyYG6re-fK7DBaC82S60hd5c3F7YU1vCSnzUMCQsCgPMmWJcZUIM3oua-UzO9XUqWk6rH8bvGopjeIgtS55caB24RKyc6d0rlY8mB1nLeF8ism77Bzw6G8oK6XRYvGkA2dKQywdd31C7HfJsLiOhYrQ9uzLrjmfLUAL9RTkQRSXQceDFY8ffVsMS4wl4e0Fwcg370z9Q" \
    --data-urlencode "token_type_hint=access_token"

The response for an active token would be, containing the same exp property described above:

    {
        "active": true,
        "scope": "partnerId:mocha-partner role:partnerIdAdmin",
        "exp": 1703282659,
        "iat": 1703280859,
        "sub": "0oa1y13epa9NeXecM0h8",
        "aud": "api://m2m_ci_dev",
        "iss": "https://external-dev.sso.plume.com/oauth2/ausyobolcc8T2qLhP0h7",
        "jti": "AT.dWKeK8iEQmI1ENDfTBS46JLHE5DDPwjMy_7rzJxo2iw",
        "token_type": "Bearer",
        "client_id": "0oa1y13epa9NeXecM0h8"
    }

And, for inactive/expired:

    {
        "active": false
    }

## Error handling

It’s important to handle errors related to token acquisition or usage gracefully. If any unrecoverable errors occur, implementing informative logging is also recommended, which provides enough information for troubleshooting without exposing sensitive data.

When calling the /v1/token and /v1/introspect APIs mentioned above if they fail, they return the following error format in the JSON response body:

    {
        "error" : "invalid_client",
        "error_description" : "No client credentials found."
    }


The error property is a string enum which can contain the following values when /v1/token API call fails:

| Error | Cause |
|-------|-------|
| invalid_client | Incorrect or invalid Authorization header was sent.
| invalid_grant | Incorrect or invalid grant_type value was provided in the request body. It must be client_credentials.
| invalid_request | The request structure is invalid. For example, the basic authentication header is malformed, both header and form parameters are used for authentication, no authentication information is provided, or the request contains duplicate parameters.
| invalid_scope | Incorrect or invalid scope value was provided in the request body. It must follow this format: partnerId:[PARTNER] role:partnerIdAdmin
| unsupported_grant_type | Incorrect or invalid grant_type value was provided in the request body. It must be client_credentials.


The error property contains the following values when /v1/introspect API call fails:

| Error | Cause |
|-------|-------|
| invalid_client | Incorrect or invalid Authorization header was sent.
|   invalid_request | The request structure is invalid. For example, the basic authentication header is malformed, both header and form parameters are used for authentication, no authentication information is provided, or the request contains duplicate parameters.

## Limitation
The Plume cloud is protected against overload by limiting the number of HTTP requests that can be made within five minutes.
Web Application Firewall (WAF) allows 2000 calls within a five-minute rolling time frame from the same IP address. All subsequent calls in the same time frame will be rejected with a 403 response. The block is released at the beginning of a new five-minute time frame, where a maximum of 2000 requests are again available.

**NOTE**: Our recommendation is to set maximum limit of 6 API requests per second.

Partners with private clouds may have different settings. 