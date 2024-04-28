# PUT

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/freeze/{freezeTemplateId}

### Description

Put a person to be frozen for a Location ID.

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
- personId
    - REQUIRED
    - string
    - path
- freezeTemplateId
  - REQUIRED
  - string
  - path
  - Valid templates are 'untilMidinight', 'schoolNights', etc.
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

--------------

# POST

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/freeze/{freezeTemplateId}

### Description

Post a shared schedule uuid freeze for a person for a Location ID.

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
- personId
    - REQUIRED
    - string
    - path
- freezeTemplateId
    - REQUIRED
    - string
    - path
    - Valid templates are 'untilMidinight', 'schoolNights', etc.

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 404: FreezeTemplateId not found.
- 404: Person not found.
- 500: Internal server error.

### Code

    {}

----------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/freeze/{freezeTemplateId}

### Description

Delete a person to be frozen for a Location ID.

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
- personId
    - REQUIRED
    - string
    - path
- freezeTemplateId
    - REQUIRED
    - string
    - path
    - Valid templates are 'untilMidinight', 'schoolNights', etc.

## Responses

### Statuses

- 204: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

