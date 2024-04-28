# POST

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortal/{networkId}/gdprForget/guests

### Description

Delete the Gdpr Captive Portals data for a guest.

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
- email
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 200: Success, GDPR Captive Portals data deleted.
- 401: Authorization required or customer id not found.
- 404: location id or secondary networks does not exist.
- 500: Internal server error.

### Code

    {}