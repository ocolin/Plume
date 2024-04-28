# GET

### URI

/Customers/{id}/allLocations

### Description

Get a list of all locations on which you are assigned as a manager with accessType and on which you are owner.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Customer id

## Responses

### Statuses

- 200: Success.
- 404: Customer does not exist.
- 500: Internal server error.

### Code

    {}