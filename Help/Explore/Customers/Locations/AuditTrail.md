# GET

### URI

/Customers/{id}/locations/{locationId}/auditTrail

### Description

Get audit trail for a location.

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