# GET

### URI

/Customers/{id}/rollback

### Description

Rollback a customer to original server and delete customer on migrated server.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Customer Id

## Responses

### Statuses

- 204: Success
- 400: Customer was not migrated
- 400: Customer does not belong to partner
- 400: Customer was not migrated to cloud
- 401: Authorization required or customer id not found.
- 500: Internal server error.
