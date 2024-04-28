# GET

### URI

/Nodes

### Description

Find all instances of the model matched by filter from the data source.

## Parameters

- filter
  - string($JSON)
  - query
  - Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({"where":{"something":"value"}}). See https://loopback.io/doc/en/lb3/Querying-data.html#using-stringified-json-in-rest-queries for more details.


## Responses

### Statuses



### Code

    [
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
            "timestamp": "2024-04-28T18:14:41.547Z",
            "updatedAt": "2024-04-28T18:14:41.547Z",
            "productFamily": "string",
            "productDescriptor": "string",
            "manufactureLocation": "string",
            "manufactureYear": "string",
            "manufactureWeek": "string",
            "deployment": "string",
            "shardNumber": "string",
            "synchronizedKey": "string",
            "connectionStateChangeAt": "2024-04-28T18:14:41.547Z",
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
                    "createdAt": "2024-04-28T18:14:41.547Z",
                    "updatedAt": "2024-04-28T18:14:41.547Z",
                    "id": "string"
                }
            ]
        }
    ]

--------

# POST

### URI

/Nodes

### Description

Import a node into the global/shared inventory (does NOT claim).

## Parameters

- id
  - REQUIRED
  - string
  - formData
- residentialGateway
  - REQUIRED
  - boolean
  - formData
- model
  - string
  - formData
  - Node model ID value is required unless a Partner ID exemption has been configured
- packId
  - string
  - formData
  - optional packId to group nodes
- partnerId
  - string
  - formData
  - Partner ID required on Plume production clouds
- radioMac24
  - string
  - formData
  - optional radioMac24, must be a valid mac address
- radioMac50
  - string
  - formData
  - optional radioMac50, must be a valid mac address
- radioMac60
  - string
  - formData
  - optional radioMac60, must be a valid mac address
- ethernetMac
  - string
  - formData
  - optional ethernetMac, must be a valid mac address
- ethernet1Mac
  - string
  - formData
  - optional ethernet1Mac, must be a valid mac address
- claimKeyRequired
  - boolean
  - formData
  - optional claimKeyRequired, default is false
- radioMac50L
  - string
  - formData
  - optional radioMac50L, must be a valid mac address
- radioMac50U
  - string
  - formData
  - optional radioMac50U, must be a valid mac address
- subscriptionRequired
  - boolean
  - formData
  - optional subscriptionRequired, default is false
- thread
  - string
  - formData
  - optional Thread/Matter MAC addres

## Responses

### Statuses

- 200: Success, node imported.
- 401: Authorization required.
- 409: NodeId already exists in shared inventory.
- 422: Input validation failed.
- 500: Internal server error.

### Code

