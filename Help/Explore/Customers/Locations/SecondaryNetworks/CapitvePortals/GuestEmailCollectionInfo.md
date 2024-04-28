# GET

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/guestEmailCollectionInfo

### Description

Fetch the Captive Portal Network guest info download availability for the given network.

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
  - query
  - number of days for how far back in history for data
- limit
  - number($double)
  - query
  - limit how many emails we wish to return

## Responses

### Statuses

- 200: Success, CaptivePortal Networks guest info download availability returned.
- 401: Authorization required or customer id not found.
- 404: location id or secondary networks does not exist.
- 500: Internal server error.

### Code

    {
        "emailCount": 0,
        "emailCollectionEnabled": true,
        "emailLoginEnabled": true,
        "consentEnabledOrNotRequired": true
    }

