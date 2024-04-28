# GET

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/speedTestResults/{requestId}

### Description

retrieve single speed test result by request id for a node.

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
- requestId
  - REQUIRED
  - string
  - path

## Responses

### Statuses

- 200: Success.
- 422: locationId or nodeId isn't defined.
- 404: Speed test not found.
- 500: Internal server error.
- 503: Service Unavailable.

### Code

    {}