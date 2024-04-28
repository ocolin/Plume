# PUT

### URI

/Nodes/{id}/packId

### Description

Rename an unclaimed node/pod's packId in Plume's global inventory.

## Parameters

- id
  - REQUIRE
  - string
  - path
- packId
  - REQUIRE
  - string
  - formData

## Responses

### Statuses

- 200: Success, a job well done.
- 400: Bad request, packId is undefined or empty string.
- 404: NodeId not found.
- 422: PackId is invalid (too long).
- 423: PackId cannot be changed for a claimed pod.
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
        "timestamp": "2024-04-28T21:25:59.040Z",
        "updatedAt": "2024-04-28T21:25:59.040Z",
        "productFamily": "string",
        "productDescriptor": "string",
        "manufactureLocation": "string",
        "manufactureYear": "string",
        "manufactureWeek": "string",
        "deployment": "string",
        "shardNumber": "string",
        "synchronizedKey": "string",
        "connectionStateChangeAt": "2024-04-28T21:25:59.040Z",
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
                "createdAt": "2024-04-28T21:25:59.040Z",
                "updatedAt": "2024-04-28T21:25:59.040Z",
                "id": "string"
            }
        ]
    }