# PUT

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/freeze/forever

### Description

Put a device forever freeze for a Location ID.

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

--------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/freeze/forever

### Description

Delete a device forever freeze for a Location ID.

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

- 204: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: MAC address does not exist or is invalid.
- 500: Internal server error.

