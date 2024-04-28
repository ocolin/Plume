# POST

### URI

/Nodes/{id}/passwordLessToken

### Description

Update the name and email for customer and generate emailToken and appToken.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Node id
- name
  - REQUIRED
  - string
  - formData
- email
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 200: Success, return the customer info.
- 403: Public ip not matched.
- 404: NodeId not found.
- 422: Email must be defined and valid.
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
        "createdAt": "2024-04-28T21:24:34.752Z",
        "provisioningSsoAuditTrail": false,
        "_version": "1.0.0",
        "realm": "string",
        "username": "string",
        "email": "string",
        "emailVerified": true,
        "termsAndPrivacy": {
            "termsDocumentId": 0,
            "termsAcceptedAt": "2024-04-28T21:24:34.752Z",
            "privacyDocumentId": 0,
            "privacyAcceptedAt": "2024-04-28T21:24:34.752Z"
        },
        "migration": {
            "migratedFrom": "string",
            "migratedTo": "string",
            "migratedAt": "2024-04-28T21:24:34.752Z",
            "migrationReason": "string",
            "id": "string"
        }
    }