# GET

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/securityPolicy/events

### Description

Get a Security Policy Events for Person for a Location ID.

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
- includes
    - string($JSON)
    - query
- startTime
    - REQUIRED
    - string($date-time)
    - query
- limit
    - number($double)
    - query
- direction
    - string
    - query
- protectionType
    - string
    - query

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}