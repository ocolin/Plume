# POST

### URI

/Customers/{id}/locations/{locationId}/groupOfUnassignedDevices/securityPolicy/websites/whitelist

### Description

Update a Location's Default Device Group Security Policy for a location ID to include a whitelisted DNS entry.

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
- dns
    - string
    - formData
- type
    - string
    - formData
- value
    - string
    - formData
- direction
    - string
    - formData
- geoLocation
    - string($JSON)
    - formData
- endTimestamp
    - number($double)
    - formData
    - the end time stamp, UTC unix epoch timestamp in ms
- akamaiCategoryId
    - number($double)
    - formData
    - the akamai category id, number

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id, WifiNetwork, or Device does not exist and is not known to Plume
- 422: DNS value is invalid.
- 500: Internal server error.

### Code

    {}

--------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/groupOfUnassignedDevices/securityPolicy/websites/whitelist/{dns}

### Description

Update a Location's Default Device Group Security Policy for a location ID to remove a whitelisted DNS entry.

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
- dns
  - REQUIRED
  - string
  - path

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: Location id, WifiNetwork, or DNS does not exist and is not known to Plume
- 500: Internal server error.

### Code
