# POST

### URI

/Customers/{id}/locations/{locationId}/networkAccess/blocked

### Description

Block devices

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
    - array
    - body


    [
        {}
    ]


## Responses

### Statuses

- 200: Success.
- 404: Location does not exist.

### Code


--------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/networkAccess/blocked/{mac}

### Description

Unblock blocked devices

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

## Responses

### Statuses

- 204: Success.
- 404: Location does not exist.



