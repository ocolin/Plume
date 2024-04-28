# GET

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/authorizedClients

### Description

Get CaptivePortal authorized clients

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
- networkId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id/NetworkId does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

-------------

# POST

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/authorizedClients

### Description

Post CaptivePortal authorized clients

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
- networkId
    - REQUIRED
    - string
    - path
- mac
  - REQUIRED
  - string
  - formData
- expireAt
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: Location id/NetworkId does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

--------------------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/authorizedClients/{mac}

### Description

Post CaptivePortal authorized clients

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
- networkId
    - REQUIRED
    - string
    - path
- mac
    - REQUIRED
    - string
    - path
- expireAt
    - REQUIRED
    - string
    - formData

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: Location id/NetworkId does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

-------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}/authorizedClients/{mac}


### Description

Delete Authorized Client

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
- networkId
    - REQUIRED
    - string
    - path
- mac
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id/NetworkId does not exist and is not known to Plume
- 500: Internal server error.



