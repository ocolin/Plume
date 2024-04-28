# GET

### URI

/Customers/{id}/locations/{locationId}/appFacade/wifiDashboard

### Description

WiFi Dashboard

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

## Responses

### Statuses

- 200: Success, response object returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        "ssid": "string",
        "accessZones": [
            {
                "id": 0,
                "type": "string",
                "description": "string",
                "accessibleDevices": [
                    {
                        "id": "string",
                        "icon": "string",
                        "mac": "string",
                        "accessZone": "string",
                        "keyId": 0,
                        "medium": "string",
                        "ip": "string",
                        "freqBand": "string",
                        "channel": 0,
                        "name": "string",
                        "connectionState": "string",
                        "connectionStateChangeAt": "2024-04-27T15:01:25.608Z",
                        "health": {},
                        "leafToRoot": [
                            {}
                        ],
                        "mobileAppDeviceUuid": "string"
                    }
                ],
                "keys": [
                    {
                        "id": 0,
                        "encryptionKey": "string",
                        "accessZone": "string",
                        "accessZoneId": 0,
                        "format": "string",
                        "enable": true,
                        "content": [
                            "string"
                        ],
                        "createdAt": "2024-04-27T15:01:25.608Z",
                        "updatedAt": "2024-04-27T15:01:25.608Z",
                        "expiresAt": "2024-04-27T15:01:25.608Z",
                        "_version": "1.0.0"
                    }
                ]
            }
        ]
    }