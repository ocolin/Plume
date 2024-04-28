# GET

### URI

/Customers/{id}/locations/{locationId}/wpsState

### Description

Get WPS state

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID

## Responses

### Statuses

- 200: Success, a job well done.
- 401: Authorization required or customer id not found.
- 404: location id not found or nodeId missing from URL
- 500: Internal server error.

### Code

    {}