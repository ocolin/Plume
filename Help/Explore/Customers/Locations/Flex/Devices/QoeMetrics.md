# GET

### URI

/Customers/{id}/locations/{locationId}/flex/devices/{mac}/qoeMetrics

### Description

Device or pod QoE 15 minutes data.

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
- granularity
  - string
  - query
  - days/hours/minutes
- limit
  - number($double)
  - query
  - X # of days/hours/minutes
- timestampISOFormat
  - boolean
  - query
  - either timestamp utc number or ISO string


## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist.
- 500: Internal server error.

### Code

    {}