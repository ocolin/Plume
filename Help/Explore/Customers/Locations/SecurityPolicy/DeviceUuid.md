# PUT

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/ohp/deviceUuid

### Description

Update the Device UUID Mapping for Out of Home Protection.

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
- lanIpv4
    - string
    - formData
    - Mobile device lanIpv4 address, if any
- lanIpv6
    - string
    - formData
    - Mobile device lanIpv6 address, if any
- uuid
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}