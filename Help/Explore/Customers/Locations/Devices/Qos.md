# POST

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/qos

### Description

/Customers/{id}/locations/{locationId}/devices/{mac}/qos

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
- mac
    - REQUIRED
    - string
    - path
- prioritization
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 202: Success.
- 404: Location does not exist.
- 422: Prioritization is not a valid value.

### Code

    [
        {}
    ]

--------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/qos

### Description

Update QoS of a single device

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
- mac
    - REQUIRED
    - string
    - path
- prioritization
    - REQUIRED
    - string
    - formData

## Responses

### Statuses

- 202: Success.
- 404: Location does not exist.
- 422: Prioritization is not a valid value.

### Code

    [
        {}
    ]
