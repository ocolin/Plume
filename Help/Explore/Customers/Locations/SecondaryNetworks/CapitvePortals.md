# GET

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals

### Description

Get the Captive Portal configs for a given Location ID.

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

- 200: Success, CaptivePortal Networks returned.
- 401: Authorization required or customer id not found.
- 404: location id or secondary networks does not exist.
- 500: Internal server error.

### Code

    {}

-----------

# POST

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals

### Description

Create a Captive Portal Network for a Location ID.

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
- networkId
  - string
  - formData
- ssid
  - REQUIRED
  - string
  - formData
- enable
  - boolean
  - formData
- encryptionKey
  - string
  - formData
- bandwidthLimit
  - string($JSON)
  - formData
  - attributes: "enabled" boolean, "type": "absolute"|"percentage", "upload"/"download" - either as percentage or absolute (Mbps)
- sessionTimeLimitSec
  - number($double)
  - formData
- wpaMode
  - string
  - formData
- language
  - string
  - formData

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or NetworkId does not exist and is not known to Plume
- 422: NetworkId/SSIDs must be the unique and valid values.
- 500: Internal server error.

### Code

    {}

--------------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}

### Description

Update a Captive Portal for a given Location ID/NetworkId.

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
- networkId
  - REQUIRED
  - string
  - path
- ssid
    - REQUIRED
    - string
    - formData
- enable
    - boolean
    - formData
- encryptionKey
    - string
    - formData
- bandwidthLimit
    - string($JSON)
    - formData
    - attributes: "enabled" boolean, "type": "absolute"|"percentage", "upload"/"download" - either as percentage or absolute (Mbps)
- wpaMode
  - string
  - formData
- sessionTimeLimitSec
    - number($double)
    - formData

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or NetworkId does not exist and is not known to Plume
- 422: NetworkId/SSIDs must be the unique and valid values.
- 500: Internal server error.

### Code

    {}

--------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/{networkId}

### Description

Delete a CaptivePortal for a Location ID.

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
