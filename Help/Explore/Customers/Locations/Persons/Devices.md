# DELETE

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/devices/{mac}

### Description

Unassign a device from Person for a location ID.

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
- mac
  - REQUIRED
  - string
  - path

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: Location id, Person id, or mac does not exist and is not known to Plume
- 500: Internal server error.

### Code
