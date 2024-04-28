# GET

/Customers

## Parameters

- filter
  - string($JSON)
  - (query)
  - Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({"where":{"something":"value"}}). See https://loopback.io/doc/en/lb3/Querying-data.html#using-stringified-json-in-rest-queries for more details.

## Responses

### Statuses

- 200 Request was successful

### Code

    [
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
            "createdAt": "2024-04-26T19:22:48.771Z",
            "provisioningSsoAuditTrail": false,
            "_version": "1.0.0",
            "realm": "string",
            "username": "string",
            "email": "string",
            "emailVerified": true,
            "termsAndPrivacy": {
                "termsDocumentId": 0,
                "termsAcceptedAt": "2024-04-26T19:22:48.771Z",
                "privacyDocumentId": 0,
                "privacyAcceptedAt": "2024-04-26T19:22:48.771Z"
            },
            "migration": {
                "migratedFrom": "string",
                "migratedTo": "string",
                "migratedAt": "2024-04-26T19:22:48.771Z",
                "migrationReason": "string",
                "id": "string"
            }
        }
    ]

-----------

# POST

/Customers

## Parameters

- email
  - string
- password
  - string
- name
  - string
- partnerId
  - string
- person
  - string($JSON)
  - Person object should contain field 'imageId' and object profile with field type (String)
- location
  - string($JSON)
  - location object should contain field 'name' (String)
- notificationOptions
  - string($JSON)
- passwordLessToken
  - boolean
- source
  - string

## Responses

### Statuses

- 200: Success, customer created.
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
        "createdAt": "2024-04-26T19:25:38.790Z",
        "provisioningSsoAuditTrail": false,
        "_version": "1.0.0",
        "realm": "string",
        "username": "string",
        "email": "string",
        "emailVerified": true,
        "termsAndPrivacy": {
            "termsDocumentId": 0,
            "termsAcceptedAt": "2024-04-26T19:25:38.790Z",
            "privacyDocumentId": 0,
            "privacyAcceptedAt": "2024-04-26T19:25:38.790Z"
        },
        "migration": {
            "migratedFrom": "string",
            "migratedTo": "string",
            "migratedAt": "2024-04-26T19:25:38.790Z",
            "migrationReason": "string",
            "id": "string"
        }
    }