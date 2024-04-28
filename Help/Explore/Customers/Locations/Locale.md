# PUT

### URI

/Customers/{id}/locations/{locationId}/locale

### Description

Configure locale values for a Location ID.

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
- region
  - REQUIRED
  - string
  - formData
  - during optimizations, used to determine allowed WiFi channels. Possible values: US, SINGAPORE, UK, EU, CANADA, JP.

## Responses

### Statuses

- 200: Success, updated.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: Region value is not valid.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "region": "string",
        "dfsMode": "string",
        "updatedAt": "2024-04-28T01:04:21.931Z"
    }
