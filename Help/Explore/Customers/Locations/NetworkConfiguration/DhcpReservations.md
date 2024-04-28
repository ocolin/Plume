# GET

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dhcpReservations

### Description

Get current DHCP IP reservation details for a Location ID.

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

- 200: Success, current DhcpReservation returned.
- 401: Authorization required or customer id not found.
- 404: location id or DhcpReservation does not exist.
- 422: mac is empty, or invalid.
- 500: Internal server error.

### Code

    [
        {
            "mac": "string",
            "hostname": "string",
            "ip": "string"
        }
    ]
