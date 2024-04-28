# GET

### URI

/Customers/{id}/locations/{locationId}/flex/devices/{mac}/alarms

### Description

Device alarm history graph array for a particular MAC address.

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
    - device mac address
- coverageAlarmThreshold
  - string
  - query
  - a coverage alarm will be returned (value=1) when rssi_alarm_penalty_count >= this value
- granularity
    - string
    - query
    - days/hours/minutes
- limit
    - number($double)
    - query
    - X # of days/hours/minutes
- start
    - number($double)
    - query
    - number of milliseconds elapsed since 1 January 1970 00:00:00 UTC. Defaults to now - (limit * granularity)


## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist.
- 500: Internal server error.

### Code

    {}