# GET

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/downloadGuestDetailsDirect

### Description

Download Captive Portal Guest details for a given Location ID/NetworkId without accessing Amazon S3.

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
- limit
    - number($double)
    - formData

## Responses

### Statuses

- 204: Success, updated.
- 401: Authorization required or customer id not found.
- 404: location id or CaptivePortal Network does not exist.
- 500: Internal server error.

### Code

    {}