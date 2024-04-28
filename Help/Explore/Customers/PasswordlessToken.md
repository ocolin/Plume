# GET

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

- 204: Success, return new appToken and send out the email with emailToken.
- 401: Authorization required or customer id not found.
- 422: nodeId must be defined.
- 500: Internal server error.

### Code

-------------

# POST

### URI

/Customers/passwordLessToken

### Description

Generate two accessTokens with special scopes for the account with the email address and send a verification email.

## Parameters

- email
  - REQUIRED
  - string
  - formData
- notificationOptions
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success, return new appToken, refreshToken and send out the email with emailToken.
- 401: Authorization required or customer id not found.
- 422: Email must be defined and valid.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "ttl": 1209600,
        "scopes": [
            "string"
        ],
        "created": "2024-04-26T21:03:08.240Z",
        "userId": "string"
    }
