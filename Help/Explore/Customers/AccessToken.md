# POST

### URI

/Customers/{id}/passwordLessToken

### Description

Verifies the email token and activates tokens related to it. Returns verified text with redirect to "signup complete deep link"

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path

## Responses

### Statuses

- 204: Success, return new appToken.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "ttl": 1209600,
        "scopes": [
            "string"
        ],
        "created": "2024-04-26T21:02:09.874Z",
        "userId": "string"
    }
