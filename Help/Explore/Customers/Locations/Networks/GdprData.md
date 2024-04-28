# GET

### URI

/Customers/{id}/locations/{locationId}/networks/{networkId}/gdprData

### Description

Fetch the Gdpr Captive Portals data for a guest.

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
- networkId
  - REQUIRED
    - string
    - path
- email
  - REQUIRED
    - string
    - query
- localEndDate
  - REQUIRED
    - string
    - query
- localStartDate
  - REQUIRED
    - string
    - query

## Responses

### Statuses

- 200: Success, GDPR Captive Portals data returned.
- 401: Authorization required or customer id not found.
- 404: location id or secondary networks does not exist.
- 500: Internal server error.

### Code

    {}
