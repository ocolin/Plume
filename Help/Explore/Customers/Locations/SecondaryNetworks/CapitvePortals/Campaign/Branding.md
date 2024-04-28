# PATCH

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/campaign/branding

### Description

Patch the Captive Portal campaign branding properties for a given Location ID/NetworkId.

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
- payload
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success, campaign branding patched.
- 401: Authorization required or customer id not found.
- 404: location id or CaptivePortal Network does not exist.
- 500: Internal server error.

### Code

    {}
