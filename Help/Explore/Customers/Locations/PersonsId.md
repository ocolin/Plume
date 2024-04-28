# GET

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}

### Description

Get a Person by ID for a Location ID.

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
- personId
  - REQUIRED
  - string
  - path


## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        "id": "string",
        "nickname": "string",
        "imageId": "string",
        "primaryDevice": "string",
        "homeAwayNotification": false,
        "appTime": {},
        "permission": {},
        "profile": {
            "_version": "1.0.0",
            "type": "string",
            "createdAt": "2024-04-27T01:58:39.629Z",
            "updatedAt": "2024-04-27T01:58:39.629Z",
            "id": "string"
        },
        "serviceLinking": {},
        "networkId": "string",
        "email": "string",
        "createdAt": "2024-04-27T01:58:39.629Z",
        "updatedAt": "2024-04-27T01:58:39.629Z",
        "locationId": "string"
    }

-------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}

### Description

Update a Person for a location ID.

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
- personId
    - REQUIRED
    - string
    - path
- nickname
  - string
  - formData
- imageId
  - string
  - formData
  - unique identifier for referencing a Person's hosted profile image
- primaryDevice
  - string
  - formData
  - mac addresses of Person's primary device
- assignedDevices
  - string($JSON)
  - formData
  - mac addresses assigned to this Person
- homeAwayNotification
  - boolean
  - formData
  - track person homeAway state
- permission
  - string($JSON)
  - formData
  - permission object for creating or deleting the manager
- email
  - string
  - formData
  - email for sending the manager invite
- serviceLinking
  - string($JSON)
  - formData
  - serviceLinking object that links this Person object to a 3rd party's Person

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or Person id does not exist and is not known to Plume
- 409: primaryDevice is not included in the list of assignedDevices[]
- 422: Mac addresses must be valid.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "nickname": "string",
        "imageId": "string",
        "primaryDevice": "string",
        "homeAwayNotification": false,
        "appTime": {},
        "permission": {},
        "profile": {
            "_version": "1.0.0",
            "type": "string",
            "createdAt": "2024-04-27T02:00:41.997Z",
            "updatedAt": "2024-04-27T02:00:41.997Z",
            "id": "string"
        },
        "serviceLinking": {},
        "networkId": "string",
        "email": "string",
        "createdAt": "2024-04-27T02:00:41.997Z",
        "updatedAt": "2024-04-27T02:00:41.997Z",
        "locationId": "string"
    }

-----------


# DELETE

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}

### Description

Delete a Person for a location ID.

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
- personId
    - REQUIRED
    - string
    - path
- blockUnassignedDevices
  - boolean
  - formData
  - block any devices previously assigned to Person (false by default)

## Responses

### Statuses

- 204: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or Person id does not exist and is not known to Plume
- 500: Internal server error.

### Code
