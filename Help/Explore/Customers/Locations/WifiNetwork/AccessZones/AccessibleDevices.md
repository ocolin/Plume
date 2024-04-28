# POST

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones/{zoneId}/accessibleDevices/{mac}

### Description

Add a device mac to a WiFi Access Zone

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
- zoneId
    - REQUIRED
    - string($JSON)
    - path
- mac
  - REQUIRED
  - string
  - path
  - the device mac to be added to the access zone

## Responses

### Statuses

- 200: Success, all access zones returned
- 400: Required fields missing
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork does not exist
- 422: Validation failed
- 500: Internal server error.

### Code

    {}

-------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones/{zoneId}/accessibleDevices/{mac}

### Description

Delete a device mac from a WiFi Access Zone

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
- zoneId
    - REQUIRED
    - string($JSON)
    - path
    - id of access zone
- mac
    - REQUIRED
    - string
    - path
    - the device mac to be added to the access zone

## Responses

### Statuses

- 200: Success, all access zones returned
- 400: Required fields missing
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork does not exist
- 422: Validation failed
- 500: Internal server error.

### Code

    {}