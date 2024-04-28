# GET

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/tos

### Description

Describes the current state of TOS for the given client.

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
    - string
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