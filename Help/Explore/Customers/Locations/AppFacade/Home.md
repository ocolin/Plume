# GET

### URI

/Customers/{id}/locations/{locationId}/appFacade/home

### Description

Retrieve timezone, capabilities, summary, ... for this location.

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
- filters
  - string($JSON)
  - query
- daysOffline
  - number($double)
  - query

## Responses

### Statuses

- 200: Success, an array of properties returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        `"_version": "1.0.0",
        "customer": {
            "id": "string",
            "accountId": "string",
            "anonymous": false,
            "autoProvisioned": false,
            "contact": "string",
            "name": "string",
            "locked": false,
            "partnerId": "string",
            "acceptLanguage": "en-US",
            "preferredLanguage": "string",
            "nocSettings": {},
            "linkedAccounts": [
                {}
            ],
            "source": "unknown",
            "createdAt": "2024-04-27T01:32:11.594Z",
            "provisioningSsoAuditTrail": false,
            "_version": "1.0.0",
            "realm": "string",
            "username": "string",
            "email": "string",
            "emailVerified": true,
            "termsAndPrivacy": {
                "termsDocumentId": 0,
                "termsAcceptedAt": "2024-04-27T01:32:11.594Z",
                "privacyDocumentId": 0,
                "privacyAcceptedAt": "2024-04-27T01:32:11.594Z"
            },
            "migration": {
                "migratedFrom": "string",
                "migratedTo": "string",
                "migratedAt": "2024-04-27T01:32:11.594Z",
                "migrationReason": "string",
                "id": "string"
            }
        },
        "capabilities": {
            "networkConfiguration": {
                "networkMode": {
                    "disabled": true,
                    "reason": "string"
                },
                "upnp": {
                    "disabled": true,
                    "reason": "string"
                },
                "igmpSnooping": {
                    "disabled": true,
                    "reason": "string"
                },
                "igmpProxy": {
                    "disabled": true,
                    "reason": "string"
                },
                "mldProxy": {
                    "disabled": true,
                    "reason": "string"
                },
                "multicastToUnicast": {
                    "disabled": true,
                    "reason": "string"
                },
                "dnsServers": {
                    "disabled": true,
                    "reason": "string"
                },
                "dhcpReservations": {
                    "disabled": true,
                    "reason": "string"
                },
                "portForward": {
                    "disabled": true,
                    "reason": "string"
                }
            },
            "security": {
                "dnsCategoryBlocking": {
                    "disabled": true,
                    "reason": "string"
                }
            },
            "ispSpeedTest": {
                "disabled": true,
                "reason": "string"
            },
            "deviceFreeze": {
                "disabled": true,
                "reason": "string"
            },
            "multiPasswordSSID": {
                "disabled": true,
                "reason": "string"
            },
            "wifiMotion": {
                "disabled": true,
                "reason": "string"
            },
            "_version": "1.0.0",
            "capabilitiesChangedAt": "2024-04-27T01:32:11.594Z",
            "createdAt": "2024-04-27T01:32:11.594Z"
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
            "updatedAt": "2024-04-27T01:32:11.594Z"
        },
        "networkStatus": {
            "status": "string",
            "statusChangedAt": "2024-04-27T01:32:11.594Z",
            "durationOfPreviousStatus": 0,
            "_version": "1.0.0",
            "updatedAt": "2024-04-27T01:32:11.594Z"
        },
        "optimization": {
            "_version": "1.0.0",
            "auto": true,
            "enable": true,
            "dfsMode": "auto",
            "prefer160MhzMode": "auto",
            "hopPenalty": "auto",
            "preCACScheduler": "auto",
            "updatedAt": "2024-04-27T01:32:11.594Z",
            "maxBandwidth": {
                "maxBandwidth24g": "CHANNEL_BANDWIDTH_AUTO",
                "maxBandwidth5g": "CHANNEL_BANDWIDTH_AUTO",
                "maxBandwidth6g": "CHANNEL_BANDWIDTH_AUTO"
            }
        },
        "wifiNetwork": {
            "encryptionKey": "string",
            "ssid": "string",
            "masterKeyIndex": 0,
            "encryption": "OPEN",
            "wpaMode": "psk2",
            "encryptionMode": "1",
            "radiusServerIp": "string",
            "radiusServerPort": 0,
            "ssidBroadcast": true,
            "uapsd": true,
            "enabled": true,
            "disableDefaultServiceNetwork": false,
            "groupRekey": "auto",
            "fastTransition": "auto",
            "minWifiMode24": "auto",
            "privateMode": false,
            "privateModeUpdatedAt": "2024-04-27T01:32:11.594Z",
            "devicesVisibleToGuests": [],
            "defaultSecurityPolicy": {
                "id": "string",
                "content": [
                    "string"
                ],
                "iotProtect": true,
                "iotProtectUpdatedAt": "2024-04-27T01:32:11.594Z",
                "iotProtectReason": "string",
                "websites": {},
                "secureWebsites": {},
                "createdAt": "2024-04-27T01:32:11.594Z",
                "updatedAt": "2024-04-27T01:32:11.594Z"
            },
            "content": [
                "string"
            ],
            "appliesToAllDevicesSecurityPolicy": {
                "id": "string",
                "content": [
                    "string"
                ],
                "iotProtect": true,
                "iotProtectUpdatedAt": "2024-04-27T01:32:11.594Z",
                "iotProtectReason": "string",
                "websites": {},
                "secureWebsites": {},
                "createdAt": "2024-04-27T01:32:11.594Z",
                "updatedAt": "2024-04-27T01:32:11.594Z"
            },
            "createdAt": "2024-04-27T01:32:11.594Z",
            "updatedAt": "2024-04-27T01:32:11.594Z",
            "_version": "1.0.0",
            "wpaModeDeferredExpiresAt": "string",
            "wpaModes": {},
            "id": "string",
            "locationId": "string",
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
                    "createdAt": "2024-04-27T01:32:11.594Z",
                    "updatedAt": "2024-04-27T01:32:11.594Z",
                    "expiresAt": "2024-04-27T01:32:11.594Z",
                    "_version": "1.0.0"
                }
            ],
            "persons": [
                {
                    "id": "string",
                    "content": [
                        "string"
                    ],
                    "iotProtect": true,
                    "iotProtectUpdatedAt": "2024-04-27T01:32:11.594Z",
                    "iotProtectReason": "string",
                    "websites": {},
                    "secureWebsites": {},
                    "createdAt": "2024-04-27T01:32:11.594Z",
                    "updatedAt": "2024-04-27T01:32:11.594Z"
                }
            ],
            "devices": [
                {
                    "id": "string",
                    "content": [
                        "string"
                    ],
                    "iotProtect": true,
                    "iotProtectUpdatedAt": "2024-04-27T01:32:11.594Z",
                    "iotProtectReason": "string",
                    "websites": {},
                    "secureWebsites": {},
                    "createdAt": "2024-04-27T01:32:11.594Z",
                    "updatedAt": "2024-04-27T01:32:11.594Z"
                }
            ],
            "accessZones": [
                {
                    "id": 0,
                    "type": "string",
                    "description": "string",
                    "accessibleDevices": [
                        {}
                    ],
                    "createdAt": "2024-04-27T01:32:11.594Z",
                    "updatedAt": "2024-04-27T01:32:11.594Z",
                    "_version": "1.0.0"
                }
            ]
        },
        "devices": {
            "devices": [
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
                    "connectionStateChangeAt": "2024-04-27T01:32:11.594Z",
                    "health": {},
                    "leafToRoot": [
                        {}
                    ],
                    "mobileAppDeviceUuid": "string"
                }
            ]
        },
        "nodes": {
            "serialNumber": "string",
            "id": "string",
            "manufacturerSerialNumber": "string",
            "_version": "1.0.0",
            "subscriptionRequired": false,
            "residentialGateway": false,
            "firmwareVersion": "string",
            "platformVersion": "string",
            "model": "string",
            "backhaulDhcpPoolIdx": 0,
            "radioMac24": "string",
            "radioMac50": "string",
            "radioMac60": "string",
            "ethernetMac": "string",
            "bluetoothMac": "string",
            "thread": "string",
            "blacklists": [
                {}
            ],
            "connectionState": "string",
            "countryCode": "string",
            "networkMode": "string",
            "macs": [
                {}
            ],
            "nickname": "string",
            "boxSerialNumber": "string",
            "packId": "string",
            "status": "string",
            "timestamp": "2024-04-27T01:32:11.594Z",
            "updatedAt": "2024-04-27T01:32:11.594Z",
            "productFamily": "string",
            "productDescriptor": "string",
            "manufactureLocation": "string",
            "manufactureYear": "string",
            "manufactureWeek": "string",
            "deployment": "string",
            "shardNumber": "string",
            "synchronizedKey": "string",
            "connectionStateChangeAt": "2024-04-27T01:32:11.594Z",
            "ethernetLan": {
                "default": {
                    "mode": "auto"
                }
            },
            "hasUniqueCertificate": true,
            "customerId": "string",
            "locationId": "string",
            "vendor": {
                "name": "string",
                "partNumber": "string",
                "manufacturer": "string",
                "factory": "string",
                "mfgDate": "string"
            },
            "certificates": {
                "clientAfter": "string",
                "clientBefore": "string",
                "rootAfter": "string",
                "rootBefore": "string"
            },
            "kvConfigs": [
                {
                    "module": "string",
                    "key": "string",
                    "value": "string",
                    "persist": false,
                    "createdAt": "2024-04-27T01:32:11.594Z",
                    "updatedAt": "2024-04-27T01:32:11.594Z",
                    "id": "string"
                }
            ]
        },
        "summary": {
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
        },
        "alerts": {},
        "configAndState": "string",
        "id": 0`
    }