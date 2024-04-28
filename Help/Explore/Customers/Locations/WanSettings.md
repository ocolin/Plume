# GET

### URI

/Customers/{id}/locations/{locationId}/wanSettings

### Description

DEPRECATED: Get the WAN Settings for a Location ID.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
- locationId
    - REQUIRED
    - string($JSON)
    - path

## Responses

### Statuses

- 200: Success, WAN Settings returned.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.1",
        "connectionType": "string",
        "updatedAt": "2024-04-28T01:13:28.267Z",
        "static": {
            "ipAddress": "string",
            "subnetMask": "string",
            "defaultGateway": "string"
        },
        "pppoe": {
            "name": "string",
            "password": "string"
        }
    }

------------

# PUT

### URI

/Customers/{id}/locations/{locationId}/wanSettings

### Description

DEPRECATED: Persist WAN Settings for a Location ID.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
- locationId
    - REQUIRED
    - string($JSON)
    - path
- wanSettings
  - REQUIRED
  - body


    {
        "_version": "1.0.1",
        "connectionType": "string",
        "updatedAt": "2024-04-28T01:14:43.428Z",
        "static": {
            "ipAddress": "string",
            "subnetMask": "string",
            "defaultGateway": "string"
        },
        "pppoe": {
            "name": "string",
            "password": "string"
        }
    }

## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: Required fields are not valid.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.1",
        "connectionType": "string",
        "updatedAt": "2024-04-28T01:14:43.464Z",
        "static": {
            "ipAddress": "string",
            "subnetMask": "string",
            "defaultGateway": "string"
        },
        "pppoe": {
            "name": "string",
            "password": "string"
        }
    }