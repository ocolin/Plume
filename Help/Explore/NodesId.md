# GET

### URI

/Nodes/{id}

### Description

Find a model instance by {{id}} from the data source.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Model id
- filter
  - string($JSON)
  - query
  - Filter defining fields and include - must be a JSON-encoded string ({"something":"value"})

## Responses

### Statuses



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
        "timestamp": "2024-04-28T18:21:58.437Z",
        "updatedAt": "2024-04-28T18:21:58.437Z",
        "productFamily": "string",
        "productDescriptor": "string",
        "manufactureLocation": "string",
        "manufactureYear": "string",
        "manufactureWeek": "string",
        "deployment": "string",
        "shardNumber": "string",
        "synchronizedKey": "string",
        "connectionStateChangeAt": "2024-04-28T18:21:58.437Z",
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
                "createdAt": "2024-04-28T18:21:58.437Z",
                "updatedAt": "2024-04-28T18:21:58.437Z",
                "id": "string"
            }
            ]
    }

--------

# DELETE

### URI

/Nodes/{id}

### Description

Unclaim a node by a groupAdmin or admin

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Model id
- forceUnclaim
  - boolean
  - formData
- preservePackId
  - boolean
  - formData

## Responses

### Statuses

- 204: Success, node changed.
- 401: Authorization required.
- 500: Internal server error.
