# GET

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/securityPolicy/hourlyBlockedCounts

### Description

Get a Security Policy Hourly Blocked Counts for a Person for a Location ID.

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
- personId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}
