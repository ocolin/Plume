# GET

### URI

/Customers/{id}/locations/{locationId}/homeSecurity/motionHistory

### Description

Fetch the motion density history for this location

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
- bucket
  - number($double)
  - query
  - number of seconds in density calculation window; returned data points represent % of non-zero intensity values in the window

## Responses

### Statuses

- 200: Success, motion density array returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code
    
    [
        {}
    ]