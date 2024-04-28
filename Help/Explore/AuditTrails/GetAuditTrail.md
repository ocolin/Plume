# GET

### URI

/AuditTrails/getAuditTrail

### Description

Get Audit Trail for a customer and/or location

## Parameters

- customerId
  - REQUIRED
  - string
  - query
  - Customer Id
- locationId
  - string
  - query
  - Location ID
- partnerIds
  - string($JSON)
  - query
  - Partner Id

## Responses

### Statuses

200: Ok.
401: Authorization required.
404: Location id, does not exist.
500: Internal server error.

### Code

