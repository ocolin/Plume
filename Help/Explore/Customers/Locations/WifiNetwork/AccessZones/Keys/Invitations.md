# POST

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones/{zoneId}/keys/{keyId}/invitations

### Description

Update home devices visible to guests.

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
- zoneId
  - REQUIRED
  - string($JSON)
  - path
- keyId
  - REQUIRED
  - number($double)
  - path
  - keys id be added

## Responses

### Statuses

- 200: Success, Invitation returned.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork accessZone zoneId/keyId does not exist.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "keyId": 0,
        "url": "string",
        "createdAt": "2024-04-27T18:13:29.064Z",
        "expiresAt": "2024-04-27T18:13:29.064Z",
        "wifiNetworkId": "string",
        "locationId": "string"
    }