# GET

### URI

/Customers/{id}/locations/{locationId}/freeze/autoExpire

### Description

Get all devices/persons except some to be frozen for a Location ID.

## Parameters

- id
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

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {}

--------------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/freeze/autoExpire

### Description

Put all devices except some to be frozen for a Location ID.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- includedDeviceMacs
  - string($JSON)
  - formData
- includedPersonIds
  - string($JSON)
  - formData
- expiresAt
  - string
  - formData

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.


--------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/freeze/autoExpire

### Description

Delete the location freeze/autoExpire for a Location ID.

## Parameters

- id
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

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {}