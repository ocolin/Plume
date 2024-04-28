# GET

### URI

/Customers/{id}/locations/{locationId}/rooms

### Description

Get a Location's Rooms config by location ID.

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
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

----------

# POST

### URI

/Customers/{id}/locations/{locationId}/rooms

### Description

Create a Room for a Location ID.

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
- name
  - REQUIRED
  - string
  - formData
  - name of this Room
- devices
  - string($JSON)
  - formData
  - mac addresses of devices assigned to this Room
- nodes
  - string($JSON)
  - formData
  - nodeIds assigned to this Room

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist and is not known to Plume
- 422: Devices and Nodes must be defined and mac addresses must be valid.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "name": "string",
        "createdAt": "2024-04-28T07:20:30.103Z",
        "updatedAt": "2024-04-28T07:20:30.103Z",
        "locationId": "string"
    }

------------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/rooms/{roomId}

### Description

Patch a Room for a Location ID/Room ID.

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
- roomId
  - REQUIRED
  - string
  - path
- name
    - string
    - formData
    - name of this Room
- devices
    - string($JSON)
    - formData
    - mac addresses of devices assigned to this Room
- nodes
    - string($JSON)
    - formData
    - nodeIds assigned to this Room

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist and is not known to Plume
- 422: Devices and Nodes must be defined and mac addresses must be valid.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "name": "string",
        "createdAt": "2024-04-28T07:24:32.581Z",
        "updatedAt": "2024-04-28T07:24:32.581Z",
        "locationId": "string"
    }

------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/rooms/{roomId}

### Description

Delete a Room for a location ID.

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
- roomId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or Room id does not exist and is not known to Plume
- 500: Internal server error.



