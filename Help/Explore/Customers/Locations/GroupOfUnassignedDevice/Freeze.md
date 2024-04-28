# POST

### URI

/Customers/{id}/locations/{locationId}/groupOfUnassignedDevices/freeze/{freezeTemplateId}

### Description

POST GroupOfUnassignedDevices to be frozen for a Location ID.

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
- freezeTemplateId
  - REQUIRED
  - string
  - path
  - Valid templates are uuids

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 404: Freeze Template Id not found.
- 409: Freeze Template Id already applied.
- 500: Internal server error.

### Code

    {}

-------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/groupOfUnassignedDevices/freeze/{freezeTemplateId}

### Description

Delete GroupOfUnassignedDevices uuid freeze for a Location ID.

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
- freezeTemplateId
    - REQUIRED
    - string
    - path
    - Valid templates are uuids

## Responses

### Statuses

- 204: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.
