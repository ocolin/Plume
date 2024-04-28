# POST

### URI

/Customers/{id}/campaigns

### Description

Create a braze campaign.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Customer id
- name
  - REQUIRED
  - string
  - formData
- properties
  - REQUIRED
  - string($JSON)
  - formData

## Responses

### Statuses

- 204: Success, campaign created.
- 400: Required field is missing.
- 401: Authorization required or customer id not found.
- 422: Campaign name validation failed.
- 500: Internal server error.

### Code
