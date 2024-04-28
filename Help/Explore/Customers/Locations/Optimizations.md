# PUT

### URI

/Customers/{id}/locations/{locationId}/optimizations

### Description

Enable/disable optimizations for a Location ID.

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
- auto
  - REQUIRED
  - string($JSON)
  - formData
  - defaults to true
- dfsMode
  - string
  - formData
  - enum of values include: auto, enable, disable, demo, HomeNonDFSChannels, usDfs, deviceAware
- prefer160MhzMode
  - string
  - formData
  - enum of values include: auto, enable, disable
- hopPenalty
  - string
  - formData
  - enum of values include: auto, low, medium, high
- preCACScheduler
  - string
  - formData
  - enum of values include: auto, enable, disable
- maxBandwidth
  - string($JSON)
  - formData
  - Defines maximum bandwidth used per frequency band.

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 400: Required fields missing or field type is incorrect.
- 404: Location id, does not exist.
- 422: Invalid dfsMode, prefer160MhzMode, hopPenalty or preCACScheduler provided.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "auto": true,
        "enable": true,
        "dfsMode": "auto",
        "prefer160MhzMode": "auto",
        "hopPenalty": "auto",
        "preCACScheduler": "auto",
        "updatedAt": "2024-04-28T00:59:02.740Z",
        "maxBandwidth": {
            "maxBandwidth24g": "CHANNEL_BANDWIDTH_AUTO",
            "maxBandwidth5g": "CHANNEL_BANDWIDTH_AUTO",
            "maxBandwidth6g": "CHANNEL_BANDWIDTH_AUTO"
        }
    }

--------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/optimizations

### Description

Enable/disable optimizations for a Location ID.

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
- auto
    - REQUIRED
    - string($JSON)
    - formData
    - defaults to true
- dfsMode
    - string
    - formData
    - enum of values include: auto, enable, disable, demo, HomeNonDFSChannels, usDfs, deviceAware
- prefer160MhzMode
    - string
    - formData
    - enum of values include: auto, enable, disable
- zeroWaitDfsMode
  - string
  - formData
  - enum of values include: auto, enable, disable
- hopPenalty
    - string
    - formData
    - enum of values include: auto, low, medium, high
- preCACScheduler
    - string
    - formData
    - enum of values include: auto, enable, disable
- maxBandwidth
    - string($JSON)
    - formData
    - Defines maximum bandwidth used per frequency band.

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 400: Required fields missing or field type is incorrect.
- 404: Location id, does not exist.
- 422: Invalid dfsMode, prefer160MhzMode, zeroWaitDfsMode, hopPenalty or preCACScheduler provided.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "auto": true,
        "enable": true,
        "dfsMode": "auto",
        "prefer160MhzMode": "auto",
        "hopPenalty": "auto",
        "preCACScheduler": "auto",
        "updatedAt": "2024-04-28T01:02:27.124Z",
        "maxBandwidth": {
            "maxBandwidth24g": "CHANNEL_BANDWIDTH_AUTO",
            "maxBandwidth5g": "CHANNEL_BANDWIDTH_AUTO",
            "maxBandwidth6g": "CHANNEL_BANDWIDTH_AUTO"
        }
    }

