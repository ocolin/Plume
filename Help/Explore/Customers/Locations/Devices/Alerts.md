# PUT

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/alerts/{type}

### Description

Snooze an alert on a device.

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
- mac
    - REQUIRED
    - string($JSON)
    - path
    - mac of device
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
- 404: Location id does not exist or device mac not in this account's recent history.
- 422: Invalid alert type and/or state.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "mac": "string",
        "keyId": 0,
        "hostName": "string",
        "model": "string",
        "medium": "string",
        "_version": "1.0.2",
        "createdAt": "2024-04-28T03:00:08.377Z",
        "onlineSince": "2024-04-28T03:00:08.377Z",
        "offlineSince": "2024-04-28T03:00:08.377Z",
        "updatedAt": "2024-04-28T03:00:08.377Z",
        "connectionState": "string",
        "connectionStateChangeAt": "2024-04-28T03:00:08.377Z",
        "vapType": "backhaul",
        "networkId": "string",
        "favorite": false,
        "hiddenAt": "2024-04-28T03:00:08.377Z",
        "appTime": {},
        "mobileAppDeviceUuid": "string",
        "locationId": "string",
        "bandSteering": {
            "_version": "1.0.0",
            "enable": false,
            "auto": true,
            "updatedAt": "2024-04-28T03:00:08.377Z"
        },
        "clientSteering": {
            "_version": "1.0.0",
            "enable": false,
            "auto": true,
            "updatedAt": "2024-04-28T03:00:08.377Z"
        },
        "qos": {
            "id": "string",
            "prioritization": {
                "mode": "auto",
                "id": "string"
            }
        }
    }
