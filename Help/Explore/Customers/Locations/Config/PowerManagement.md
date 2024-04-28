# PATCH

### URI

/Customers/{id}/locations/{locationId}/config/powerManagement

### Description

Patch Power Management config for the location

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
- mode
  - REQUIRED
  - string
  - formData
  - Any of "AUTO", "ENABLE", "DISABLE"

## Responses

### Statuses

- 200: Ok.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: This location is not Power Management capable.
- 429: Too many requests.
- 500: Internal server error.

### Code

    {}