# PUT

### URI

/Customers/{id}/locations/{locationId}/groupOfUnassignedDevices/freeze/forever

### Description

PUT GroupOfUnassignedDevices forever for a Location ID.

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

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {}

----------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/groupOfUnassignedDevices/freeze/forever

### Description

Delete GroupOfUnassignedDevices forever freeze for a Location ID.

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

## Responses

### Statuses

- 204: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

