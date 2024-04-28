# GET

### URI

/Customers/{id}/locations/{locationId}/securityPolicy

### Description

Get a Security Policy for a Location ID.

## Parameters

- Id
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

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
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
            "createdAt": "2024-04-27T02:22:58.717Z",
            "updatedAt": "2024-04-27T02:22:58.717Z",
            "id": "string"
        },
        "serviceLinking": {},
        "networkId": "string",
        "email": "string",
        "createdAt": "2024-04-27T02:22:58.717Z",
        "updatedAt": "2024-04-27T02:22:58.717Z",
        "locationId": "string"
    }

-------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/securityPolicy

### Description



## Parameters

- Id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
- secureAndProtect
  - boolean
  - formData
- iotProtect
  - boolean
  - formData
- content
  - string($JSON)
  - formData
  - Valid values: 'kids || teenagers || adBlocking || adultAndSensitive || workAppropriate'
- appliesToAllDevices
  - string($JSON)
  - formData
  - hash map of security policy IDs that should be applied to all devices

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}