# GET

### URI

/Customers/{id}/locations/{locationId}/appqoe/traffic_class_stats

### Description

Get App QoE metrics for traffic classes.

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
- granularity
  - REQUIRED
  - string
  - query
  - any of the values - total/1 minute/15 minutes/1 hour/1 day
- macs
  - string($JSON)
  - query
  - array of macs[]
- startTime
  - REQUIRED
  - string($date-time)
  - query
  - format yyyy-mm-ddThh:MM:ss.nnnZ, 24 hours time specified in UTC
- endTime
  - REQUIRED
  - string($date-time)
  - query
  - format yyyy-mm-ddThh:MM:ss.nnnZ, 24 hours time specified in UTC
- trafficClasses
  - string($JSON)
  - query
  - array of trafficClasses
- limit
  - number($double)
  - query
  - Maximum number of devices to return

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

------

# POST

### URI

/Customers/{id}/locations/{locationId}/appqoe/traffic_class_stats

### Description

Get App QoE metrics for traffic classes.

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
- granularity
    - REQUIRED
    - string
    - formData
    - any of the values - total/1 minute/15 minutes/1 hour/1 day
- macs
    - string($JSON)
    - formData
    - array of macs[]
- startTime
    - REQUIRED
    - string($date-time)
    - formData
    - format yyyy-mm-ddThh:MM:ss.nnnZ, 24 hours time specified in UTC
- endTime
    - REQUIRED
    - string($date-time)
    - formData
    - format yyyy-mm-ddThh:MM:ss.nnnZ, 24 hours time specified in UTC
- trafficClasses
    - string($JSON)
    - formData
    - array of trafficClasses
- limit
    - number($double)
    - formData
    - Maximum number of devices to return

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}