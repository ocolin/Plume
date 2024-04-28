# GET

### URI

/partners/{id}/customers/recent

### Description

Queries Customers/locations/count with caller's partnerId.

## Parameters

- id
  - REQUIRED
  - string
  - path
  - partner Id

## Responses

### Statuses

- 200: Success, full object returned.
- 401: Authorization required.
- 404: Group id not found.
- 500: Internal server error.

### Code

    {}