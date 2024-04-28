# GET

### URI

/Customers/{id}/locations/{locationId}/networkAccess/networks/{networkId}/deviceGroups

### Description

Get a list of device groups in a network, along with a list of member devices and group shares.

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

## Responses

### Statuses

- 200: Success.
- 404: Location does not exist.
- 404: Network does not exist.
- 401: Authorization required or customer id not found.

### Code

    [
        {}
    ]

-------------

# POST

### URI

/Customers/{id}/locations/{locationId}/networkAccess/networks/{networkId}/deviceGroups

### Description

Create a named device group within a network and optionally specify member devices.

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
- name
  - REQUIRED
  - string
  - formData
- devices
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success.
- 422: Schema validation failed.
- 404: Location does not exist.
- 404: Network does not exist.
- 403: Not allowed to create groups in unsupported networks.
- 401: Authorization required or customer id not found.
- 400: Invalid JSON or missing arguments.

### Code

    {
        "groupId": "string",
        "networkId": "string",
        "name": "string",
        "devices": []
    }

---------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/networkAccess/networks/{networkId}/deviceGroups/{groupId}

### Description

Change a device group name or device members.

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
- name
    - REQUIRED
    - string
    - formData
- devices
    - string($JSON)
    - formData

## Responses

### Statuses

- 200: Success.
- 422: Schema validation failed.
- 404: Location does not exist.
- 404: Network does not exist.
- 403: Not allowed to modify standalone groups or groups in unsupported networks.
- 401: Authorization required or customer id not found.
4- 00: Invalid JSON or missing arguments.

### Code

    {
        "groupId": "string",
        "networkId": "string",
        "name": "string",
        "devices": []
    }

------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/networkAccess/networks/{networkId}/deviceGroups/{groupId}

### Description

Delete a device group from a network.

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

## Responses

### Statuses

- 200: Success.
- 422: Schema validation failed.
- 404: Location does not exist.
- 404: Network does not exist.
- 403: Not allowed to delete standalone groups or groups in unsupported networks.
- 401: Authorization required or customer id not found.
- 400: Invalid JSON or missing arguments.


