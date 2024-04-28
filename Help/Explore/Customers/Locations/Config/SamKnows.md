# PATCH

### URI

/Customers/{id}/locations/{locationId}/config/samKnows

### Description

Updates a samKnows config. SamKnows is a provider of internet performance measurement services. They offer the SamKnows Router Agent, which supports a range of QoS and QoE performance measurements. These measurements can be executed both on an ad-hoc and scheduled basis.

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

### Code

--------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/config/samKnows

### Description

Resets a samKnows config. SamKnows is a provider of internet performance measurement services. They offer the SamKnows Router Agent, which supports a range of QoS and QoE performance measurements. These measurements can be executed both on an ad-hoc and scheduled basis.

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
