# POST

### URI

/Customers/{id}/locations/{locationId}/startWps

### Description

Start a WPS session

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- nodeId
  - REQUIRED
  - string($JSON)
  - path
- keyId
  - string($JSON)
  - formData
- networkId
  - string
  - formData

## Responses

### Statuses

- 201: Success, a WPS session was requested.
- 401: Authorization required or customer id not found.
- 404: location id not found or nodeId missing from URL
- 500: Internal server error.

### Code

    {}