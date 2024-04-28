# GET

### URI

/Customers/{id}/locations/{locationId}/dpp

### Description

Get the current DPP configuration for a Location ID.

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

## Responses

### Statuses

- 200: Success, current DPP configuration returned.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {}

----------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/dpp

### Description

Patch the DPP configuration mode for a Location ID.

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
- mode
  - REQUIRED
  - string
  - formData
  - auto || enable || disable

## Responses

### Statuses

- 202: Success, DPP updated.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 422: DPP value is invalid.
- 500: Internal server error.


