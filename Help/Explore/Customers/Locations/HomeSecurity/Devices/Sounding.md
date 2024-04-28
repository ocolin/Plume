# GET

### URI

/Customers/{id}/locations/{locationId}/homeSecurity/devices/sounding

### Description

Fetch the sounding states for eligible devices in this location

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
  - string
  - query
  - Optional mac address for single device lookup (fetches all devices by default)

## Responses

### Statuses

- 200: Success, device sounding states returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

----------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/homeSecurity/devices/sounding

### Description

Patch the sounding states for the given devices

## Parameters

- 200: Success, device sounding states returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

## Responses

### Statuses

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
- soundingStates
  - REQUIRED
  - object
  - body


    {}

### Code

    {}
