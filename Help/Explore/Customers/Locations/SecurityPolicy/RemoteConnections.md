# GET

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/remoteConnections

### Description

Get the Unauthorized Remote Connections config for a Location ID.

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

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

-----------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/remoteConnections

### Description

Patch a Remote Connections Config for the given Location ID.

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
  - Any of "auto", "enabled", "disabled", "highRiskOnly"

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}