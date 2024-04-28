# GET

### URI

/Customers/{id}/locations/{locationId}/managers

### Description

Get a list of all managers the are assigned to manage your location.

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID

## Responses

### Statuses

- 200: Success.
- 404: Location does not exist.

### Code

    {}

------------

# POST

### URI

/Customers/{id}/locations/{locationId}/managers

### Description

Assign a manager to your location

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- email
  - REQUIRED
  - string
  - formData
- name
  - REQUIRED
  - string
  - formData
- accessType
  - string
  - formData
- notificationOptions
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 404: Location does not exist.
- 422: Invalid email, name, access type or manager is already assigned to this location

### Code

    {
        "ownerId": "string",
        "locationId": "string",
        "personId": "string",
        "managerId": "string",
        "accessType": "admin",
        "status": "pending",
        "id": "string",
        "createdAt": "2024-04-28T13:44:27.368Z",
        "updatedAt": "2024-04-28T13:44:27.368Z"
    }

----------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/managers/{managerId}

### Description

Update type of access of manager on location.

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- managerId
  - REQUIRED
  - string
  - path
- accessType
  - string
  - formData
- name
  - string
  - formData
- notificationOptions
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist and is not known to Plume
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
        "createdAt": "2024-04-28T13:55:00.692Z",
        "updatedAt": "2024-04-28T13:55:00.692Z",
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
            "createdAt": "2024-04-28T13:55:00.692Z",
            "updatedAt": "2024-04-28T13:55:00.692Z"
        },
        "bandSteering": {
            "_version": "1.0.0",
            "auto": true,
            "mode": "string",
            "updatedAt": "2024-04-28T13:55:00.692Z"
        },
        "clientSteering": {
            "_version": "1.0.0",
            "auto": true,
            "mode": "string",
            "steeringClass": "string",
            "updatedAt": "2024-04-28T13:55:00.692Z"
        },
        "controlMode": {
            "mode": "full",
            "updatedAt": "2024-04-28T13:55:00.692Z"
        },
        "monitorMode": {
            "_version": "1.0.0",
            "enable": true,
            "updatedAt": "2024-04-28T13:55:00.692Z"
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
            "createdAt": "2024-04-28T13:55:00.692Z",
            "updatedAt": "2024-04-28T13:55:00.692Z"
        },
        "wanSettings": {
            "_version": "1.0.1",
            "connectionType": "string",
            "updatedAt": "2024-04-28T13:55:00.692Z",
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
            "createdAt": "2024-04-28T13:55:00.692Z",
            "updatedAt": "2024-04-28T13:55:00.692Z",
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
            "updatedAt": "2024-04-28T13:55:00.693Z"
        },
        "networkStatus": {
            "status": "string",
            "statusChangedAt": "2024-04-28T13:55:00.693Z",
            "durationOfPreviousStatus": 0,
            "_version": "1.0.0",
            "updatedAt": "2024-04-28T13:55:00.693Z"
        },
        "optimizations": {
            "_version": "1.0.0",
            "auto": true,
            "enable": true,
            "dfsMode": "auto",
            "prefer160MhzMode": "auto",
            "hopPenalty": "auto",
            "preCACScheduler": "auto",
            "updatedAt": "2024-04-28T13:55:00.693Z",
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
            "updatedAt": "2024-04-28T13:55:00.693Z"
        },
        "locale": {
            "_version": "1.0.0",
            "region": "string",
            "dfsMode": "string",
            "updatedAt": "2024-04-28T13:55:00.693Z"
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
                "createdAt": "2024-04-28T13:55:00.693Z",
                "updatedAt": "2024-04-28T13:55:00.693Z"
            }
        },
        "_secondaryNetworks": {
            "locationId": "string",
            "networkConfigs": [],
            "createdAt": "2024-04-28T13:55:00.693Z",
            "updatedAt": "2024-04-28T13:55:00.693Z",
            "id": "string"
        }
    }

-----------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/managers/{managerId}

### Description

Delete manager access for location and destroy access tokens for that manager".

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- managerId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 204: Success.
- 400: Required fields missing or field type is incorrect.
- 404: Location or Manager does not exist.

### Code

    {}