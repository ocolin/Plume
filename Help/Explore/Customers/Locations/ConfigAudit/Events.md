# GET

### URI

/Customers/{id}/locations/{locationId}/configAudit/events

### Description

Get a Config Audit Trail Events for a Location ID.

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
- includes
  - REQUIRED
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


## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}