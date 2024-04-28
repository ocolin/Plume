# PUT

### URI

/Customers/{id}/locations/{locationId}/councilman/resync

### Description

Push Security Configurations to Councilman.

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

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.


