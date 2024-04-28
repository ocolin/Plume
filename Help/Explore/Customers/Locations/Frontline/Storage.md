# GET

### URI

/Customers/{id}/locations/{locationId}/frontline/storage

### Description

Fetch the frontline storage for this location

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

## Responses

### Statuses

- 200: Success, HomeSecurity object returned.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        "keys": "string",
        "createdAt": "2024-04-26T21:19:13.122Z",
        "updatedAt": "2024-04-26T21:19:13.122Z",
        "id": "string",
        "locationId": "string"
    }

--------

# PUT

### URI

/Customers/{id}/locations/{locationId}/frontline/storage

### Description

Create or Update the frontline storage for a Location ID

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
- data
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

