# POST

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/ohp/register

### Description

Setup a Mobile Device for Security Out of Home Protection (returns a Deeplink for use with Mobolize).

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
- os
  - REQUIRED
  - string
  - formData
  - Mobile device os
- device
  - REQUIRED
  - string
  - formData
  - Mobile device name
- software_version
  - REQUIRED
  - string
  - formData
  - Mobile software version
- mmc_agent_guid
  - REQUIRED
  - string
  - formData
  - Mobile mac agent guid

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}