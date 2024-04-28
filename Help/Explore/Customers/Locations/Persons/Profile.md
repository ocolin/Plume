# PATCH

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/profile

### Description

Update a Person's Profile for a location ID.

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
- personId
    - REQUIRED
    - string
    - path
- type
  - string
  - formData
  - Valid values: 'employee'

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id, WifiNetwork, or Person id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

-----------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/profile

### Description

Delete a Person's Profile for a location ID.

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
- personId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or Person id does not exist and is not known to Plume
- 500: Internal server error.

### Code
