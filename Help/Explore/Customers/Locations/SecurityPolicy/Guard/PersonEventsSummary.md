# GET

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/guard/personEventsSummary

### Description

Get the Guard Event Stats for all persons in a Location ID.

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
- timePeriod
  - REQUIRED
  - string
  - query
  - Any of "last24Hours","last7Days","last30Days"

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}