# PUT

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/freeze/suspend

### Description

Put a person suspend for a Location ID.

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
- deleteAllExceptSuspend
  - boolean
  - formData
- enable
  - boolean
  - formData

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {}

---------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/freeze/suspend

### Description

Delete person suspend for a Location ID.

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

## Responses

### Statuses

- 204: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

