# GET

### URI

/Customers/{id}/createPatchServiceLevelAccessToken

### Description

Create access token to patch customer serviceLevel used by ZUORA

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Customer id
- ttl
  - number($double)
  - formData

## Responses

### Statuses

- 200: Success, accessToken returned.
- 401: Authorization required or customer id not found.
- 404: customer id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        "id": "string",
        "ttl": 1209600,
        "scopes": [
            "string"
        ],
        "created": "2024-04-26T21:10:19.852Z",
        "userId": "string"
    }