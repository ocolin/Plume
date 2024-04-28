# GET

### URI

/Customers/{id}/locations/{locationId}/wifiMotion

### Description

Get WifiMotion config for this location

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID

## Responses

### Statuses

- 200: Success, wifiMotion object returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        "auto": false,
        "createdAt": "2024-04-26T23:39:20.589Z",
        "updatedAt": "2024-04-26T23:39:20.589Z",
        "id": "string"
    }

-------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/wifiMotion

### Description

Enable/disable WifiMotion feature for this location

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- auto
  - REQUIRED
  - boolean
  - formData

## Responses

### Statuses

- 200: Success, updated object returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        "auto": false,
        "createdAt": "2024-04-26T23:40:39.657Z",
        "updatedAt": "2024-04-26T23:40:39.657Z",
        "id": "string"
    }