# GET

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/realizedState

### Description

Retrieve all securityStates for a Location ID.

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

## Responses

### Statuses

- 200: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 500: Internal server error.

### Code

    {}