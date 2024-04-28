# GET

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dhcp

### Description

Record or update a new DHCP subnet/subnetMask for a Location ID.

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
- subnet
  - REQUIRED
  - string
  - formData
- subnetMask
  - string
  - formData
- startIp
  - string
  - formData
- endIp
  - string
  - formData
- enableServer
  - boolean
  - formData
  - should the DHCP server be enabled

## Responses

### Statuses

- 200: Success, DHCP are returned.
- 401: Authorization required or customer id not found.
- 422: subnet value is empty, or invalid.
- 500: Internal server error.

### Code

    {}

---------

# PUT

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dhcp

### Description

Record or update a new DHCP subnet/subnetMask for a Location ID.

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
- subnet
  - REQUIRED
  - string
  - formData
- subnetMask
  - string
  - formData
- startIp
  - string
  - formData
- endIp
  - string
  - formData
- enableServer
  - boolean
  - formData
  - should the DHCP server be enabled

## Responses

### Statuses

- 200: Success, DHCP are returned.
- 401: Authorization required or customer id not found.
- 422: subnet value is empty, or invalid.
- 500: Internal server error.

### Code

    {}

-------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dhcp

### Description

Update DHCP configuration parameters.

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
- enableServer
  - boolean
  - formData
  - should the DHCP server be enabled

## Responses

### Statuses

- 200: Success, DHCP config is returned.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 422: DHCP not configured, use PUT to configure DHCP.
- 500: Internal server error.

### Code

    {}

