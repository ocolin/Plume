# GET

### URI

/Customers/{id}/securityPolicy/contentFilterCategories/{contentFilter}

### Description

Get Content filter categories

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- contentFilter
  - string($JSON)
  - path

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}