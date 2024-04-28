# POST

### URI

/Customers/{id}/entitledAccess/{locationId}/accessTokens

### Description

Get an access token for a location where you are assigned as a manager

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
    - Location ID

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 404: Location does not exist.
- 422: Invalid email, name, access type or manager is already assigned to this location

### Code

    {}