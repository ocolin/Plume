# PATCH

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/clientSteering

### Description

Toggle auto:on/off client steering for a device.

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
- auto
  - boolean
  - formData
- steeringClass
  - string
  - formData
  - override deviceTypeId for testing purposes

## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: Invalid mac address.
- 500: Internal server error.

### Code

    {
        "auto": true,
        "updatedAt": "2024-04-28T00:23:12.545Z"
    }
