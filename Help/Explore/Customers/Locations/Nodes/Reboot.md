# PUT

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/reboot

### Description

Reboots a single on-line Node for a Location ID.

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
- nodeId
    - REQUIRED
    - string($JSON)
    - path
- delay
  - string($JSON)
  - formData

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: location id or nodeId, does not exist.
- 422: Delay, is not between 0 and 100000.
- 500: Internal server error.

