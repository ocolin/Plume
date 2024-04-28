# GET

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}

### Description

Returns a single Device for a Location ID.

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
  - string
  - path
  - mac of device
- include
  - string
  - query
  - can be 'bandwidthData', 'chartsData' or both. None means 'bandwidthData' only.
- daysOffline
  - number($double)
  - query
  - exclude devices disconnected longer than daysOffline.

## Responses

### Statuses

- 200: Success, device returned.
- 404: customer id or location id does not exist. Or, device not found in this network 's history.
- 500: Internal server error.

### Code

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
        "connectionStateChangeAt": "2024-04-28T03:28:53.706Z",
        "health": {},
        "leafToRoot": [
            {}
        ],
        "mobileAppDeviceUuid": "string"
    }

---------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}

### Description

Patches a single Device to mark it favorite for a Location ID.

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
    - string
    - path
    - mac of device
- favorite
  - boolean
  - formData
- nickname
  - string
  - formData
- mobileAppDeviceUuid
  - string
  - formData

## Responses

### Statuses

- 200: Success, everything looks good.
- 404: customer id or location id does not exist. Or, device not found in this network 's history.
- 500: Internal server error.

### Code

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
        "connectionStateChangeAt": "2024-04-28T03:31:17.531Z",
        "health": {},
        "leafToRoot": [
            {}
        ],
        "mobileAppDeviceUuid": "string"
    }

-----------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}

### Description

Removes a device for a customer's location id, wiping config and setting a hidden flag.

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
    - string
    - path
    - mac of device
- daysOffline
  - number($double)
  - formData
  - exclude devices disconnected longer than daysOffline. if not set, it will be 31. for older devices, it will return 404, "not found"

## Responses

### Statuses

- 204: Success, device removed from location.
- 404: location id or device not found.
- 500: internal server error
