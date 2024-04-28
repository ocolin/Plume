# POST

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones/home/devicesVisibleToGuests/{mac}

### Description

DEPRECATED: Update home devices visible to guests.

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
- mac
  - REQUIRED
  - string
  - path
  - mac to be added

## Responses

### Statuses

- 200: Success, devicesVisibleToGuests returned.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork does not exist.
- 422: Device mac validation failed.
- 500: Internal server error.

### Code

    [
       "string"
    ]


---------

# PUT

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones/home/devicesVisibleToGuests

### Description

DEPRECATED: Update home devices visible to guests.

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
- devicesVisibleToGuests
  - REQUIRED
  - string($JSON)
  - formData
  - array of macs[]

## Responses

### Statuses

- 200: Success, devicesVisibleToGuests returned.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork does not exist.
- 422: Device mac validation failed.
- 500: Internal server error.

### Code

    [
      "string"
    ]

--------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/accessZones/home/devicesVisibleToGuests

### Description

DEPRECATED: Update home devices visible to guests.

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
- mac
    - REQUIRED
    - string
    - path
    - mac to be removed

## Responses

### Statuses

- 200: Success, devicesVisibleToGuests returned.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Customer id, location id, or WifiNetwork does not exist.
- 422: Device mac validation failed.
- 500: Internal server error.

### Code

    [
       "string"
    ]