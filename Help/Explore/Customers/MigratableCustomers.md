# POST

### URI

/Customers/migratableCustomers

### Description

Returns a paginated list of accounts given a filter.

## Parameters

- where
  - REQUIRED
  - string($JSON)
  - formData
- limit
  - number($double)
  - formData
- cursor
  - string
  - formData

## Responses

### Statuses

- 200: Success.
- 400: Required fields are missing.
- 401: Authorization required.
- 422: Input validation failed.
- 500: Internal server error.

### Code

    {}