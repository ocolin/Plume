# PATCH

### URI

/Customers/{id}/locations/{locationId}/event/forcePowerManagement

### Description

Post Force Power Management event for the location

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
- duration
    - REQUIRED
    - number($double)
    - formData
    - value equal or larger than 0

## Responses

### Statuses

- 200: Ok.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: This location is not Power Management capable.
- 422: Duration must be equal or larger than 0.
- 422: This location does not have Power Management enabled.
- 429: Too many requests.
- 500: Internal server error.

### Code

    {}