# GET

### URI

/Customers/{id}/locations/{locationId}/firmware

### Description

Firmware Upgrade Status

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

- 200: Success, response object returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    [
      {}
    ]

------------

# PUT

### URI

/Customers/{id}/locations/{locationId}/firmware

### Description

Request Firmware Upgrade for a Location ID

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

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code
    
    [
        {}
    ]