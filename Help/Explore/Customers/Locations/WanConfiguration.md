# GET

### URI

/Customers/{id}/locations/{locationId}/wanConfiguration


### Description

Get WAN Configuration for a Location ID.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location Id

## Responses

### Statuses

- 200: Success, WAN Settings returned.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {}

-----------

# PUT

### URI

/Customers/{id}/locations/{locationId}/wanConfiguration


### Description

Persist WAN Configuration for a Location ID.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer ID
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID
- pppoe
  - string($JSON)
  - formData
- uplink
  - string($JSON)
  - formData
- staticIPv4
  - string($JSON)
  - formData
- publishedWithBLE
  - boolean
  - formData

## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: Required fields are not valid.
- 500: Internal server error.

### Code

    {}

