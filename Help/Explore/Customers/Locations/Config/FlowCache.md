# PATCH

### URI

/Customers/{id}/locations/{locationId}/config/flowCache

### Description

Updates a flowCache config. Enable/disable Flow Cache to help support devQA to check influence on the first stage of the investigation.

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
- enable
  - boolean
  - formData

## Responses

### Statuses

- 202: Success, accepted and forwarded the data.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: Invalid data.
- 500: Internal server error.


--------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/config/flowCache

### Description

Resets a flowCache config. Enable/disable Flow Cache to help support devQA to check influence on the first stage of the investigation.

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



