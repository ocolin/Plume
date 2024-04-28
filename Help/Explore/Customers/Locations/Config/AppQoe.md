# PATCH

### URI

/Customers/{id}/locations/{locationId}/config/appQoe

### Description

Updates a appQoe config. AppQoe is to monitor the Quality of Experience of these Apps in the house, which is what this PRD covers. This QoE monitoring will allow CSPs understand likely issues with applications.

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
  - string enum: [ AUTO, ENABLE, DISABLE ]

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

/Customers/{id}/locations/{locationId}/config/appQoe

### Description

Resets a appQoe config. AppQoe is to monitor the Quality of Experience of these Apps in the house, which is what this PRD covers. This QoE monitoring will allow CSPs understand likely issues with applications.

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

### Code

