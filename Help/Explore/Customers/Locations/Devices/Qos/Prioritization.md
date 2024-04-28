# DELETE

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/qos/prioritization

### Description

Delete prioritization of a single device

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
- mac
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 202: Success.
- 404: Location does not exist.

### Code

    [
        {}
    ]