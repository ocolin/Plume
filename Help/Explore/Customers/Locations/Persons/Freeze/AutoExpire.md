# PUT

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/freeze/autoExpire

### Description

Put all devices from a person to be frozen for a Location ID.

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
- personId
    - REQUIRED
    - string
    - path
- expiresAt
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {}

--------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/freeze/autoExpire

### Description

Delete all devices from a person to be frozen for a Location ID.

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
- personId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 204: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.


