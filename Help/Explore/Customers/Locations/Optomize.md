# POST

### URI

/Customers/{id}/locations/{locationId}/optimize

### Description

Manually initiate an Optimize request for a Location ID.

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
- forcePcs
  - boolean
  - formData

## Responses

### Statuses

- 200: Success, optimize request sent.
- 401: Authorization required or customer id not found.
- 404: location id, does not exist.
- 500: Internal server error.

### Code

    "string"