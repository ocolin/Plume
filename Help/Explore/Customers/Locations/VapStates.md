# GET

/Customers/{id}/locations/{locationId}/vapStates

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
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
