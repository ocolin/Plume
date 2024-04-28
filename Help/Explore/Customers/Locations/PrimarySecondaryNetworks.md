# GET

### URI

/Customers/{id}/locations/{locationId}/primarySecondaryNetworks

### Description

Get networks for wpa3 transition flow

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

## Responses

### Statuses

- 200: Success, returns the data
- 401: Authorization required or customer id not found.
- 404: location id or wifiNetwork does not exist
- 500: Internal server error.

### Code

    {}

---------

# PUT

### URI

/Customers/{id}/locations/{locationId}/primarySecondaryNetworks

### Description

Set networks at wpa3 transition flow

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
- wpa3ssid
  - string
  - formData
- wpa3encryptionKey
  - string
  - formData
- wpa3enabled
  - boolean
  - formData
- wpa2ssid
  - string($JSON)
  - formData
- wpa2enabled
  - boolean
  - formData

## Responses

### Statuses

- 202: Success, accepted the data
- 401: Authorization required or customer id not found.
- 404: location id does not exist
- 422: Input validation failed.
- 500: Internal server error.


----------

# POST

### URI

/Customers/{id}/locations/{locationId}/primarySecondaryNetworks

### Description

Update home devices visible to guests.

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

## Responses

### Statuses

- 200: Success, Invitation returned.
- 401: Authorization required or customer id not found.
- 404: Customer id, location id
- 500: Internal server error.

### Code

    {
        "id": "string",
        "keyId": 0,
        "url": "string",
        "createdAt": "2024-04-28T15:43:33.349Z",
        "expiresAt": "2024-04-28T15:43:33.349Z",
        "wifiNetworkId": "string",
        "locationId": "string"
    }