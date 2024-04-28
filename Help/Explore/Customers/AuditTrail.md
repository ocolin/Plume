# GET

### URI

/Customers/{id}/auditTrail

### Description

Get audit trail for a customer.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path

## Responses

### Statuses

- 200: Ok.
- 401: Authorization required or customer id not found.
- 404: Customer id, does not exist.
- 500: Internal server error.

### Code

    {}