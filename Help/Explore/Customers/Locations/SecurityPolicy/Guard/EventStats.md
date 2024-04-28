# POST

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/guard/eventStats

### Description

Get the Guard Event Stats for a Location ID.

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
- macs
  - string($JSON)
  - formData
  - array of macs[]
- persons
  - string($JSON)
  - formData
  - array of personIds[]
- protectionType
  - string
  - formData
  - filter by protectionType: ihp | ohp. Returns all types by default.
- eventTypes
  - string($JSON)
  - formData
  - filter by event type, any combo of: 'adBlocking','teenagers','kids','adultAndSensitive','secureAndProtect','ipThreatOutbound','ipThreatInbound', 'iotProtect'. Returns all types by default.
- timePeriod
  - REQUIRED
  - string
  - formData
  - Any of "last24Hours","last7Days","last30Days"
- groupOfUnassignedDevices
  - boolean
  - formData
  - to include the group of unassigned devices

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}
