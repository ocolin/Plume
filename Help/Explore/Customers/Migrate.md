# POST

### URI

/Customers/{id}/migrate

### Description

Migrate a customer to a different cloud.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- cloud
  - REQUIRED
  - string
  - formData
- migrationName
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

### Code

-----------

# GET

### URI

/Customers/{id}/migrate

### Description

Returns cloud migration status for customer

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id

## Responses

### Statuses

- 200: Success, return the search result.
- 401: Authorization required or customer id not found.
- 404: Customer does not exist.

### Code

    {}