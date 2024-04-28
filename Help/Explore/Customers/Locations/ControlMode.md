# GET

### URI

/Customers/{id}/locations/{locationId}/controlMode

### Description

Get control mode for a Location ID.

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
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {}

----------

# PUT

### URI

/Customers/{id}/locations/{locationId}/controlMode

### Description

Set control mode for a Location ID.

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
- mode
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {
        "mode": "full",
        "updatedAt": "2024-04-28T00:53:40.901Z"
    }
