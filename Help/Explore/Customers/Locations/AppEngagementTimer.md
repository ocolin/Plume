# GET

### URI

/Customers/{id}/locations/{locationId}/appEngagementTimer

### Description

Get information about app engagement timer details for a location

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
- 404: Location does not exist.

### Code

    {}