# POST

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/uploadCampaignAsset

### Description

Upload campaign asset for given location.

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

## Responses

### Statuses

- 200: Success, appId info returned.
- 401: Authorization required or customer id not found.
- 404: location id or url does not exist.
- 500: Internal server error.

### Code

    {}
