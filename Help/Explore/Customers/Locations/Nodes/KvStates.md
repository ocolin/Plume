# GET

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/kvStates

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
    - string
    - path

## Responses

### Statuses

- 200: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 422: nodeId must be defined.
- 425: nodeId must belong to the location.
- 500: Internal server error.

### Code

    {}