# GET

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/blePairingPin

### Description

Get BLE pairing pin for a node that is claimed by the selected location

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
- nodeId
    - REQUIRED
    - string($JSON)
    - path
- token
  - REQUIRED
  - string
  - query

## Responses

### Statuses

- 200: Success, pin generated.
- 400: Required fields missing or field type is incorrect.
- 404: Location or node does not exist.
- 422: Invalid token.

### Code

    {}