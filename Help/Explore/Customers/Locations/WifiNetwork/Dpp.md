# GET

### URI

data-path="/Customers/{id}/locations/{locationId}/wifiNetwork/dpp"

### Description

Get the current DPP configurator for a Location ID.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID

## Responses

### Statuses

- 200: Success, current DPP configurator returned.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {}

---------

# POST

### URI

data-path="/Customers/{id}/locations/{locationId}/wifiNetwork/dpp"

### Description

Create the DPP setting for a Location ID.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID
- enabled
  - boolean
  - formData
  - should we configure dpp for this network - defaults to true
- curve
  - string
  - formData
  - one of predefined elliptic curves, - optional, if missing in request default to prime256v1
- privateKey
  - string
  - formData
  - privateKey, must also provide public part if present, optional
- publicKey
  - string
  - formData
  - publicKey

## Responses

### Statuses

- 202: Success, new DPP configurator generated.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {}