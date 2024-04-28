# PUT

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/freeze/autoExpire

### Description

Put a device to be frozen for a Location ID.

## Parameters

- id
    - REQUIRED
    - string
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- mac
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

-----------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/freeze/autoExpire

### Description

Delete a device to be frozen for a Location ID.

## Parameters

- id
    - REQUIRED
    - string
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- mac
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 204: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.


