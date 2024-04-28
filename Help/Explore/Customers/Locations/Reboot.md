# PUT

### URI

/Customers/{id}/locations/{locationId}/reboot

### Description

Reboots a particular on-line Node for a Location ID.

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
- delay
  - string($JSON)
  - formData

## Responses

### Statuses

- 204: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id, does not exist.
- 422: Delay, is not between 0 and 100000.
- 500: Internal server error.
