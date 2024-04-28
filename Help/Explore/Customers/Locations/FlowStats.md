# GET

### URI

/Customers/{id}/locations/{locationId}/flowStats

### Description

/Customers/{id}/locations/{locationId}/flowStats

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

- 200: Success, current flow stats configuration returned.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 500: Internal server error.

### Code

    {}

---------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/flowStats

### Description

Patches the flow stats configuration

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
- iotDeviceConfig
  - string
  - formData
  - auto || enable || disable
- screenDeviceConfig
  - string
  - formData
  - auto || enable || disable
- lanIotDeviceConfig
  - string
  - formData
  - auto || enable || disable
- interfaceStatsConfig
  - string
  - formData
  - auto || enable || disable

## Responses

### Statuses

- 202: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id, does not exist.
- 422: Input value is invalid.
- 500: Internal server error.
