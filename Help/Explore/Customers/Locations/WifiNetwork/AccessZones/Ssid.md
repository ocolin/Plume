# GET

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/ssid

### Description

Get the current WiFi SSID for a Location ID.

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

- 200: Success, current Wifi Network returned.
- 401: Authorization required or customer id not found.
- 404: location id or WifiNetwork does not exist.
- 500: Internal server error.

### Code

    {
        "ssid": "string"
    }
