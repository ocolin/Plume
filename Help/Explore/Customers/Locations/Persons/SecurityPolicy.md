# PATCH

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/securityPolicy

### Description

Update a Person's Security Policy for a location ID.

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
- secureAndProtect
  - boolean
  - formData
- iotProtect
  - boolean
  - formData
- content
  - string($JSON)
  - formData
  - Valid values: 'kids || teenagers || adBlocking || adultAndSensitive || workAppropriate'

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id, WifiNetwork, or Person id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}