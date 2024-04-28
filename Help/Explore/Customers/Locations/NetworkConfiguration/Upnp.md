# GET

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/upnp

### Description

Get the current UPnP setting for a Location ID.

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

- 200: Success, current Upnp returned.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {
        "enabled": false,
        "mode": "string",
        "modeRealized": true
    }

-------

# PUT

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/upnp

### Description

Update the UPnP setting for a Location ID.

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
  - string($JSON)
  - formData
  - DEPRECATED: boolean but marked as 'any' because our mobile app platforms mixed string and boolean primitive
- mode
  - string
  - formData
  - Possible values enable/disable/auto

## Responses

### Statuses

- 200: Success, new Upnp saved.
- 401: Authorization required or customer id not found.
- 422: Upnp value is empty.
- 500: Internal server error.

### Code

    {
        "enabled": false,
        "mode": "string",
        "modeRealized": true
    }