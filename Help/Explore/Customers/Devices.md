# PUT

### URI

/Customers/{id}/devices/{mac}

### Description

Nickname a Customer's device for all locations.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- mac
  - REQUIRED
  - string
  - path
- nickname
  - string
  - formData

## Responses

### Statuses

- 200: Success, device name has been updated but not validated as a device that has ever connected.
- 400: nickname value must be defined.
- 404: customer id and/or mac does not exist.
- 422: nickname value must be less than 33 characters.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "accountId": "string",
        "anonymous": false,
        "autoProvisioned": false,
        "contact": "string",
        "name": "string",
        "locked": false,
        "partnerId": "string",
        "acceptLanguage": "en-US",
        "preferredLanguage": "string",
        "nocSettings": {},
        "linkedAccounts": [
            {}
        ],
        "source": "unknown",
        "createdAt": "2024-04-27T15:05:26.212Z",
        "provisioningSsoAuditTrail": false,
        "_version": "1.0.0",
        "realm": "string",
        "username": "string",
        "email": "string",
        "emailVerified": true,
        "termsAndPrivacy": {
            "termsDocumentId": 0,
            "termsAcceptedAt": "2024-04-27T15:05:26.212Z",
            "privacyDocumentId": 0,
            "privacyAcceptedAt": "2024-04-27T15:05:26.212Z"
        },
        "migration": {
            "migratedFrom": "string",
            "migratedTo": "string",
            "migratedAt": "2024-04-27T15:05:26.212Z",
            "migrationReason": "string",
            "id": "string"
        }
    }