# PATCH

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/appTime

### Description

Update a Device's AppTime config by location ID.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID
- mac
    - REQUIRED
    - string($JSON)
    - path
    - mac of device
- enable
  - boolean
  - formData

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or device does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}