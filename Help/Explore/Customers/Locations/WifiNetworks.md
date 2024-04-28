# GET

### URI

/Customers/{id}/locations/{locationId}/wifiNetworks

### Description

Wifi Networks

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID

## Responses

### Statuses

- 200: Success, response object returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    [
     {}
    ]