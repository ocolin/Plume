# PATCH

### URI

/Customers/{id}/locations/{locationId}/config/stats

### Description

Updates a stats config. Location Stats configuration, used to toggle which stats should be collected.

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
- offChannelScan24
  - string
  - formData
  - string enum: [ AUTO, ENABLE, DISABLE ]
- offChannelScan50
  - string
  - formData
  - string enum: [ AUTO, ENABLE, DISABLE ]
- offChannelScan60
  - string
  - formData
  - string enum: [ AUTO, ENABLE, DISABLE ]
- clientAuthFails
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


----------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/config/stats

### Description

Resets a stats config. Location Stats configuration, used to toggle which stats should be collected.

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

