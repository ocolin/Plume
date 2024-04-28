# GET

### URI

/Customers/{id}/locations/{locationId}/networkAccess/networks

### Description

Get information about networkAccess networks

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

- 204: Success.
- 404: Location does not exist.

### Code

    [
        {
            "networkId": "string",
            "purgatory": false,
            "heaven": [],
            "captivePortal": false
        }
    ]

-----------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/networkAccess/networks/{networkId}

### Description

Enable or disable purgatory in the network

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
- purgatory
  - REQUIRED
  - boolean
  - formData

## Responses

### Statuses

- 204: Success.
- 404: Location does not exist.
- 404: Network does not exist.

### Code

    {}