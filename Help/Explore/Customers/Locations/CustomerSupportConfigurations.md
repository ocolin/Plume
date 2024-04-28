# GET

### URI

/Customers/{id}/locations/{locationId}/customerSupportConfigurations

### Description

Returns partner customer support configuration.

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

## Responses

### Statuses

- 200: Success.
- 404: customer id or location id does not exist.
- 500: Internal server error.

### Code

    {}