# GET

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/events

### Description

Get a Security Policy Events for a Location ID.

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
- includes
  - string($JSON)
  - query
- startTime
  - string($date-time)
  - REQUIRED
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

200: Success.
401: Authorization required or customer id not found.
404: Location id or WifiNetwork does not exist and is not known to Plume
500: Internal server error.

### Code

    {}

---------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/events

### Description

Get the Guard Event Domain Groups for a Location ID.

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
- categories
  - REQUIRED
  - string($JSON)
  - formData
- reason
  - string
  - formData

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: Location id, WifiNetwork, Device or DNS does not exist and is not known to Plume
- 500: Internal server error.

### Code
