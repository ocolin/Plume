# POST

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dhcpReservations/{mac}/portForward

### Description

Record a new Port Forwarding entry for an existing DHCP IP reservation tied to a MAC address at a Location ID.

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
- externalPort
    - REQUIRED
    - string($JSON)
    - formData
- internalPort
  - string($JSON)
  - formData
- protocol
  - string($JSON)
  - formData
- name
  - string($JSON)
  - formData
- natLoopback
  - string
  - formData

## Responses

### Statuses

- 200: Success, all PortForwards are returned.
- 401: Authorization required or customer id not found.
- 422: networkConfiguration, dhcpReservation, PortForward is empty.
- 422: mac is empty, or invalid, externalPort/internalPort is out of range, or protocol is invalid, or duplicate externalPort.
- 500: Internal server error.

### Code

    {
        "externalPort": 0,
        "internalPort": 0,
        "protocol": "string",
        "name": "string",
        "natLoopback": "auto"
    }

---------

# PUT

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dhcpReservations/{mac}/portForward/{externalPort}

### Description

Update an existing Port Forwarding entry for an existing DHCP IP reservation tied to a MAC address at a Location ID.

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
- externalPort
    - REQUIRED
    - string($JSON)
    - formData
- internalPort
    - string($JSON)
    - formData
- protocol
    - string($JSON)
    - formData
- name
    - string($JSON)
    - formData
- natLoopback
    - string
    - formData

## Responses

### Statuses

- 200: Success, all PortForwards are returned.
- 401: Authorization required or customer id not found.
- 422: networkConfiguration, dhcpReservation, PortForward is empty.
- 422: mac is empty, or invalid, externalPort/internalPort is out of range, or protocol is invalid.
- 500: Internal server error.

### Code

    {
        "externalPort": 0,
        "internalPort": 0,
        "protocol": "string",
        "name": "string",
        "natLoopback": "auto"
    }

-------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dhcpReservations/{mac}/portForward/{externalPort}

### Description

Delete an existing Port Forwarding entry for an existing DHCP IP reservation tied to a MAC address at a Location ID.

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
- externalPort
    - REQUIRED
    - string($JSON)
    - formData

## Responses

### Statuses

- 200: Success, returns list of remaining port forwards.
- 401: Authorization required or customer id not found.
- 404: NetworkConfiguration, DhcpReservation or PortForward does not exist.
- 422: mac does not exist, or is invalid, or externalPort is empty.
- 500: Internal server error.

### Code



