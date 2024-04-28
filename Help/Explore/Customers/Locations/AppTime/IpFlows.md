# GET

### URI

/Customers/{id}/locations/{locationId}/appTime/ipFlows

### Description

Get IP flows config

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

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or device does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

--------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/appTime/ipFlows

### Description

Patch IP flows config

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
- enable
  - REQUIRED
  - boolean
  - formData
- expiresAt
  - string
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
