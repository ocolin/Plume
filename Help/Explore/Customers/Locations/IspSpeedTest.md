# POST

### URI

/Customers/{id}/locations/{locationId}/ispSpeedTest

### Description

Run ISP speed test for GW node on mobile request.

## Parameters

- Id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
- requestId
  - string
  - formData
- serverId
  - number($double)
  - formData
- uplinkType
  - string
  - formData

## Responses

### Statuses

- 200: Success, run.
- 401: Authorization required or customer id not found.
- 404: Customer or location does not exists.
- 500: Internal server error.

### Code

    {}