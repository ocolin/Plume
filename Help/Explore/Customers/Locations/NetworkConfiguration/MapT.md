# PATCH

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/mapT

### Description

Update the Map-T settings for a Location ID via networkConfiguration.

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
- mode
  - string
  - formData
  - Any of "auto", "enable", "disable"
- monitoring
  - string
  - formData
  - Any of "auto", "enable", "disable"

## Responses

### Statuses

- 202: Success.
- 401: Authorization required or customer id not found.
- 404: Location ID does not exist.
- 422: Input validation error, see output for details.
- 500: Internal server error.

### Code

    {}
