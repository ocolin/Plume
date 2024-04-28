# GET

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/fronthauls

### Description

Get the Front Haul Portal configs for a given Location ID.

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

- 200: Success, FrontHaul Networks returned.
- 401: Authorization required or customer id not found.
- 404: location id or secondary network does not exist.
- 500: Internal server error.

### Code

    {}

---------

# POST

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/fronthauls

### Description

Create a Front Haul Network for a Location ID.

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
  - REQUIRED
  - string
  - formData
- accessZone
  - string
  - formData
- wpaMode
  - string
  - formData
- wpaModes
  - string($JSON)
  - formData
  - Object with { freqBand24: wpaMode, freqBand5: wpaMode, freqBand6: sae } interface. For possible wpaMode values look at the wpaMode property.
- ssidBroadcast
  - boolean
  - formData
- nodeEnablement
  - string($JSON)
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

-----------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/fronthauls/{networkId}

### Description

Update a Front Haul for a given Location ID/NetworkId.

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
- accessZone
    - string
    - formData
- wpaMode
    - string
    - formData
- wpaModes
    - string($JSON)
    - formData
    - Object with { freqBand24: wpaMode, freqBand5: wpaMode, freqBand6: sae } interface. For possible wpaMode values look at the wpaMode property.
- ssidBroadcast
    - boolean
    - formData
- nodeEnablement
    - string($JSON)
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

-----------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/fronthauls/{networkId}

### Description

Delete a Front Haul for a Location ID.

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

------------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/fronthauls/{networkId}

### Description

Update a Front Haul for a given Location ID/NetworkId.

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
- accessZone
    - string
    - formData
- wpaMode
    - string
    - formData
- wpaModes
    - string($JSON)
    - formData
    - Object with { freqBand24: wpaMode, freqBand5: wpaMode, freqBand6: sae } interface. For possible wpaMode values look at the wpaMode property.
- ssidBroadcast
    - boolean
    - formData
- nodeEnablement
    - string($JSON)
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

---------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/fronthauls/{networkId}

### Description

Delete a Front Haul for a Location ID.

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

