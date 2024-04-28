# POST

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones

### Description

Create a new WiFi Access Zone

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
- description
  - REQUIRED
  - string
  - formData
  - name of access zone
- type
  - REQUIRED
  - string
  - formData
  - for now, must be 'guests'
- accessibleDevices
  - string($JSON)
  - formData
  - macs of home devices visible to this guest access zone

## Responses

### Statuses

- 200: Success, all access zones returned
- 400: Required fields missing
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork does not exist
- 422: Validation failed
- 500: Internal server error.

### Code

    [
        {
            "id": 0,
            "type": "string",
            "description": "string",
            "accessibleDevices": [
                {}
            ],
            "createdAt": "2024-04-27T16:25:11.363Z",
            "updatedAt": "2024-04-27T16:25:11.363Z",
            "_version": "1.0.0"
        }
    ]

--------------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones/{zoneId}

### Description

Update an access zone

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
- zoneId
  - REQUIRED
  - number($double)
  - path
  - id of access zone
- description
    - REQUIRED
    - string
    - formData
    - name of access zone
- accessibleDevices
    - string($JSON)
    - formData
    - macs of home devices visible to this guest access zone

## Responses

### Statuses

- 200: Success, all access zones returned
- 400: Required fields missing
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork does not exist
- 422: Validation failed
- 500: Internal server error.

### Code



--------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones/{zoneId}

### Description

Delete a WiFi Access Zone

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
- zoneId
    - REQUIRED
    - number($double)
    - path
    - id of access zone

## Responses

### Statuses

- 200: Success, remaining access zones returned
- 400: Required fields missing
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork does not exist
- 405: Cannot delete a read-only access zone
- 500: Internal server error.

### Code

    [
        {
            "id": 0,
            "type": "string",
            "description": "string",
            "accessibleDevices": [
                {}
            ],
            "createdAt": "2024-04-27T16:30:16.217Z",
            "updatedAt": "2024-04-27T16:30:16.217Z",
            "_version": "1.0.0"
        }
    ]
