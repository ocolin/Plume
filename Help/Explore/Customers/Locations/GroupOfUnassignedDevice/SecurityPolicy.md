# GET

### URI

/Customers/{id}/locations/{locationId}/groupOfUnassignedDevices/securityPolicy

### Description

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

## Parameters

Get a Security Policy for a Location ID.

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
            "createdAt": "2024-04-27T04:35:33.949Z",
            "updatedAt": "2024-04-27T04:35:33.949Z",
            "id": "string"
        },
        "serviceLinking": {},
        "networkId": "string",
        "email": "string",
        "createdAt": "2024-04-27T04:35:33.949Z",
        "updatedAt": "2024-04-27T04:35:33.949Z",
        "locationId": "string"
    }

-------------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/groupOfUnassignedDevices/securityPolicy

### Description

Update a Location's Default Device Group Security Policy by location ID.

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

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}