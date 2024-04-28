# GET

### URI

/Customers/{id}/locations/{locationId}/homeSecurity/motionHistory/state

### Description

Fetch the motion state history for this location

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

- 200: Success, motion state array returned (Each element of the array is in the form ["val", "unix_ts"], where "val" is one of:
  - 0 - Not armed, not tripped
  - 1 - Not armed, tripped
  - 2 - Armed, not tripped
  - 3 - Armed, tripped
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    [
        {}
    ]