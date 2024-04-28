# PUT

### URI

/Customers/{id}/locations/{locationId}/bandSteering

### Description

Enable/disable band steering for a Location ID (deprecated)

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
- auto
  - REQUIRED
  - boolean
  - formData

## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 4- 04: Location id, does not exist.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "auto": true,
        "mode": "string",
        "updatedAt": "2024-04-28T00:48:05.154Z"
    }

-------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/bandSteering

### Description

Set mode for band steering

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
- mode
    - string
    - formData
    - auto || enable || disable

## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: Invalid mode.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "auto": true,
        "mode": "string",
        "updatedAt": "2024-04-28T00:49:54.821Z"
    }
