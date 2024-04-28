# GET

### URI

/Customers/{id}/locations/{locationId}/appTime

### Description

Get a Location's AppTime config by location ID.

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
- 404: Location id not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

--------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/appTime

### Description

Update a Location's AppTime config by location ID.

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
  - boolean
  - formData
- appliesToAllDevices
  - boolean
  - formData
- sandboxSizeMb
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}