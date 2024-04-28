# PATCH

### URI

/Customers/{id}/locations/{locationId}/config/puncturing

### Description

Updates a puncturing config. Puncturing allows to use a selective number of subchannels within a channel for PPDU transmission to WIFI 7 devices

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


-------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/config/puncturing

### Description

Resets a puncturing config. Puncturing allows to use a selective number of subchannels within a channel for PPDU transmission to WIFI 7 devices

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

