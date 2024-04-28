# PUT

### URI

/Customers/{id}/enable

### Description

Enable customer log in, after it has been disabled.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path

## Responses

### Statuses

- 204: Customer has been enabled.
- 401: Authorization required or customer id not found.
- 404: Customer does not exist.
- 500: Internal server error.
