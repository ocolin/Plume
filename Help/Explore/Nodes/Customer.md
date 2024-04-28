# GET

### URI

/Nodes/{id}/customer

### Description

Get the customer info with the node Id.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Node id

## Responses

### Statuses

- 200: Success, return the customer info.
- 403: Public ip not matched.
- 404: NodeId not found.
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
        "createdAt": "2024-04-28T18:27:52.983Z",
        "provisioningSsoAuditTrail": false,
        "_version": "1.0.0",
        "realm": "string",
        "username": "string",
        "email": "string",
        "emailVerified": true,
        "termsAndPrivacy": {
            "termsDocumentId": 0,
            "termsAcceptedAt": "2024-04-28T18:27:52.983Z",
            "privacyDocumentId": 0,
            "privacyAcceptedAt": "2024-04-28T18:27:52.983Z"
        },
        "migration": {
            "migratedFrom": "string",
            "migratedTo": "string",
            "migratedAt": "2024-04-28T18:27:52.983Z",
            "migrationReason": "string",
            "id": "string"
        }
    }