# PATCH

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/staticData

### Description

Updates static data of a node

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
- nodeId
    - REQUIRED
    - string($JSON)
    - path
- radioMac24
  - string
  - formData
- radioMac50L
  - string
  - formData
- radioMac50U
  - string
  - formData
- radioMac50
  - string
  - formData
- radioMac60
  - string
  - formData
- ethernetMac
  - string
  - formData
- ethernet1Mac
  - string
  - formData
- ultraWideband
  - string
  - formData
- bluetoothMac
  - string
  - formData
- thread
  - string
  - formData
- hasUniqueCertificate
  - boolean
  - formData

## Responses

### Statuses

- 200: Success.
- 204: Nothing to update.
- 404: Location does not exist.
- 404: Node does not exist.
- 422: Input validation failed.
- 500: Internal server error.

### Code

    {}