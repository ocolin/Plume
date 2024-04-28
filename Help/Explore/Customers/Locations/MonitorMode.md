# PUT

### URI

/Customers/{id}/locations/{locationId}/monitorMode

### Description

Enable/disable monitor mode for a Location ID.

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
- enable
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "enable": true,
        "updatedAt": "2024-04-28T00:54:51.432Z"
    }
