# GET

### URI

/Customers/{id}/locations/{locationId}/homeAway/events

### Description

Fetch the all the Homeaway events history for this location

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
- from
    - number($double)
    - query
    - UTC unix epoch ms, defaults to 1 week ago
- to
    - number($double)
    - query
    - UTC unix ts, defaults to now
- limit
  - number($double)
  - query
  - Maximum number of events to return. Defaults to 100

## Responses

### Statuses

- 200: Success, event array returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    [
        {}
    ]