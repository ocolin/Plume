# GET

### URI

/Customers/{id}/locations/{locationId}/alerts

### Description

Retrieve active alerts for this location.

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

## Responses

### Statuses

- 200: Success, an array of Nodes and an array of Devices returned.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}