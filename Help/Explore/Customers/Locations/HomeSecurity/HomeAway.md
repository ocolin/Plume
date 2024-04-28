# PATCH

### URI

/Customers/{id}/locations/{locationId}/homeSecurity/homeAway

### Description

Enable/disable homeAway wifiMotionEvents activation for this location

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
- homeAwayActive
  - REQUIRED
  - boolean
  - formData
  - Enable/disable motion events based on location Homeaway state

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