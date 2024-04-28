# GET

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dhcpReservations/{mac}

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
- mac
  - REQUIRED
  - string($JSON)
  - path

## Responses

### Statuses

- 200: Success, current DhcpReservation returned.
- 401: Authorization required or customer id not found.
- 404: location id or DhcpReservation does not exist.
- 422: mac is empty, or invalid.
- 500: Internal server error.

### Code

    {
        "mac": "string",
        "hostname": "string",
        "ip": "string"
    }

-------------

# PUT

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dhcpReservations/{mac}

### Description

Record or update a new DHCP IP Reservation for a particular MAC address at a Location ID.

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
- ip
  - REQUIRED
  - string
  - formData
- hostName
  - string
  - formData


## Responses

### Statuses

- 200: Success, all DHCP Reservations are returned.
- 401: Authorization required or customer id not found.
- 412: Subnet prefix is unknown.
- 422: IP/mac value is empty, or invalid.
- 500: Internal server error.

### Code

    {
        "mac": "string",
        "hostname": "string",
        "ip": "string"
    }

--------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dhcpReservations/{mac}

### Description

Delete a current DHCP IP reservation and the associated port forwarding entries for a particular MAC address at a Location ID.

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

- 200: Success, remaining DhcpReservations are returned.
- 401: Authorization required or customer id not found.
- 404: NetworkConfiguration or DhcpReservation is empty.
- 422: mac is empty or invalid.
- 500: Internal server error.

### Code

    [
        {
            "mac": "string",
            "hostname": "string",
            "ip": "string"
        }
    ]

