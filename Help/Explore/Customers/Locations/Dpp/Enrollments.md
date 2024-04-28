# PUT

### URI

/Customers/{id}/locations/{locationId}/dpp/enrollments

### Description

Create and persist a list of DPP enrollments

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- enrollments
  - REQUIRED
  - array
  - body


    [
        {}
    ]

## Responses

### Statuses

- 202: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or wifi network does not exist.
- 500: Internal server error.

### Code

    {}