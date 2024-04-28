# GET

/Customers/{id}

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - (path)
- filter
    - string($JSON)
    - (query)

## Responses

### Statuses

- 200 Request was successful

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
        "createdAt": "2024-04-26T19:14:22.068Z",
        "provisioningSsoAuditTrail": false,
        "_version": "1.0.0",
        "realm": "string",
        "username": "string",
        "email": "string",
        "emailVerified": true,
        "termsAndPrivacy": {
            "termsDocumentId": 0,
            "termsAcceptedAt": "2024-04-26T19:14:22.068Z",
            "privacyDocumentId": 0,
            "privacyAcceptedAt": "2024-04-26T19:14:22.068Z"
        },
        "migration": {
            "migratedFrom": "string",
            "migratedTo": "string",
            "migratedAt": "2024-04-26T19:14:22.068Z",
            "migrationReason": "string",
            "id": "string"
        }
    }

----------

# PUT

/Customers/{id}

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - (path)
- data (body)


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
      "createdAt": "2024-04-26T19:16:24.521Z",
      "provisioningSsoAuditTrail": false,
      "_version": "1.0.0",
      "realm": "string",
      "username": "string",
      "email": "string",
      "emailVerified": true,
      "termsAndPrivacy": {
        "termsDocumentId": 0,
        "termsAcceptedAt": "2024-04-26T19:16:24.521Z",
        "privacyDocumentId": 0,
        "privacyAcceptedAt": "2024-04-26T19:16:24.521Z"
      },
      "migration": {
        "migratedFrom": "string",
        "migratedTo": "string",
        "migratedAt": "2024-04-26T19:16:24.521Z",
        "migrationReason": "string",
        "id": "string"
      }
    }

## Responses

### Statuses

- 200 Request was successful

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
        "createdAt": "2024-04-26T19:17:20.117Z",
        "provisioningSsoAuditTrail": false,
        "_version": "1.0.0",
        "realm": "string",
        "username": "string",
        "email": "string",
        "emailVerified": true,
        "termsAndPrivacy": {
            "termsDocumentId": 0,
            "termsAcceptedAt": "2024-04-26T19:17:20.117Z",
            "privacyDocumentId": 0,
            "privacyAcceptedAt": "2024-04-26T19:17:20.117Z"
        },
        "migration": {
            "migratedFrom": "string",
            "migratedTo": "string",
            "migratedAt": "2024-04-26T19:17:20.117Z",
            "migrationReason": "string",
            "id": "string"
        }
    }

---------------

# PATCH

/Customers/{id}

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - (path)
- data (body)


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
      "createdAt": "2024-04-26T19:16:24.521Z",
      "provisioningSsoAuditTrail": false,
      "_version": "1.0.0",
      "realm": "string",
      "username": "string",
      "email": "string",
      "emailVerified": true,
      "termsAndPrivacy": {
        "termsDocumentId": 0,
        "termsAcceptedAt": "2024-04-26T19:16:24.521Z",
        "privacyDocumentId": 0,
        "privacyAcceptedAt": "2024-04-26T19:16:24.521Z"
      },
      "migration": {
        "migratedFrom": "string",
        "migratedTo": "string",
        "migratedAt": "2024-04-26T19:16:24.521Z",
        "migrationReason": "string",
        "id": "string"
      }
    }

## Responses

### Statuses

- 200 Request was successful

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
        "createdAt": "2024-04-26T19:17:20.117Z",
        "provisioningSsoAuditTrail": false,
        "_version": "1.0.0",
        "realm": "string",
        "username": "string",
        "email": "string",
        "emailVerified": true,
        "termsAndPrivacy": {
            "termsDocumentId": 0,
            "termsAcceptedAt": "2024-04-26T19:17:20.117Z",
            "privacyDocumentId": 0,
            "privacyAcceptedAt": "2024-04-26T19:17:20.117Z"
        },
        "migration": {
            "migratedFrom": "string",
            "migratedTo": "string",
            "migratedAt": "2024-04-26T19:17:20.117Z",
            "migrationReason": "string",
            "id": "string"
        }
    }

---------------

# DELETE

/Customers/{id}

## Parameters

## Responses

### Statuses

- 200: Success, customer details returned.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {}