# GET

/Customers/{id}/locations/{locationId}/schedules

## Parameters

- Id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 200: Success, custom schedules list returned.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 500: Internal server error.

### Code

    [
        {
            "_version": "1.0.0",
            "id": 0,
            "type": "string",
            "name": "string",
            "createdAt": "2024-04-26T20:21:20.407Z",
            "updatedAt": "2024-04-26T20:21:20.407Z"
        }
    ]

-------

# POST

/Customers/{id}/locations/{locationId}/schedules

## Parameters

- Id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
- name
  - REQUIRED
  - string
  - formData
- type
  - REQUIRED
  - string
  - formData
- schedules
  - REQUIRED
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success, custom shared schedules applied.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist or is not known to Plume
- 422: schedules value is invalid.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "id": 0,
        "type": "string",
        "name": "string",
        "createdAt": "2024-04-26T20:22:29.885Z",
        "updatedAt": "2024-04-26T20:22:29.885Z"
    }

-------

# PATCH

/Customers/{id}/locations/{locationId}/schedules/{templateId}

## Parameters

- Id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
- templateId
  - REQUIRED
  - string
  - path
- schedules
    - REQUIRED
    - string($JSON)
    - formData
- name
    - REQUIRED
    - string
    - formData
- type
    - REQUIRED
    - string
    - formData

## Responses

### Statuses

- 200: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 422: templateId must be defined.
- 422: schedules value is invalid.
- 425: templateId must belong to the location.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "id": 0,
        "type": "string",
        "name": "string",
        "createdAt": "2024-04-26T20:26:44.743Z",
        "updatedAt": "2024-04-26T20:26:44.743Z"
    }

----------

# DELETE

/Customers/{id}/locations/{locationId}/schedules/{templateId}

## Parameters

- Id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
- templateId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 204: Success, the custom shared schedule deleted.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist or is not known to Plume
- 500: Internal server error.

### Code
