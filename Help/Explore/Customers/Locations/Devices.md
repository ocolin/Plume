# GET

### URI

/Customers/{id}/locations/{locationId}/devices

### Description

Get all the devices for a Location ID, including the device name, icon to use, MAC and IP  address, connecting nodes and more.

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
- daysOffline
  - number($double)
  - query
- allSSIDs
  - boolean
  - query
- showPartnerComponent
  - boolean
  - query

## Responses

### Statuses

All devices with 2g, 5g and 6g channel settings

- 200: Success, array of Devices returned.
- 401: Authorization required or customer id not found.
- 404: location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
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
                    "connectionStateChangeAt": "2024-04-28T03:24:45.702Z",
                    "health": {},
                    "leafToRoot": [
                        {}
                    ],
                    "mobileAppDeviceUuid": "string"
                }
            ]
        }
    }