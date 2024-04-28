# POST

### URI

/Customers/{id}/createOauthAccessToken

### Description

Create access token with ouath scope.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- scope
  - string
  - formData
- ttlSeconds
  - number($double)
  - formData
- singleToken
  - boolean
  - formData

## Responses

### Statuses

- 200: Success, access token created and returned.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "ttl": 1209600,
        "scopes": [
            "string"
        ],
        "created": "2024-04-28T03:34:48.239Z",
        "userId": "string"
    }