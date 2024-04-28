# GET

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork

### Description

Get the current WiFi SSID and PSK for a Location ID.

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
            "privateModeUpdatedAt": "2024-04-27T15:47:25.356Z",
            "devicesVisibleToGuests": [],
            "defaultSecurityPolicy": {
                "id": "string",
                "content": [
                    "string"
                ],
                "iotProtect": true,
                "iotProtectUpdatedAt": "2024-04-27T15:47:25.356Z",
                "iotProtectReason": "string",
                "websites": {},
                "secureWebsites": {},
                "createdAt": "2024-04-27T15:47:25.356Z",
                "updatedAt": "2024-04-27T15:47:25.356Z"
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
                "iotProtectUpdatedAt": "2024-04-27T15:47:25.356Z",
                "iotProtectReason": "string",
                "websites": {},
                "secureWebsites": {},
                "createdAt": "2024-04-27T15:47:25.356Z",
                "updatedAt": "2024-04-27T15:47:25.356Z"
            },
            "createdAt": "2024-04-27T15:47:25.356Z",
            "updatedAt": "2024-04-27T15:47:25.356Z",
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
                    "createdAt": "2024-04-27T15:47:25.356Z",
                    "updatedAt": "2024-04-27T15:47:25.356Z",
                    "expiresAt": "2024-04-27T15:47:25.356Z",
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
                    "iotProtectUpdatedAt": "2024-04-27T15:47:25.356Z",
                    "iotProtectReason": "string",
                    "websites": {},
                    "secureWebsites": {},
                    "createdAt": "2024-04-27T15:47:25.356Z",
                    "updatedAt": "2024-04-27T15:47:25.356Z"
                }
            ],
            "devices": [
                {
                    "id": "string",
                    "content": [
                        "string"
                    ],
                    "iotProtect": true,
                    "iotProtectUpdatedAt": "2024-04-27T15:47:25.356Z",
                    "iotProtectReason": "string",
                    "websites": {},
                    "secureWebsites": {},
                    "createdAt": "2024-04-27T15:47:25.356Z",
                    "updatedAt": "2024-04-27T15:47:25.356Z"
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
                    "createdAt": "2024-04-27T15:47:25.356Z",
                    "updatedAt": "2024-04-27T15:47:25.356Z",
                    "_version": "1.0.0"
                }
            ]
        }
    }

------------

# POST

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork

### Description

Set a WiFi SSID and PSK for a Location ID.

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
- encryptionKey
  - REQUIRED
  - string
  - formData
  - Needs to be a minimum of 8 characters
- ssid
  - REQUIRED
  - string
  - formData
- wpaMode
  - REQUIRED
  - string
  - formData
  - psk-mixed (WPA+WPA2) || sae-mixed (WPA2+WPA3) || psk2 (WPA2 only) || sae (WPA3 only)
- wpaModes
  - REQUIRED
  - string($JSON)
  - formData
  - Object with { freqBand24: wpaMode, freqBand5: wpaMode, freqBand6: sae } interface. For possible wpaMode values look at the wpaMode property.

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: location id does not exist and is not known to Plume
- 409: A WifiNetwork already exists for this location.
- 422: encryptionKey or ssid must be defined, or key length < 8.
- 500: Internal server error.

### Code

    {
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
            "privateModeUpdatedAt": "2024-04-27T15:52:07.094Z",
            "devicesVisibleToGuests": [],
            "defaultSecurityPolicy": {
                "id": "string",
                "content": [
                    "string"
                ],
                "iotProtect": true,
                "iotProtectUpdatedAt": "2024-04-27T15:52:07.094Z",
                "iotProtectReason": "string",
                "websites": {},
                "secureWebsites": {},
                "createdAt": "2024-04-27T15:52:07.094Z",
                "updatedAt": "2024-04-27T15:52:07.094Z"
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
                "iotProtectUpdatedAt": "2024-04-27T15:52:07.094Z",
                "iotProtectReason": "string",
                "websites": {},
                "secureWebsites": {},
                "createdAt": "2024-04-27T15:52:07.094Z",
                "updatedAt": "2024-04-27T15:52:07.094Z"
            },
            "createdAt": "2024-04-27T15:52:07.094Z",
            "updatedAt": "2024-04-27T15:52:07.094Z",
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
                    "createdAt": "2024-04-27T15:52:07.094Z",
                    "updatedAt": "2024-04-27T15:52:07.094Z",
                    "expiresAt": "2024-04-27T15:52:07.094Z",
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
                    "iotProtectUpdatedAt": "2024-04-27T15:52:07.094Z",
                    "iotProtectReason": "string",
                    "websites": {},
                    "secureWebsites": {},
                    "createdAt": "2024-04-27T15:52:07.094Z",
                    "updatedAt": "2024-04-27T15:52:07.094Z"
                }
            ],
            "devices": [
                {
                    "id": "string",
                    "content": [
                        "string"
                    ],
                    "iotProtect": true,
                    "iotProtectUpdatedAt": "2024-04-27T15:52:07.094Z",
                    "iotProtectReason": "string",
                    "websites": {},
                    "secureWebsites": {},
                    "createdAt": "2024-04-27T15:52:07.094Z",
                    "updatedAt": "2024-04-27T15:52:07.094Z"
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
                    "createdAt": "2024-04-27T15:52:07.094Z",
                    "updatedAt": "2024-04-27T15:52:07.094Z",
                    "_version": "1.0.0"
                }
            ]
        }
    }

---------------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork

### Description

Update a Customer's device type configuration (user feedback).

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
- ssid
  - string
  - formData
- uapsd
  - boolean
  - formData
- groupRekey
  - string
  - formData
  - auto || enable || disable
- fastTransition
  - string
  - formData
  - auto || enable || disable
- minWifiMode24
  - string
  - formData
  - auto || 11b || 11g || 11n
- privateMode
  - boolean
  - formData
  - Stop collecting user info like DNS-Queries, UserAgent etc
- enabled
  - boolean
  - formData
  - enabled:true for active WiFi radios, enabled:false to turn off all WiFi radios
- disableDefaultServiceNetwork
  - boolean
  - formData
  - disables the primary network VAP
- wpaMode
  - string
  - formData
  - psk-mixed (WPA+WPA2) || sae-mixed (WPA2+WPA3) || psk2 (WPA2 only) || sae (WPA3 only)
- wpaModes
  - string($JSON)
  - formData
  - Object with { freqBand24: wpaMode, freqBand5: wpaMode, freqBand6: sae } interface. For possible wpaMode values look at the wpaMode property.



## Responses

### Statuses

- 200: Success, device type has been updated but not validated as a device that has ever connected.
- 400: nickname value must be defined.
- 404: customer id and/or mac does not exist.
- 422: nickname value must be less than 33 characters.
- 500: Internal server error.

### Code

    {
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
        "privateModeUpdatedAt": "2024-04-27T15:59:01.820Z",
        "devicesVisibleToGuests": [],
        "defaultSecurityPolicy": {
            "id": "string",
            "content": [
                "string"
            ],
            "iotProtect": true,
            "iotProtectUpdatedAt": "2024-04-27T15:59:01.820Z",
            "iotProtectReason": "string",
            "websites": {},
            "secureWebsites": {},
            "createdAt": "2024-04-27T15:59:01.820Z",
            "updatedAt": "2024-04-27T15:59:01.820Z"
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
            "iotProtectUpdatedAt": "2024-04-27T15:59:01.820Z",
            "iotProtectReason": "string",
            "websites": {},
            "secureWebsites": {},
            "createdAt": "2024-04-27T15:59:01.820Z",
            "updatedAt": "2024-04-27T15:59:01.820Z"
        },
        "createdAt": "2024-04-27T15:59:01.820Z",
        "updatedAt": "2024-04-27T15:59:01.820Z",
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
                "createdAt": "2024-04-27T15:59:01.821Z",
                "updatedAt": "2024-04-27T15:59:01.821Z",
                "expiresAt": "2024-04-27T15:59:01.821Z",
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
                "iotProtectUpdatedAt": "2024-04-27T15:59:01.821Z",
                "iotProtectReason": "string",
                "websites": {},
                "secureWebsites": {},
                "createdAt": "2024-04-27T15:59:01.821Z",
                "updatedAt": "2024-04-27T15:59:01.821Z"
            }
        ],
        "devices": [
            {
                "id": "string",
                "content": [
                    "string"
                ],
                "iotProtect": true,
                "iotProtectUpdatedAt": "2024-04-27T15:59:01.821Z",
                "iotProtectReason": "string",
                "websites": {},
                "secureWebsites": {},
                "createdAt": "2024-04-27T15:59:01.821Z",
                "updatedAt": "2024-04-27T15:59:01.821Z"
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
                "createdAt": "2024-04-27T15:59:01.821Z",
                "updatedAt": "2024-04-27T15:59:01.821Z",
                "_version": "1.0.0"
            }
        ]
    }

------------------

# PUT

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork

### Description

Update the WiFi SSID and PSK for a Location ID.

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
- encryptionKey
    - REQUIRED
    - string
    - formData
    - Needs to be a minimum of 8 characters
- ssid
    - REQUIRED
    - string
    - formData
- wpaMode
    - REQUIRED
    - string
    - formData
    - psk-mixed (WPA+WPA2) || sae-mixed (WPA2+WPA3) || psk2 (WPA2 only) || sae (WPA3 only)
- wpaModes
    - REQUIRED
    - string($JSON)
    - formData
    - Object with { freqBand24: wpaMode, freqBand5: wpaMode, freqBand6: sae } interface. For possible wpaMode values look at the wpaMode property.


## Responses

### Statuses

- 200: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id, or wifi network does not exist.
- 422: encryptionKey or ssid must be defined.
- 500: Internal server error.

### Code

    {
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
            "privateModeUpdatedAt": "2024-04-27T16:04:36.938Z",
            "devicesVisibleToGuests": [],
            "defaultSecurityPolicy": {
                "id": "string",
                "content": [
                    "string"
                ],
                "iotProtect": true,
                "iotProtectUpdatedAt": "2024-04-27T16:04:36.938Z",
                "iotProtectReason": "string",
                "websites": {},
                "secureWebsites": {},
                "createdAt": "2024-04-27T16:04:36.938Z",
                "updatedAt": "2024-04-27T16:04:36.938Z"
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
                "iotProtectUpdatedAt": "2024-04-27T16:04:36.938Z",
                "iotProtectReason": "string",
                "websites": {},
                "secureWebsites": {},
                "createdAt": "2024-04-27T16:04:36.938Z",
                "updatedAt": "2024-04-27T16:04:36.938Z"
            },
            "createdAt": "2024-04-27T16:04:36.938Z",
            "updatedAt": "2024-04-27T16:04:36.938Z",
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
                    "createdAt": "2024-04-27T16:04:36.938Z",
                    "updatedAt": "2024-04-27T16:04:36.938Z",
                    "expiresAt": "2024-04-27T16:04:36.938Z",
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
                    "iotProtectUpdatedAt": "2024-04-27T16:04:36.938Z",
                    "iotProtectReason": "string",
                    "websites": {},
                    "secureWebsites": {},
                    "createdAt": "2024-04-27T16:04:36.938Z",
                    "updatedAt": "2024-04-27T16:04:36.938Z"
                }
            ],
            "devices": [
                {
                    "id": "string",
                    "content": [
                        "string"
                    ],
                    "iotProtect": true,
                    "iotProtectUpdatedAt": "2024-04-27T16:04:36.938Z",
                    "iotProtectReason": "string",
                    "websites": {},
                    "secureWebsites": {},
                    "createdAt": "2024-04-27T16:04:36.938Z",
                    "updatedAt": "2024-04-27T16:04:36.938Z"
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
                    "createdAt": "2024-04-27T16:04:36.938Z",
                    "updatedAt": "2024-04-27T16:04:36.938Z",
                    "_version": "1.0.0"
                }
            ]
        }
    }