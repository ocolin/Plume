# GET

### URI

/Customers/{id}/locations/{locationId}/groupOfUnassignedDevices/freezePolicy

### Description

Get GroupOfUnassignedDevices freeze policy for a Location ID.

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

- 200: Ok.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {}