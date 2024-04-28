# POST

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/tos/reset

### Description

Resets the back-off and thresholds for the given client.

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
- mac
    - REQUIRED
    - string($JSON)
    - path


## Responses

### Statuses

- 200: Ok.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 404: No device found with provided mac address
- 422: Invalid MAC.
- 500: Internal server error.

### Code

    {}