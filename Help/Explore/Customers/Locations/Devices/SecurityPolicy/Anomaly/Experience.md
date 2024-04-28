# POST

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/securityPolicy/anomaly/experience

### Description

Initiate an Anomaly Experience (demo) for a Device on a location.

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
  - string
  - path
  - mac of device
- fqdn
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

----------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/securityPolicy/anomaly/experience

### Description

Delete an Anomaly Experience (demo) for a Device on a location.

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
  - string
  - path
  - mac of device

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: Location id, WifiNetwork, Device does not exist and is not known to Plume
- 500: Internal server error.
