# GET

### URI

/Customers/{id}/locations/{locationId}/qos/appPrioritization/monitoring

### Description

Get monitoring metrics for app prioritization.

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
  - string
  - formData
  - any of the values - total/15 minutes/1 hour/1 day
- macs
  - string($JSON)
  - formData
  - array of macs[]
- trafficClasses
  - string($JSON)
  - formData
  - array of trafficClasses[]
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
- sortOrder
  - string
  - formData
  - TxBytes"|| "RxBytes
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