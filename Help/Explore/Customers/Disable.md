# PUT

### URI

/Customers/{id}/disable

### Description

Disable customer from logging in until their account is reactivated.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- triggerReset
  - boolean
  - formData

## Responses

### Statuses

- 204: Customer has been disabled.
- 401: Authorization required or customer id not found.
- 404: Customer does not exist.
- 500: Internal server error.
