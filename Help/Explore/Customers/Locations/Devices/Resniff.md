# POST

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/resniff

### Description

Re-enables deviceType sniffing for a particular device.

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
- mac
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 204: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id, does not exist.
- 404: No device found with provided mac address
- 500: Internal server error.
