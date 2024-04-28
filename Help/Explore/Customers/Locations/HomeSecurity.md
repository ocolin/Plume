# GET

### URI

/Customers/{id}/locations/{locationId}/homeSecurity

### Description

Fetch the home security configuration for this location

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

- 200: Success, HomeSecurity object returned.
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

-------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/homeSecurity

### Description

Enable/disable live motion streaming and/or motion events for this location

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
- source
  - string
  - formData
  - Source of patch request; must be one of "user" or "geofence"
- liveMotionEnabled
  - boolean
  - formData
- motionEventsEnabled
  - boolean
  - formData
- homeAwayActive
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