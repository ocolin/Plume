# PATCH

### URI

/Customers/{id}/locations/{locationId}/config/thread

### Description

Updates a thread config. Thread configuration, for toggling if threading is being used

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
- threadInterface
  - string
  - formData
- networkInterface
  - string
  - formData
- dataset
  - string
  - formData
- networkName
  - string
  - formData
- panId
  - number($double)
  - formData
- extPanId
  - string
  - formData
- networkKey
  - string
  - formData
- meshLocalPrefix
  - string
  - formData
- channel
  - number($double)
  - formData
- channelMask
  - number($double)
  - formData
- commissioningPsk
  - string
  - formData
- reportingInterval
  - number($double)
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

/Customers/{id}/locations/{locationId}/config/thread

### Description

Resets a thread config. Thread configuration, for toggling if threading is being used

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

