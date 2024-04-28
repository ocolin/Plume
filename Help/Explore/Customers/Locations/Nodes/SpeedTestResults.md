# GET

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/speedTestResults

### Description

retrieve the speed test result for a node.

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
- granularity
  - string
  - query
  - days/hours/minutes
- limit
  - number($double)
  - query
  - X # of days/hours/minutes

## Responses

### Statuses

- 200: Success, run.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist.
- 422: locationId or nodeId isn't defined.
- 500: Internal server error.
- 503: Service Unavailable.

### Code
