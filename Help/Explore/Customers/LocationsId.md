# HEAD

### URI

/Customers/{id}/locations/{locationId}

### Description

Verify that a Customer Id has a Location Id.

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

- 200: Success, no data returned.
- 401: Authorization required or customer id not found.
- 404: LocationId not found.
- 500: Internal server error.

### Code

    {
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
        "createdAt": "2024-04-27T00:20:03.324Z",
        "updatedAt": "2024-04-27T00:20:03.324Z",
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
            "createdAt": "2024-04-27T00:20:03.324Z",
            "updatedAt": "2024-04-27T00:20:03.324Z"
        },
        "bandSteering": {
            "_version": "1.0.0",
            "auto": true,
            "mode": "string",
            "updatedAt": "2024-04-27T00:20:03.324Z"
        },
        "clientSteering": {
            "_version": "1.0.0",
            "auto": true,
            "mode": "string",
            "steeringClass": "string",
            "updatedAt": "2024-04-27T00:20:03.324Z"
        },
        "controlMode": {
            "mode": "full",
            "updatedAt": "2024-04-27T00:20:03.324Z"
        },
        "monitorMode": {
            "_version": "1.0.0",
            "enable": true,
            "updatedAt": "2024-04-27T00:20:03.324Z"
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
            "createdAt": "2024-04-27T00:20:03.324Z",
            "updatedAt": "2024-04-27T00:20:03.324Z"
        },
        "wanSettings": {
            "_version": "1.0.1",
            "connectionType": "string",
            "updatedAt": "2024-04-27T00:20:03.324Z",
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
            "createdAt": "2024-04-27T00:20:03.324Z",
            "updatedAt": "2024-04-27T00:20:03.324Z",
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
            "updatedAt": "2024-04-27T00:20:03.324Z"
        },
        "networkStatus": {
            "status": "string",
            "statusChangedAt": "2024-04-27T00:20:03.324Z",
            "durationOfPreviousStatus": 0,
            "_version": "1.0.0",
            "updatedAt": "2024-04-27T00:20:03.324Z"
        },
        "optimizations": {
            "_version": "1.0.0",
            "auto": true,
            "enable": true,
            "dfsMode": "auto",
            "prefer160MhzMode": "auto",
            "hopPenalty": "auto",
            "preCACScheduler": "auto",
            "updatedAt": "2024-04-27T00:20:03.324Z",
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
            "updatedAt": "2024-04-27T00:20:03.324Z"
        },
        "locale": {
            "_version": "1.0.0",
            "region": "string",
            "dfsMode": "string",
            "updatedAt": "2024-04-27T00:20:03.324Z"
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
                "createdAt": "2024-04-27T00:20:03.324Z",
                "updatedAt": "2024-04-27T00:20:03.324Z"
            }
        },
        "_secondaryNetworks": {
            "locationId": "string",
            "networkConfigs": [],
            "createdAt": "2024-04-27T00:20:03.324Z",
            "updatedAt": "2024-04-27T00:20:03.324Z",
            "id": "string"
        }
    }

------

# GET

### URI

/Customers/{id}/locations/{locationId}

### Description

Get a Location's combined State and Config by LocationId.

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
- include
  - string
  - query
  - CSV value of objects to add to the response: summary (is the only option for now)


## Responses

### Statuses

- 200: Success, full object returned.
- 401: Authorization required or customer id not found.
- 404: LocationId not found.
- 500: Internal server error.

### Code

    {
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
        "createdAt": "2024-04-27T00:26:13.861Z",
        "updatedAt": "2024-04-27T00:26:13.861Z",
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
            "createdAt": "2024-04-27T00:26:13.861Z",
            "updatedAt": "2024-04-27T00:26:13.861Z"
        },
        "bandSteering": {
            "_version": "1.0.0",
            "auto": true,
            "mode": "string",
            "updatedAt": "2024-04-27T00:26:13.861Z"
        },
        "clientSteering": {
            "_version": "1.0.0",
            "auto": true,
            "mode": "string",
            "steeringClass": "string",
            "updatedAt": "2024-04-27T00:26:13.861Z"
        },
        "controlMode": {
            "mode": "full",
            "updatedAt": "2024-04-27T00:26:13.861Z"
        },
        "monitorMode": {
            "_version": "1.0.0",
            "enable": true,
            "updatedAt": "2024-04-27T00:26:13.861Z"
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
            "createdAt": "2024-04-27T00:26:13.861Z",
            "updatedAt": "2024-04-27T00:26:13.861Z"
        },
        "wanSettings": {
            "_version": "1.0.1",
            "connectionType": "string",
            "updatedAt": "2024-04-27T00:26:13.861Z",
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
            "createdAt": "2024-04-27T00:26:13.861Z",
            "updatedAt": "2024-04-27T00:26:13.861Z",
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
            "updatedAt": "2024-04-27T00:26:13.861Z"
        },
        "networkStatus": {
            "status": "string",
            "statusChangedAt": "2024-04-27T00:26:13.861Z",
            "durationOfPreviousStatus": 0,
            "_version": "1.0.0",
            "updatedAt": "2024-04-27T00:26:13.861Z"
        },
        "optimizations": {
            "_version": "1.0.0",
            "auto": true,
            "enable": true,
            "dfsMode": "auto",
            "prefer160MhzMode": "auto",
            "hopPenalty": "auto",
            "preCACScheduler": "auto",
            "updatedAt": "2024-04-27T00:26:13.861Z",
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
            "updatedAt": "2024-04-27T00:26:13.861Z"
        },
        "locale": {
            "_version": "1.0.0",
            "region": "string",
            "dfsMode": "string",
            "updatedAt": "2024-04-27T00:26:13.861Z"
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
                "createdAt": "2024-04-27T00:26:13.861Z",
                "updatedAt": "2024-04-27T00:26:13.861Z"
            }
        },
        "_secondaryNetworks": {
            "locationId": "string",
            "networkConfigs": [],
            "createdAt": "2024-04-27T00:26:13.861Z",
            "updatedAt": "2024-04-27T00:26:13.861Z",
            "id": "string"
        }
    }

---------

# PUT

### URI

/Customers/{id}/locations/{locationId}

### Description

Update the location name.

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
- name
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {}

------------

# PATCH

### URI

/Customers/{id}/locations/{locationId}

### Description

Update a Location's serviceId.

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
- serviceId
  - string
  - formData
- profile
  - string
  - formData
- name
  - string
  - formData

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist and is not known to Plume
- 422: You must specify at least one parameter to patch.
- 422: Only integration role can set profile to property.
- 500: Internal server error.

### Code

    {
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
        "createdAt": "2024-04-27T00:32:43.961Z",
        "updatedAt": "2024-04-27T00:32:43.961Z",
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
            "createdAt": "2024-04-27T00:32:43.961Z",
            "updatedAt": "2024-04-27T00:32:43.961Z"
        },
        "bandSteering": {
            "_version": "1.0.0",
            "auto": true,
            "mode": "string",
            "updatedAt": "2024-04-27T00:32:43.961Z"
        },
        "clientSteering": {
            "_version": "1.0.0",
            "auto": true,
            "mode": "string",
            "steeringClass": "string",
            "updatedAt": "2024-04-27T00:32:43.961Z"
        },
        "controlMode": {
            "mode": "full",
            "updatedAt": "2024-04-27T00:32:43.961Z"
        },
        "monitorMode": {
            "_version": "1.0.0",
            "enable": true,
            "updatedAt": "2024-04-27T00:32:43.961Z"
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
            "createdAt": "2024-04-27T00:32:43.961Z",
            "updatedAt": "2024-04-27T00:32:43.961Z"
        },
        "wanSettings": {
            "_version": "1.0.1",
            "connectionType": "string",
            "updatedAt": "2024-04-27T00:32:43.961Z",
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
            "createdAt": "2024-04-27T00:32:43.961Z",
            "updatedAt": "2024-04-27T00:32:43.961Z",
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
            "updatedAt": "2024-04-27T00:32:43.961Z"
        },
        "networkStatus": {
            "status": "string",
            "statusChangedAt": "2024-04-27T00:32:43.961Z",
            "durationOfPreviousStatus": 0,
            "_version": "1.0.0",
            "updatedAt": "2024-04-27T00:32:43.961Z"
        },
        "optimizations": {
            "_version": "1.0.0",
            "auto": true,
            "enable": true,
            "dfsMode": "auto",
            "prefer160MhzMode": "auto",
            "hopPenalty": "auto",
            "preCACScheduler": "auto",
            "updatedAt": "2024-04-27T00:32:43.961Z",
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
            "updatedAt": "2024-04-27T00:32:43.961Z"
        },
        "locale": {
            "_version": "1.0.0",
            "region": "string",
            "dfsMode": "string",
            "updatedAt": "2024-04-27T00:32:43.961Z"
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
                "createdAt": "2024-04-27T00:32:43.961Z",
                "updatedAt": "2024-04-27T00:32:43.961Z"
            }
        },
        "_secondaryNetworks": {
            "locationId": "string",
            "networkConfigs": [],
            "createdAt": "2024-04-27T00:32:43.961Z",
            "updatedAt": "2024-04-27T00:32:43.961Z",
            "id": "string"
        }
    }

-------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}

### Description

Archive a location.

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

- 204: Success, location archived.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 409: Location already archived.
- 500: Internal server error.

### Code

