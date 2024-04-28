# PUT

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/alerts/{type}

### Description

Snooze an alert on a node.

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
    - string($JSON)
    - path
- type
  - REQUIRED
  - string
  - path
  - enum of values include: poorHealth
- state
  - string
  - formData
  - enum of values include: snooze, ignore, performanceAcceptable, reset

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist or nodeId not claimed to this account.
- 422: Invalid alert type and/or state.
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
        "timestamp": "2024-04-28T02:57:13.423Z",
        "updatedAt": "2024-04-28T02:57:13.423Z",
        "productFamily": "string",
        "productDescriptor": "string",
        "manufactureLocation": "string",
        "manufactureYear": "string",
        "manufactureWeek": "string",
        "deployment": "string",
        "shardNumber": "string",
        "synchronizedKey": "string",
        "connectionStateChangeAt": "2024-04-28T02:57:13.423Z",
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
                "createdAt": "2024-04-28T02:57:13.423Z",
                "updatedAt": "2024-04-28T02:57:13.423Z",
                "id": "string"
            }
        ]
    }