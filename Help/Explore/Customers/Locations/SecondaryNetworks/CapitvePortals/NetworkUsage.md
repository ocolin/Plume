# POST

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/networkUsage

### Description

Fetch the Captive Portal Network Usage stats for the given network.

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
- inclusions
  - string($JSON)
  - formData
  - Fields to include in response

## Responses

### Statuses

- 200: Success, CaptivePortal Networks returned.
- 401: Authorization required or customer id not found.
- 404: location id or secondary networks does not exist.
- 500: Internal server error.

### Code

    [
        {}
    ]