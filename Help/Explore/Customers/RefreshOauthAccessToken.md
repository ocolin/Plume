# GET

### URI

/Customers/refreshOauthAccessToken

### Description

Refresh access and refresh tokens

## Parameters

- refreshToken
  - string
  - formData
- clientId
  - string
  - formData

## Responses

### Statuses

- 200: Success, access and refresh tokens created and returned.
- 401: Authorization Required.
- 500: Internal server error.

### Code

    {}