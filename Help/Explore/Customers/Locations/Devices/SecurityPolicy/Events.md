# GET

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/securityPolicy/events

### Description

Get a Security Policy Events for Device for a Location ID.

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
- mac
    - REQUIRED
    - string
    - path
    - mac of device
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