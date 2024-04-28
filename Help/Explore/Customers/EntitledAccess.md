# GET

### URI

/Customers/{id}/entitledAccess

### Description

Get a list of all locations on which you are assigned as a manager.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 404: Location does not exist.
- 422: Invalid email, name, access type or manager is already assigned to this location

### Code

    {}