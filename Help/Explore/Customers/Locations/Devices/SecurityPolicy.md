# GET

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/securityPolicy

### Description

Returns the security policy Device for a Location ID.

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
        "connectionStateChangeAt": "2024-04-27T02:11:22.274Z",
        "health": {},
        "leafToRoot": [
            {}
        ],
        "mobileAppDeviceUuid": "string"
    }

-------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/securityPolicy

### Description

Update a Device's Security Policy for a location ID.

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
- secureAndProtect
  - boolean
  - formData
- iotProtect
  - boolean
  - formData
- iotProtectReason
  - string
  - formData
- content
  - string($JSON)
  - formData
  - Valid values: 'kids || teenagers || adBlocking || adultAndSensitive || workAppropriate'

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id, WifiNetwork, or Person id does not exist and is not known to Plume
- 409: Device is assigned to a person so its security policy must be configured on the Person
- 422: Mac addresses must be valid.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "nickname": "string",
        "imageId": "string",
        "primaryDevice": "string",
        "homeAwayNotification": false,
        "appTime": {},
        "permission": {},
        "profile": {
            "_version": "1.0.0",
            "type": "string",
            "createdAt": "2024-04-27T02:13:58.590Z",
            "updatedAt": "2024-04-27T02:13:58.590Z",
            "id": "string"
        },
        "serviceLinking": {},
        "networkId": "string",
        "email": "string",
        "createdAt": "2024-04-27T02:13:58.590Z",
        "updatedAt": "2024-04-27T02:13:58.590Z",
        "locationId": "string"
    }