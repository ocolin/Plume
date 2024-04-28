# PUT

### URI

/Customers/{id}/locations/{locationId}/ispSpeedTestConfiguration

### Description

Enable|Disable ispSpeedTestConfiguration to schedule speed tests.

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
- enable
  - REQUIRED
  - string($JSON)
  - formData
  - boolean but marked as 'any' because our mobile app platforms mixed string and boolean primitive
- enableAllNodes
  - string($JSON)
  - formData
  - boolean but treated as a string since it is optional

## Responses

### Statuses

- 200: Success, run.
- 401: Authorization required or customer id not found.
- 404: Customer or location does not exists.
- 500: Internal server error.

### Code

    {
        "ispSpeedTestConfiguration": {
            "_version": "1.0.1",
            "enable": true,
            "speedCapable": true,
            "enableAllNodes": true,
            "createdAt": "2024-04-27T18:46:36.808Z",
            "updatedAt": "2024-04-27T18:46:36.808Z"
        }
    }