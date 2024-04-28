# DELETE

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/persistentConfigs

### Description

Delete persistent data/configs from node in runtime.

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
- deleteAllPersistentConfigs
  - boolean
  - formData
  - whether all persistent config data or just GW-offline data will be deleted

## Responses

### Statuses

- 204: Success.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location or Node, does not exist.
- 422: Required fields are not valid.
- 500: Internal server error.


