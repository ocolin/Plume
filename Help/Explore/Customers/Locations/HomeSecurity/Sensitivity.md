# PATCH

### URI

/Customers/{id}/locations/{locationId}/homeSecurity/sensitivity

### Description

Configure motion event configuration for this location

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
- cooldown
  - number($double)
  - formData
  - sets required rest period for motion detected events to end, in seconds
- petMode
  - string
  - formData
  - adjusts sensitivity of motion detected events for pets; must be one of "none", "under10", "10to30", "over30" and can only be set if sensitivity = high
- sensitivity
  - string
  - formData
  - adjusts sensitivity of motion detected events; must be one of "low", "medium", "high"

## Responses

### Statuses

- 200: Success, updated HomeSecurity object returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        "liveMotionEnabled": true,
        "motionEventsEnabled": true,
        "cooldown": 0,
        "petMode": "string",
        "sensitivity": "string",
        "id": 0
    }