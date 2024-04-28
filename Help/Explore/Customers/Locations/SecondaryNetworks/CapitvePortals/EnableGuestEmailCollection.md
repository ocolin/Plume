
# POST

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/enableGuestEmailCollection

### Description

Patch the Captive Portal Network to be compliant for guest email collection.

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

## Responses

### Statuses

- 200: Success, CaptivePortal Networks has been patched.
- 401: Authorization required or customer id not found.
- 404: location id or secondary networks does not exist.
- 500: Internal server error.

### Code

    {}