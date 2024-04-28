# GET

### URI

/Customers/{id}/locations/{locationId}/authorizations

### Description

Get the number of authorized leaf pods for a Location ID.

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

Number of leaf pods that are authorized to be claimed and be a part of the Plume network

- 200: Success, numPodsAuthorized returned.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "numPodsAuthorized": 32,
        "numNodesAuthorized": [],
        "updatedAt": "2024-04-28T01:06:11.869Z"
    }

----------

# PUT

### URI

/Customers/{id}/locations/{locationId}/authorizations

### Description

Configure number of authorized leaf pods for a Location ID.

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
- numPodsAuthorized
  - number($double)
  - formData
  - number of leaf pods that are authorized to be claimed and be a part of the Plume network

## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields are missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "numPodsAuthorized": 32,
        "numNodesAuthorized": [],
        "updatedAt": "2024-04-28T01:07:34.847Z"
    }