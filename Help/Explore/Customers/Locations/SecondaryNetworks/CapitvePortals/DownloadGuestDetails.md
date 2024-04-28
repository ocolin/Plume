# GET

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/downloadGuestDetails

### Description

Download Captive Portal Guest details for a given Location ID/NetworkId.

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

- 204: Success, updated.
- 401: Authorization required or customer id not found.
- 404: location id or CaptivePortal Network does not exist.
- 500: Internal server error.

### Code

    {}
