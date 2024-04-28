# GET

### URI

/Customers/{id}/locations/{locationId}/homeSecurity/events/history

### Description

Fetch the event history for this location

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
    - UTC unix ts
- to
    - number($double)
    - query
    - UTC unix ts, defaults to now
- category
  - string
  - query
  - Filter events by category (Motion or Plume [config changes]). Multiple categories can be passed as a comma-separated string. Default is both.
- limit
  - number($double)
  - query
  - Maximum number of events to return. Defaults to 10
- sort
  - boolean
  - query
  - whether the returned events will be post-sorted by timestamp

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