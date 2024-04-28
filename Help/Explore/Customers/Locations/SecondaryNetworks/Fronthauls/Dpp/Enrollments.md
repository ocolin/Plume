# POST

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/fronthauls/{networkId}/dpp/enrollments

### Description

Create an enrollment for DPP setting for a fronthaul secondary network.

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
- networkId
    - REQUIRED
    - string
    - path
- bootstrapUri
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 202: Success, new DPP configurator generated.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or wifi network does not exist.
- 404: Configurator keys for network not found.
- 500: Internal server error.

### Code

    {}