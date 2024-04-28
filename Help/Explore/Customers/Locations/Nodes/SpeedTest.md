# POST

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/speedTest

### Description

Run speed test for a node.

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
- serverId
  - number($double)
  - formData
- uplinkType
  - string
  - formData

## Responses

### Statuses

- 200: Success, run.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Customer, location or node does not exists.
- 422: Invalid test type.
- 500: Internal server error.

### Code

    {}