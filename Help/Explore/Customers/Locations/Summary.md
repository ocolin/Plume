# GET

### URI

/Customers/{id}/locations/{locationId}/summary

### Description

DEPRECATED: The system summary for a location including topology, optimizations, and firmware upgrades.

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

- 200: Success, system info plus topology array returned.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "wifiNetworkProvisioned": true,
        "onboardingStatus": "string",
        "networkModeProvisioned": "string",
        "optimization": {},
        "monitorMode": true,
        "timestamp": "string",
        "topology": [
            {
                "id": "string",
                "ip": "string",
                "nickname": "string",
                "defaultName": "string",
                "firmwareVersion": "string",
                "wifiConfig": [
                    {}
                ],
                "channel": "string",
                "connectionState": "string",
                "2gChannel": "string",
                "5gChannel": "string",
                "6gChannel": "string",
                "backhaulType": "string",
                "connectedDeviceCount": 0,
                "leafToRoot": [
                    {}
                ]
            }
        ],
        "gatewayConnectionState": "string",
        "nodeConnectedCount": 0,
        "nodeClaimedCount": 0,
        "connectedDeviceCount": 0,
        "networkModeRealized": "string"
    }
