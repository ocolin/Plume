# PUT

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/persistConfigurationOnGateway

### Description

Update settings for persistConfigurationOnGateway.

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
- persistConfigurationOnGateway
  - body


    {
        "mode": "auto"
    }


## Responses

### Statuses

Supported modes are:

- enable/disable/auto


- 200: Success, new ethernetLan settings saved.
- 401: Authorization required or customer id not found.
- 422: Input validation error, see output for details.
- 500: Internal server error.

### Code

    {
        "mode": "auto"
    }
