# POST

### URI

/Customers/import

### Description

Import customer data

## Parameters

- data
  - string($JSON)
  - formData
- migratedFrom
  - string($JSON)
  - formData
- reason
  - string
  - formData

## Responses

### Statuses

- 204: Success.
- 400: Nothing to import.
- 422: Import data is invalid.

### Code

    {}