# GET

### URI

/Nodes/{id}/mqtt

### Description

Get the MQTT broker address of the node.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Node Id

## Responses

### Statuses

- 200: Success, return the customer info.
- 404: NodeId not found.
- 500: Internal server error.

### Code

    {}