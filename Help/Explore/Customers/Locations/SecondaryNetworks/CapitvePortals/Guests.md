# GET

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/guests

### Description

Fetch the list of Guests which were logged into the given captivePortal network during the current day.

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
- networkId
    - REQUIRED
    - string
    - path
- orderBy
  - string
  - query
- limit
  - number($double)
  - query

## Responses

### Statuses

- 200: Success, CaptivePortal Networks returned.
- 401: Authorization required or customer id not found.
- 404: location id or secondary networks does not exist.
- 500: Internal server error.

### Code
