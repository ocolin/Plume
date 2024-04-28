# PUT

### URI

/Customers/{id}/locations/{locationId}/networkMode

### Description

Update the Network Mode for a Location ID.

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
- networkMode
  - string
  - formData

## Responses

### Statuses

- 200: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id, does not exist.
- 500: Internal server error.

### Code

    {
        "location": {
            "id": "string",
            "ipv6": {
                "mode": "auto",
                "addressingConfig": "auto"
            },
            "networkMode": "auto",
            "name": "string",
            "accountId": "string",
            "partnerId": "string",
            "groupIds": [],
            "serviceId": "string",
            "profile": "auto",
            "mDNSUniqueIdentifier": "string",
            "freezeTemplates": {},
            "serviceLevel": {},
            "homeAwayActive": true,
            "homeSecurityPriority": "disable",
            "appTime": {},
            "sniffing": {},
            "createdAt": "2024-04-27T18:49:00.327Z",
            "updatedAt": "2024-04-27T18:49:00.327Z",
            "dayOneEmailsSent": true,
            "region": "string",
            "stepFunctionTimers": [],
            "_version": "1.0.0",
            "groupOfUnassignedDevicesFreezeTemplates": [],
            "groupOfUnassignedDevicesFreezeSchedules": [],
            "isUtilizingSharedLocationFreezeSchedules": false,
            "uprise": false,
            "flex": false,
            "wifiNetworkImportedFromGateway": false,
            "customerId": "string",
            "ispSpeedTestConfiguration": {
                "_version": "1.0.1",
                "enable": true,
                "speedCapable": true,
                "enableAllNodes": true,
                "createdAt": "2024-04-27T18:49:00.327Z",
                "updatedAt": "2024-04-27T18:49:00.327Z"
            },
            "bandSteering": {
                "_version": "1.0.0",
                "auto": true,
                "mode": "string",
                "updatedAt": "2024-04-27T18:49:00.327Z"
            },
            "clientSteering": {
                "_version": "1.0.0",
                "auto": true,
                "mode": "string",
                "steeringClass": "string",
                "updatedAt": "2024-04-27T18:49:00.327Z"
            },
            "controlMode": {
                "mode": "full",
                "updatedAt": "2024-04-27T18:49:00.327Z"
            },
            "monitorMode": {
                "_version": "1.0.0",
                "enable": true,
                "updatedAt": "2024-04-27T18:49:00.327Z"
            },
            "backhaul": {
                "_version": "1.0.0",
                "mode": "auto",
                "wpaKey": "string",
                "dynamicBeacon": "auto",
                "wds": "auto",
                "wpaMode": "auto",
                "wpaModeRealized": "string",
                "hitlessTopology": "auto",
                "createdAt": "2024-04-27T18:49:00.327Z",
                "updatedAt": "2024-04-27T18:49:00.327Z"
            },
            "wanSettings": {
                "_version": "1.0.1",
                "connectionType": "string",
                "updatedAt": "2024-04-27T18:49:00.327Z",
                "static": {
                    "ipAddress": "string",
                    "subnetMask": "string",
                    "defaultGateway": "string"
                },
                "pppoe": {
                    "name": "string",
                    "password": "string"
                }
            },
            "wifiMotion": {
                "auto": false,
                "createdAt": "2024-04-27T18:49:00.327Z",
                "updatedAt": "2024-04-27T18:49:00.327Z",
                "id": "string"
            },
            "geoIp": {
                "ip": "string",
                "country": "string",
                "city": "string",
                "state": "string",
                "province": "string",
                "latitude": 0,
                "longitude": 0,
                "timezone": "string",
                "ISP": false,
                "_version": "1.0.0",
                "updatedAt": "2024-04-27T18:49:00.327Z"
            },
            "networkStatus": {
                "status": "string",
                "statusChangedAt": "2024-04-27T18:49:00.327Z",
                "durationOfPreviousStatus": 0,
                "_version": "1.0.0",
                "updatedAt": "2024-04-27T18:49:00.327Z"
            },
            "optimizations": {
                "_version": "1.0.0",
                "auto": true,
                "enable": true,
                "dfsMode": "auto",
                "prefer160MhzMode": "auto",
                "hopPenalty": "auto",
                "preCACScheduler": "auto",
                "updatedAt": "2024-04-27T18:49:00.327Z",
                "maxBandwidth": {
                    "maxBandwidth24g": "CHANNEL_BANDWIDTH_AUTO",
                    "maxBandwidth5g": "CHANNEL_BANDWIDTH_AUTO",
                    "maxBandwidth6g": "CHANNEL_BANDWIDTH_AUTO"
                }
            },
            "authorizations": {
                "_version": "1.0.0",
                "numPodsAuthorized": 32,
                "numNodesAuthorized": [],
                "updatedAt": "2024-04-27T18:49:00.327Z"
            },
            "locale": {
                "_version": "1.0.0",
                "region": "string",
                "dfsMode": "string",
                "updatedAt": "2024-04-27T18:49:00.327Z"
            },
            "networkAccess": {
                "hell": [],
                "networks": [
                    {
                        "networkId": "string",
                        "purgatory": false,
                        "heaven": [],
                        "captivePortal": false
                    }
                ],
                "personGroups": [
                    {
                        "groupId": "string",
                        "networkId": "string",
                        "name": "string",
                        "devices": []
                    }
                ],
                "deviceGroups": [
                    {
                        "groupId": "string",
                        "networkId": "string",
                        "name": "string",
                        "devices": []
                    }
                ],
                "groupShares": [
                    {
                        "groupIds": [
                            {}
                        ]
                    }
                ]
            },
            "dppConfiguration": {
                "locationId": "string",
                "mode": "auto",
                "enrollments": [
                    {
                        "bootstrapUri": "string",
                        "sha256": "string",
                        "networkId": "string"
                    }
                ]
            },
            "haahsConfiguration": {
                "locationId": "string",
                "mode": "auto",
                "subscription": {
                    "haahsConfiguration": "string",
                    "status": "Not supported",
                    "createdAt": "2024-04-27T18:49:00.327Z",
                    "updatedAt": "2024-04-27T18:49:00.327Z"
                }
            },
            "_secondaryNetworks": {
                "locationId": "string",
                "networkConfigs": [],
                "createdAt": "2024-04-27T18:49:00.327Z",
                "updatedAt": "2024-04-27T18:49:00.327Z",
                "id": "string"
            }
        }
    }

--------------

# GET

### URI

/Customers/{id}/locations/{locationId}/networkMode

### Description

Get the current Network Mode for a Location ID.

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

- 200: Success, current NetworkMode returned.
- 401: Authorization required or customer id not found.
- 404: location id or NetworkMode does not exist.
- 500: Internal server error.

### Code

    {
        "networkMode": "string"
    }