# PATCH

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/natLoopback

### Description

Update the location natLoopback.

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
- natLoopback
  - REQUIRED
  - body


    {
        "mode": "auto"
    }


## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {
        "mode": "auto"
    }