# PATCH

### URI

/Customers/{id}/locations/{locationId}/config/flashLogging

### Description

Updates a flashLogging config. Flash logging configuration, for toggling if and which flashing should be logged

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
- forceDestination
  - string
  - formData
  - string enum: [ NODE_LOGGING_DESTINATION_DEFAULT, NODE_LOGGING_DESTINATION_FLASH, NODE_LOGGING_DESTINATION_FLASH_RAMOOPS, NODE_LOGGING_DESTINATION_RAMOOPS, NODE_LOGGING_DESTINATION_OFF ]

## Responses

### Statuses

- 202: Success, accepted and forwarded the data.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: Invalid data.
- 500: Internal server error.

----------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/config/flashLogging

### Description

Resets a flashLogging config. Flash logging configuration, for toggling if and which flashing should be logged

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

- 202: Success, reset.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.
