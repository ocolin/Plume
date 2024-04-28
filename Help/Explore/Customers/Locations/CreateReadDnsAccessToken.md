# GET

### URI

/Customers/{id}/createReadDnsAccessToken

### Description

Create access token to read data related to DNS security policies

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Customer id

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
        "created": "2024-04-26T21:08:06.043Z",
        "userId": "string"
    }
