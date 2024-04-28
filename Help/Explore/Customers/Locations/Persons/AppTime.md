# PATCH

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/appTime

### Description

Update a Person's AppTime config by location ID.

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
- personId
    - REQUIRED
    - string
    - path
- enable
  - boolean
  - formData

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or person does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}
