# GET

### URI

/Customers/{id}/locations/{locationId}/taskStatuses

### Description

Retrieve all task statuses of nodes from controller

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
- 404: customer id or location id does not exist.
- 500: Internal server error.

### Code

    {}