# GET

### URI

/Customers/{id}/userInfo

### Description

Get customer details with userInfo access token.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path

## Responses

### Statuses

- 200: Success, customer details returned.
- 401: Authorization required or customer id not found.
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
        "createdAt": "2024-04-28T03:39:23.671Z",
        "provisioningSsoAuditTrail": false,
        "_version": "1.0.0",
        "realm": "string",
        "username": "string",
        "email": "string",
        "emailVerified": true,
        "termsAndPrivacy": {
            "termsDocumentId": 0,
            "termsAcceptedAt": "2024-04-28T03:39:23.671Z",
            "privacyDocumentId": 0,
            "privacyAcceptedAt": "2024-04-28T03:39:23.671Z"
        },
        "migration": {
            "migratedFrom": "string",
            "migratedTo": "string",
            "migratedAt": "2024-04-28T03:39:23.671Z",
            "migrationReason": "string",
            "id": "string"
        }
    }