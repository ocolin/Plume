# POST

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/securityPolicy/anomaly/websites/whitelist

### Description

Approve a previously blacklisted anomalous dns for a Device on a location.

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
- mac
  - REQUIRED
  - string
  - path
- fqdn
  - REQUIRED
  - string
  - formData
- reason
  - string
  - formData
- ttl
  - number($double)
  - formData

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 422: DNS value is invalid.
- 500: Internal server error.

### Code

    {}

---------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/securityPolicy/anomaly/websites/whitelist/{fqdn}

### Description

Update a Location's Anomaly Security Policy for a location ID to remove a whitelisted DNS entry.

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
- mac
    - REQUIRED
    - string
    - path
- fqdn
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: Location id, WifiNetwork, Device or DNS does not exist and is not known to Plume
- 500: Internal server error.

### Code
