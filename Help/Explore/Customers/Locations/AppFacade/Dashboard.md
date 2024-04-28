# GET

### URI

/Customers/{id}/locations/{locationId}/appFacade/dashboard

### Description

Get the current speed test aggregation result for a Location ID.

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
- excludeDevices
  - boolean
  - query

## Responses

### Statuses


- 200: Success, current speedTest result and most active devices returned.
- 401: Authorization required or customer id not found.
- 404: location id or NetworkMode does not exist.
- 500: Internal server error.

### Code

    {}