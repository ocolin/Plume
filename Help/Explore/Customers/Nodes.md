# GET

### URI

/Customers/{id}/nodes/{nodeId}

### Description

Returns a single Node for a Customer ID.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- nodeId
    - string
    - path

## Responses

### Statuses

- 200: Success, node returned with locationId field.
- 401: Authorization required or customer id not found.
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

-------

# DELETE

### URI

/Customers/{id}/nodes/{nodeId}

### Description

Delete a node model based on its id.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- nodeId
    - string
    - path

## Responses

### Statuses

- 204: The node was successfully deleted.
- 401: Authorization required or customer id not found.
- 404: Node or customer not found.
- 422: Node deletion could not be completed.
- 500: Internal server error.

### Code

    {}