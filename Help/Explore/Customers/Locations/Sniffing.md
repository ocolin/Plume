# GET

### URI

/Customers/{id}/locations/{locationId}/sniffing

### Description

Get DNS, HTTP, UPnP and mDNS sniffing toggles for a Location ID.

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID

## Responses

### Statuses

- 200: Success, current sniffing toggles returned.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {}

--------

# PUT

### URI

/Customers/{id}/locations/{locationId}/sniffing

### Description

Updates location sniffing toggle modes

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- dns
  - REQUIRED
  - string($JSON)
  - formData
  - object with property "mode": an enum of values which include: auto, enable, disable
- http
  - REQUIRED
  - string($JSON)
  - formData
  - object with property "mode": an enum of values which include: auto, enable, disable
- upnp
  - REQUIRED
  - string($JSON)
  - formData
  - object with property "mode": an enum of values which include: auto, enable, disable
- mdns
  - REQUIRED
  - string($JSON)
  - formData
  - object with property "mode": an enum of values which include: auto, enable, disable

    
## Responses

### Statuses

- 202: Success.
- 400: Required fields missing or field type is incorrect.
- 404: Location does not exist.
