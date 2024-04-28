# POST

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones/{accessZone}/keys

### Description

Create a new WiFi Password

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
- accessZone
  - REQUIRED
  - string
  - path
  - home | guests | internetAccessOnly
- encryptionKey
  - REQUIRED
  - string
  - formData
- enable
  - REQUIRED
  - boolean
  - formData
  - devices can connect using this encryptionKey
- format
  - REQUIRED
  - string
  - formData
  - encryptionKey | phoneNumber
- expiresAt
  - string($date-time)
  - formData
  - UTC in ISO 8601 String format
- content
  - string($JSON)
  - formData
  - Valid values: 'adultAndSensitive'

## Responses

### Statuses

- 200: Success, all passwords returned
- 400: Required fields missing
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork does not exist
- 422: Password validation failed
- 500: Internal server error.

### Code

    [
        {
            "id": 0,
            "encryptionKey": "string",
            "accessZone": "string",
            "accessZoneId": 0,
            "format": "string",
            "enable": true,
            "content": [
                "string"
            ],
            "createdAt": "2024-04-27T16:09:35.595Z",
            "updatedAt": "2024-04-27T16:09:35.595Z",
            "expiresAt": "2024-04-27T16:09:35.595Z",
            "_version": "1.0.0"
        }
    ]


-----------

# PUT

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones/{accessZone}/keys/{keyId}

### Description

Update a WiFi Password

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
- accessZone
    - REQUIRED
    - string
    - path
    - home | guests | internetAccessOnly
- keyId
  - REQUIRED
  - number($double)
  - path
  - Unique password id: 0-9
- encryptionKey
    - REQUIRED
    - string
    - formData
- enable
    - REQUIRED
    - boolean
    - formData
    - devices can connect using this encryptionKey
- format
    - REQUIRED
    - string
    - formData
    - encryptionKey | phoneNumber
- expiresAt
    - string($date-time)
    - formData
    - UTC in ISO 8601 String format
- content
    - string($JSON)
    - formData
    - Valid values: 'adultAndSensitive'

## Responses

### Statuses

- 200: Success, all passwords returned
- 400: Required fields missing
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork does not exist
- 405: Cannot disable a read-only key
- 422: Password validation failed
- 500: Internal server error.

### Code

    [
        {
            "id": 0,
            "encryptionKey": "string",
            "accessZone": "string",
            "accessZoneId": 0,
            "format": "string",
            "enable": true,
            "content": [
                "string"
            ],
            "createdAt": "2024-04-27T16:13:25.229Z",
            "updatedAt": "2024-04-27T16:13:25.229Z",
            "expiresAt": "2024-04-27T16:13:25.229Z",
            "_version": "1.0.0"
            }
    ]

---------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones/{accessZone}/keys/{keyId}

### Description

Delete a WiFi Password

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
- accessZone
    - REQUIRED
    - string
    - path
    - home | guests | internetAccessOnly
- keyId
    - REQUIRED
    - number($double)
    - path
    - Unique password id: 0-9

## Responses

### Statuses

- 200: Success, all passwords returned
- 400: Required fields missing
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork does not exist
- 405: Cannot delete a read-only key
- 500: Internal server error.

### Code

    [
        {
            "id": 0,
            "encryptionKey": "string",
            "accessZone": "string",
            "accessZoneId": 0,
            "format": "string",
            "enable": true,
            "content": [
                "string"
            ],
            "createdAt": "2024-04-27T16:15:55.734Z",
            "updatedAt": "2024-04-27T16:15:55.734Z",
            "expiresAt": "2024-04-27T16:15:55.734Z",
            "_version": "1.0.0"
        }
    ]