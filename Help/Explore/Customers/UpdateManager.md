# PUT

### URI

/Customers/createOrUpdateManager

### Description

Create or update manager and his Location Access

## Parameters

- accountId
  - REQUIRED
  - string
  - formData
  - manager accountId
- email
  - REQUIRED
  - string
  - formData
  - manager email
- name
  - REQUIRED
  - string
  - formData
  - manager name
- access
  - REQUIRED
  - string($JSON)
  - formData
  - array of objects containing locationId and accessType

## Responses

### Statuses

- 200: Successfully created/updated manager and LocationAccess.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization require.
- 500: Internal server error.

### Code

    {}