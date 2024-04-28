# PATCH

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/ethernetLan

### Description

Update the ethernetLan setting for a Location ID.

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
- ethernetLan
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
