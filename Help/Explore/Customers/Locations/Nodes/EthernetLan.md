# PUT

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/ethernetLan

### Description

Updates location nodes with ethernetLan modes

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
- nodeEthernetLan
  - REQUIRED
  - object
  - body


    {}


## Responses

### Statuses

- 202: Success.
- 404: Location does not exist.
- 404: Node does not exist.
- 422: nodeEthernetLan does not exist.

### Code

