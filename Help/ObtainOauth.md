# Obtain Oauth 2.0 JWT Bearer Access Token

The Oauth 2.0 JWT bearer access token is Plume’s prescribed approach for machine-to-machine (i.e., cloud-to-cloud) integrations and is intended to replace the original “Obtain Authorization Token” approach. An ISP should request access to the Plume Cloud via the Plume Portal. The Plume Portal will help the ISP self-service the onboarding and utilization of this approach. Specifically, the Plume Portal will provide the following details for which the ISP’s engineers should securely manage with their cloud:

- "role": "partnerIdAdmin",
- "tokenTtlMinutes": 10,
- The token TTL is configured via the Plume Portal to be between 5 minutes and 1440 minutes (1 day) and is included with each session token as “expires_in” (i.e., “expires in” X seconds)
- "scope": "partnerId:{{Plume PartnerId}} role:partnerIdAdmin",
- "authorizationHeader": "Basic {{bearer token}}",
- The authorization header is an Oauth 2.0 client + secret base64 encoded
- "authorizationTokenUrl": "https://external.sso.plume.com/oauth2/{{unique Plume Cloud ID}}/v1/token"

First, make an authentication request against Okta APIs using the Client Credentials OAuth 2.0 flow. Okta documentation for the following API call can be found at https://developer.okta.com/docs/reference/api/oidc/#token

## Request

    // Generate a new JWT bearer access token using client credentials
    curl -X "POST" "{{authorizationTokenUrl}}" \
     -H 'Cache-Control: no-cache' \
     -H 'Content-Type: application/x-www-form-urlencoded; charset=utf-8' \
     -H 'Authorization: {{authorizationHeader}}' \
     --data-urlencode "grant_type=client_credentials" \
     --data-urlencode "scope=partnerId:[Plume Partner Id] role:partnerIdAdmin"

## Response

### HTTP 200

    {
        "token_type": "Bearer",
        "expires_in": 600,
        "access_token": "[ACCESS_TOKEN]",
        "scope": "partnerId:[Plume Partner Id] role:partnerIdAdmin"
    }

### Subsequent HTTP requests to Plume Cloud APIs

    curl "https://URL-Provided-by-Plume/api/*”
    -H 'Authorization: Bearer [ACCESS_TOKEN]'


## HTTP Error Codes and reasons:

| HTTP Satus Code            | Reason  |
|----------------------------|---------|
| 400: Bad request	          | PartnerId hasn't been correctly configured for machine-to-machine. Or, the values for scope, authorizationHeader, and/or authorizationHeaderUrl are incorrect. 
| 401: Authorization failed	 | Several possibilities: failed Okta verification, rejected by our API software’s application security, etc                                               
| 403: Forbidden	            | API call is allowed but not for the specific resource (e.g., Customer account is owned by a different partnerId)                                        
| 500: Internal server error | 	Internal server error.                                                                                                                                 