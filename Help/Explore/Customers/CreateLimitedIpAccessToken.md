# GET

### URI

/Customers/{id}/createIpLimitedAccessToken

### Description

Create access token with limited privileges as defined for IP authenticated customers

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

- 200: Success, response object returned.
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
        "created": "2024-04-26T21:05:30.083Z",
        "userId": "string"
    }
