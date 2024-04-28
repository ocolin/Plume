# GET

### URI

/Customers/{id}/locations/{locationId}/topology

### Description

DEPRECATED: The topology for a location including channels and devices.

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

Please use the GET /Customers/{id}/locations/{locationId}/forceGraph API as a replacement.

- 200: Success, array of Nodes returned.
- 404: customer id, location id, or topology does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
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
