# POST

### URI

/Customers/{id}/locations/{locationId}/appqoe/AppQoeStatsByTrafficClass

### Description

Get App QoE metrics by traffic classes / devices / apps.

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
- timePeriod
  - REQUIRED
  - string
  - formData
  - Any of "lastHour", "last24Hours","last7Days","last30Days"
- includeApps
  - boolean
  - formData
  - Default false, to include app stats in the response
- trafficClassNames
  - string($JSON)
  - formData
  - array of traffic classes - default list - av_streaming, gaming, video_conferencing

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}