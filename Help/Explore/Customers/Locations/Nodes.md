# GET

### URI

/Customers/{id}/locations/{locationId}/nodes

### Description

Retrieve the Node settings and status for a Location ID.

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

- 200: Success, array of Nodes returned.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        "nodes": {
            "nodes": [
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
            ]
        }
    }

-------

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
    - string
    - path
    - Location ID
- serialNumber
  - string
  - formData
  - unique serial number or ID of Node
- radioMac24
  - string
  - formData
  - optional but required for auto-importing, must be a valid mac address
- radioMac50
  - string
  - formData
  - optional but required for auto-importing, must be a valid mac address
- radioMac60
  - string
  - formData
  - optional but required for auto-importing, must be a valid mac address
- ethernetMac
  - string
  - formData
  - optional but required for auto-importing, must be a valid mac address
- ethernet1Mac
  - string
  - formData
  - optional but required for auto-importing, must be a valid mac address
- claimKey
  - string
  - formData
  - optional but required for auto-importing, must be a valid claimKey
- model
  - string
  - formData
  - optional when auto-importing, ignored otherwise
- hybridCheck
  - boolean
  - formData
  - optional when auto-importing, ignored otherwise
- nickname
  - string
  - formData
  - optional node nickname
- backhaulDhcpPoolIdx
  - number($double)
  - formData
  - optional node backhaulDhcpPoolIdx
- room
  - string
  - formData
  - optional room identifier
- skipSubscription
  - boolean
  - formData
  - skip subscription update

## Responses

### Statuses

- 200: King node claimed and all related claimed nodes are returned.
- 204: Valid serial number but zero new claimed nodes.
- 404: Unable to find Node with serial number, customer id, or location id.
- 409: Node is owned by another customer.
- 422: Claiming request exceeded numPodsAuthorized (=leaf pods), accountId+partnerId not unique, and/or monitorMode=true.
- 500: Internal server error.

### Code

    {
        "claimed": [
            {
                "serialNumber": "string",
                "id": "string",
                "nickname": "string",
                "defaultName": "string",
                "status": "string"
            }
        ],
        "id": 0
    }

--------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}

### Description

Unclaim all Nodes from a Location ID with the option of preserving the original Package ID.

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
- preservePackId
  - boolean
  - formData
  - packId should remain the same
- removeAccountId
  - boolean
  - formData
  - delete account ids on the inventory nodes

## Responses

### Statuses

- 204: Success, a job well done.
- 401: Authorization required or customer id not found.
- 404: location id not found in customer service or not found in inventory service.
- 500: Internal server error.


