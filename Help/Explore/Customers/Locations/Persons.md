# GET

### URI

/Customers/{id}/locations/{locationId}/persons

### Description

Get all Persons for a Location ID.

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

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    [
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
                "createdAt": "2024-04-27T01:49:28.367Z",
                "updatedAt": "2024-04-27T01:49:28.367Z",
                "id": "string"
            },
            "serviceLinking": {},
            "networkId": "string",
            "email": "string",
            "createdAt": "2024-04-27T01:49:28.367Z",
            "updatedAt": "2024-04-27T01:49:28.367Z",
            "locationId": "string"
        }
    ]

-------

# POST

### URI

/Customers/{id}/locations/{locationId}/persons

### Description

Create  a Person for a Location ID.

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
- nickname
  - REQUIRED
  - string
  - formData
- imageId
  - REQUIRED
  - string
  - formData
  - unique identifier for referencing a Person's hosted profile image, defaults are PROFILE_MAN and PROFILE_WOMAN
- assignedDevices
  - REQUIRED
  - string($JSON)
  - formData
  - mac addresses of devices assigned to this Person
- primaryDevice
  - string
  - formData
  - mac address of primary device assigned to this person.
- profile
  - string($JSON)
  - formData
  - Profile object contains 'type' field - valid values: 'employee'
- email
  - string
  - formData
  - email
- permission
  - string($JSON)
  - formData
  - Permission object for creating a manager for the location
- serviceLinking
  - string($JSON)
  - formData
  - serviceLinking object that links this Person object to a 3rd party's Person

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist and is not known to Plume
- 422: Nickname must be defined and mac addresses must be valid and email needs to be provided when permission is provided.
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
            "createdAt": "2024-04-27T01:51:30.014Z",
            "updatedAt": "2024-04-27T01:51:30.014Z",
            "id": "string"
        },
        "serviceLinking": {},
        "networkId": "string",
        "email": "string",
        "createdAt": "2024-04-27T01:51:30.014Z",
        "updatedAt": "2024-04-27T01:51:30.014Z",
        "locationId": "string"
    }