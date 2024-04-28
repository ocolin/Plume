# GET

### URI

/Customers/{id}/locations/{locationId}/nodeAuthorizations

### Description

Configure number of authorized leaf pods grouped by model id for a Location ID.

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
- numNodesAuthorized
  - string($JSON)
  - formData
  - number of leaf pods grouped by model id that are authorized to be claimed and be a part of the Plume network

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
        "updatedAt": "2024-04-28T01:08:50.259Z"
    }
