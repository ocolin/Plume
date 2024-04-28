# GET

### URI

/Customers/{id}/locations/{locationId}/vlanServices

### Description

Returns vlanServices from Customer location state

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location Id

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}