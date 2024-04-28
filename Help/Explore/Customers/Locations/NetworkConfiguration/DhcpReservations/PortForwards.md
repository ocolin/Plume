# GET

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dhcpReservations/{mac}/portForwards

### Description

Get all existing Port Forwarding entries for an existing DHCP IP reservation tied to a MAC address at a Location ID.

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

- 200: Success, current Port Forwarding entries returned.
- 401: Authorization required or customer id not found.
- 404: NetworkConfiguration or dhcpReservations value is empty.
- 422: mac is empty or invalid.
- 500: Internal server error.

### Code

