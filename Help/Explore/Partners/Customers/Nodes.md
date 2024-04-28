# GET

### URI

/partners/nodes/{id}

### Description

Queries Customers/locations/nodes with caller's partnerId.

## Parameters

- partnerId
    - REQUIRED
    - string
    - path
    - partner Id
- excludeUnclaimed
    - boolean
    - query
    - whether to filter out unclaimed nodes

## Responses

### Statuses

- 200: Success, full object returned.
- 401: Authorization required.
- 403: No right to access the node.
- 404: LocationId not found.
- 500: Internal server error.

### Code

    {}

---------

# PATCH

### URI

/partners/nodes/{id}

### Description

Queries Customers/locations/nodes with caller's partnerId, and update it.

## Parameters

- partnerId
    - REQUIRED
    - string
    - path
    - partner Id
- accountId
  - REQUIRED
  - string
  - formData
- unclaimable
  - string
  - formData

## Responses

### Statuses

- 200: Success, full object returned.
- 401: Authorization required.
- 404: LocationId not found.
- 500: Internal server error.

### Code

    {}
