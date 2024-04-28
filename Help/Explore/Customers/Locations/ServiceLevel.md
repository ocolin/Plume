# GET

### URI

/Customers/{id}/locations/{locationId}/serviceLevel

### Description

Get the service level for this location

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID

## Responses

### Statuses

- 200: Success, return service Level object.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/serviceLevel

### Description

Set the service level for this location

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- status
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 200: Success, updated service Level object returned.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 422: Invalid 'status' value.
- 500: Internal server error.

### Code

    {}