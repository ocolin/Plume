# PATCH

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/securityPolicy/ohp

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
- mac
    - REQUIRED
    - string
    - path
    - mac of device
- OHPNotificationsFlags
  - string($JSON)
  - formData
  - OHP feature flags
- disableMobilizeSdk
  - boolean
  - formData
  - enable or disable OHP SDK on the device

## Responses

### Statuses

- 204: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or Device does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}