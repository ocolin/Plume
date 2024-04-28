# POST

### URI

/Customers/registerWithGroups

### Description

Register/create an account with an accountId plus email/password/groups.

## Parameters

- email
    - REQUIRED
    - string
    - formData
- password
  - string
  - formData
- accountId
  - REQUIRED
  - string
  - formData
  - must be unique, a UUID is recommended, min length is 6 characters
- name
  - REQUIRED
  - string
  - formData
  - Full name of customer, defaults to value of accountId
- groupIds
  - string($JSON)
  - formData
  - at least one groupId
- partnerId
  - string
  - formData
  - PartnerId of customer for accountId
- acceptLanguage
  - string
  - formData
  - acceptable language
- profile
  - string
  - formData
  - location profile

## Responses

### Statuses

- 200: Success, customer and location IDs returned.
- 400: Required fields are missing.
- 401: Authorization required.
- 422: Input validation failed.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "email": "string",
        "accountId": "string",
        "locationId": "string",
        "anonymous": false,
        "name": "string",
        "createdAt": "2024-04-26T23:55:39.499Z",
        "_version": "1.0.0"
    }