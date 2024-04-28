# POST

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/securityPolicy/remoteConnections/allowAll

### Description

Post a Remote Connection Allow All/ttl for the given device and Location ID.

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
- expiresAt
    - REQUIRED
    - string
    - formData
    - UTC timestamp in ISO 8601 format

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id or Device mac does not exist and is not known to Plume
- 422: Fields have an invalid type or value.
- 500: Internal server error.

### Code

    {}

---------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/securityPolicy/remoteConnections/allowAll


### Description

Post a Remote Connection Allow All/ttl for the given device and Location ID.

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

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or Device mac does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}