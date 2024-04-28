# PUT

### URI

/Customers/createOrUpdateUser

### Description

Create or update a Plume NOC user.

## Parameters

- email
  - REQUIRED
  - string
  - formData
- name
  - REQUIRED
  - string
  - formData
- roles
  - REQUIRED
  - string($JSON)
  - formData
- groups
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success, user created.
- 400: Required fields missing.
- 422: Input validation failed.
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
        "createdAt": "2024-04-26T23:52:15.971Z",
        "provisioningSsoAuditTrail": false,
        "_version": "1.0.0",
        "realm": "string",
        "username": "string",
        "email": "string",
        "emailVerified": true,
        "termsAndPrivacy": {
            "termsDocumentId": 0,
            "termsAcceptedAt": "2024-04-26T23:52:15.971Z",
            "privacyDocumentId": 0,
            "privacyAcceptedAt": "2024-04-26T23:52:15.971Z"
        },
        "migration": {
            "migratedFrom": "string",
            "migratedTo": "string",
            "migratedAt": "2024-04-26T23:52:15.971Z",
            "migrationReason": "string",
            "id": "string"
        }
    }