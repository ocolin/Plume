# GET

### URI

/Customers/{id}/locations/{locationId}/flex/devices/{mac}/qoe/superLiveModeStream

### Description

Device or pod QoE super live mode data.

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
- startTime
    - number($double)
    - query
    - start timestamp
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