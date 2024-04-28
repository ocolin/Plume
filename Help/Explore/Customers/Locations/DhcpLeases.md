# GET

### URI

/Customers/{id}/locations/{locationId}/dhcpLeases

### Description

Returns DHCP leases from Controller

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

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: LocationId not found.
- 500: Internal server error.

### Code

    {}