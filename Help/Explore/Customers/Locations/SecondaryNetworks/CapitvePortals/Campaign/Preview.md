# POST

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/campaign/preview

### Description

POST Captive Portal campaign preview for a given Location ID/NetworkId.

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
- campaignPayload
    - string($JSON)
    - formData

## Responses

### Statuses

- 200: Success, campaign posted.
- 401: Authorization required or customer id not found.
- 404: location id or CaptivePortal Network does not exist.
- 500: Internal server error.

### Code

    {}
