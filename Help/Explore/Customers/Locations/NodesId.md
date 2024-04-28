# GET

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}

### Description

Returns a single Node for a Location ID with its list of connected devices.

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
- nodeId
  - REQUIRED
  - string
  - path

## Responses

### Statuses

- 200: Success, node returned.
- 404: customer id or location id does not exist. Or, nodeId not claimed to this account.
- 500: Internal server error.

### Code

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

-----------

# POST

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}

### Description

Rename a particular Node for a Location ID with the option to disable the blinking LED.

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
- nodeId
    - REQUIRED
    - string
    - path
- nickname
  - REQUIRED
  - string
  - formData
- emitMessage
  - string
  - formData

## Responses

### Statuses

Rename a particular Node for a Location ID with the option to disable the blinking LED with the option "emitMessage":"on" or "off".

- 200: Success, a job well done.
- 400: Bad request, nickname is undefined or empty string.
- 401: Authorization required or customer id not found.
- 404: location ID or node ID not found.
- 500: Internal server error.

### Code

    {
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
        "timestamp": "2024-04-28T03:11:42.813Z",
        "updatedAt": "2024-04-28T03:11:42.813Z",
        "productFamily": "string",
        "productDescriptor": "string",
        "manufactureLocation": "string",
        "manufactureYear": "string",
        "manufactureWeek": "string",
        "deployment": "string",
        "shardNumber": "string",
        "synchronizedKey": "string",
        "connectionStateChangeAt": "2024-04-28T03:11:42.813Z",
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
                "createdAt": "2024-04-28T03:11:42.814Z",
                "updatedAt": "2024-04-28T03:11:42.814Z",
                "id": "string"
            }
        ]
    }

---------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}

### Description

Unclaim a particular Node from a Location ID with the option of preserving the original Package ID.

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
- nodeId
    - REQUIRED
    - string
    - path
- preservePackId
  - boolean
  - formData
  - packId should remain the same
- removeAccountId
  - boolean
  - formData
  - delete account id on the inventory node

## Responses

### Statuses

- 204: Success, a job well done.
- 400: Pod already unclaimed.
- 401: Authorization required or customer id not found.
- 403: the node is online, and can not be unclaimed.
- 404: location id not found, nodeId missing from URL, or location has zero owned pods.
- 500: Internal server error.



