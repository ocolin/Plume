# POST

### URI

/Customers/{id}/locations/{locationId}/devices/stitch

### Description

Delete prioritization of a single device

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
- oldMac
    - REQUIRED
    - string
    - formData
- newMac
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 400: Missing oldMac or newMac field.
- 404: Location does not exist.
- 422: oldMac or newMac is not valid mac.
- 422: If oldMac and newMac are the same.


