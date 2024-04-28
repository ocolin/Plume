# GET

### URI

/partners/{partnerId}/nodes/{nodeId}

### Description

Queries Customers/locations/nodes with caller's partnerId.

## Parameters

- partnerId
  - REQUIRED
  - string
  - path
  - partner Id
- nodeId
  - REQUIRED
  - string
  - path
  - node Id
- excludeUnclaimed
  - boolean
  - query
  - whether to filter out unclaimed nodes

## Responses

### Statuses

- 200: Success, full object returned.
- 401: Authorization required.
- 403: No right to access the node.
- 404: partnerId or nodeId not found.
- 500: Internal server error.

### Code

    {}