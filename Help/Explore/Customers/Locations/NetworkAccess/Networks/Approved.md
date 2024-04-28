# POST

### URI

/Customers/{id}/locations/{locationId}/networkAccess/networks/{networkId}/approved

### Description

Approve devices in the network

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
- mac
    - REQUIRED
    - array
    - body


    [
        {}
    ]

## Responses

### Statuses

- 204: Success.
- 404: Location does not exist.
- 404: Network does not exist.

### Code

    [
        "string"
    ]

--------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/networkAccess/networks/{networkId}/approved/{mac}

### Description

Unapprove approved devices in the network

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
- mac
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 204: Success.
- 404: Location does not exist.
- 404: Network does not exist.
- 404: Device is not approved.


