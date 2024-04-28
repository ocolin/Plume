# POST

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/fronthauls/{networkId}/dpp/bootstrapUris

### Description

Create a bootstrap for DPP setting for a Fronthaul Network.

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
- curve
  - string
  - formData
  - one of predefined elliptic curves, - optional, if missing in requset default to prime256v1

## Responses

### Statuses

- 200: Success, new DPP configurator generated.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or Fronthaul Network does not exist.
- 422: Invalid curve.
- 500: Internal server error.

### Code

    {}