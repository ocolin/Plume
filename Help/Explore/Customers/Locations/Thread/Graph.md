# GET

### URI

/Customers/{id}/locations/{locationId}/thread/graph

### Description

Get thread graph for the location.

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

- 200: Success.
- 401: Authorization required.
- 404: Location does not exist.
- 422: Multiple validation errors.
- 500: Internal server error.

### Code

    {}