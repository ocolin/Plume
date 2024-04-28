# GET

### URI

/partners/customers/search/{keyword}

### Description

Queries Customers with caller's partnerId.

## Parameters

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
- 404: LocationId not found.
- 500: Internal server error.

### Code

    {}