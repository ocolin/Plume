# PUT

### URI

/Customers/{id}/locations/{locationId}/networkAccess/networks/{networkId}/deviceGroups/{groupId}/groupShares

### Description

Share access for a group or employee.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- networkId
    - REQUIRED
    - string
    - path
- groupId
    - REQUIRED
    - string
    - path
- groups
  - REQUIRED
  - string($JSON)
  - formData
- devices
  - REQUIRED
  - string($JSON)
  - formData

## Responses

### Statuses

This endpoint allows for a device in the first network to have access to all of the devices in the other group in the second network and/or to individual devices in the second network. In other words, by sharing access, we're allowing a single device to communicate with other devices across networks, by specifying other groups and/or individual devices.

- 200: Success.
- 422: Schema validation failed.
- 422: Illegal share.
- 404: Location does not exist.
- 404: Network does not exist.
- 404: Group does not exist.
- 401: Authorization required or customer id not found.
- 400: Invalid JSON or missing arguments.

### Code

    {}