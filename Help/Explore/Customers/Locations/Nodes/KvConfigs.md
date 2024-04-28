# GET

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/kvConfigs

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Customer id
- locationId
  - REQUIRED
  - string($JSON)
  - path
  - Location ID
- nodeId
  - REQUIRED
  - string
  - path

## Responses

### Statuses

- 200: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 422: nodeId must be defined.
- 425: nodeId must belong to the location.
- 500: Internal server error.

### Code

    [
        {
            "module": "string",
            "key": "string",
            "value": "string",
            "persist": false,
            "createdAt": "2024-04-26T20:03:59.871Z",
            "updatedAt": "2024-04-26T20:03:59.871Z",
            "id": "string"
        }
    ]

--------

# POST

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/kvConfigs

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID
- nodeId
    - REQUIRED
    - string
    - path
- module
  - REQUIRED
  - string
  - formData
- key
  - REQUIRED
  - string
  - formData
- value
  - REQUIRED
  - string
  - formData
- persist
  - Boolean
  - formData

## Responses

### Statuses

- 200: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 422: nodeId must be defined.
- 425: nodeId must belong to the location.
- 500: Internal server error.

### Code

    {
        "module": "string",
        "key": "string",
        "value": "string",
        "persist": false,
        "createdAt": "2024-04-26T20:06:05.498Z",
        "updatedAt": "2024-04-26T20:06:05.498Z",
        "id": "string"
    }

---------

# PATCH

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/kvConfigs

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID
- nodeId
    - REQUIRED
    - string
    - path
- kvConfigs
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 422: nodeId must be defined.
- 425: nodeId must belong to the location.
- 500: Internal server error.

### Code

    [
        {
            "module": "string",
            "key": "string",
            "value": "string",
            "persist": false,
            "createdAt": "2024-04-26T20:08:38.998Z",
            "updatedAt": "2024-04-26T20:08:38.998Z",
            "id": "string"
        }
    ]

-----------

# DELETE

Delete kvConfigs with selected module and key on a particular Node for a Location ID.

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/kvConfigs/{module}/{key}

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID
- nodeId
    - REQUIRED
    - string
    - path
- module
  - REQUIRED
  - string
  - path
- key
  - REQUIRED
  - string
  - path

## Responses

### Statuses

- 200: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 422: nodeId must be defined.
- 425: nodeId must belong to the location.
- 500: Internal server error.

### Code

    {
        "module": "string",
        "key": "string",
        "value": "string",
        "persist": false,
        "createdAt": "2024-04-26T20:56:10.942Z",
        "updatedAt": "2024-04-26T20:56:10.942Z",
        "id": "string"
    }