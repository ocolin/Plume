# GET

### URI

/partners/{partnerId}/customers/search/{keyword}

### Description

Queries Customers with caller's partnerId.

## Parameters

- partnerId
  - REQUIRED
  - string
  - path
  - partner Id
- keyword
    - REQUIRED
    - string
    - path
- field
    - REQUIRED
    - string
    - path
- exactMatch
    - boolean
    - query
- startsWith
    - boolean
    - query
- limit
    - number($double)
    - query
- skip
    - number($double)
    - query

## Responses

### Statuses

- 200: Success, full object returned.
- 401: Authorization required.
- 403: Not allowed to access partner.
- 404: partnerId or nodeId not found.
- 500: Internal server error.

### Code

    {}