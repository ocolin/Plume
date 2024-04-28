# PUT

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/sendGuestDetails

### Description

Send Captive Portal Guest details to requesters email for a given Location ID/NetworkId.

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
- duration
  - number($double)
  - formData
  - number of days for how far back in history for data
- limit
  - number($double)
  - formData
  - limit how many emails we wish to return

## Responses

### Statuses

- 204: Success, updated.
- 401: Authorization required or customer id not found.
- 404: location id or CaptivePortal Network does not exist.
- 500: Internal server error.


