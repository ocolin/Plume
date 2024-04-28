# PUT

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/freeze/{freezeTemplateId}

### Description

Put a device to be frozen for a Location ID.

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
- freezeTemplateId
  - REQUIRED
  - string
  - path
- deleteAllExceptSuspend
  - boolean
  - formData
- schedules
  - string($JSON)
  - formData
- enable
  - boolean
  - formData
- name
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.
- 501: Not Implemented, if location is utilizing shared location freeze schedules

### Code

    {}

--------

# POST

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/freeze/{freezeTemplateId}

### Description

Post a shared schedule uuid freeze for a device for a Location ID.

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
- freezeTemplateId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 404: FreezeTemplateId not found
- 404: Device not found
- 422: GroupOfUnassignedDevices has active freeze schedule
- 422: Person has active freeze schedule
- 500: Internal server error.

### Code

    {}

---------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/freeze/{freezeTemplateId}

### Description

Delete a device to be frozen for a Location ID.

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
- freezeTemplateId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 204: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: MAC address does not exist or is invalid.
- 500: Internal server error.

