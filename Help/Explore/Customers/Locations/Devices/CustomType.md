# PATCH

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/customType

### Description

Update a Customer's device type configuration (user feedback).

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
- category
  - string($JSON)
  - formData
- brand
  - string($JSON)
  - formData
- model
  - string($JSON)
  - formData
- osName
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success, device type has been updated but not validated as a device that has ever connected.
- 400: nickname value must be defined.
- 404: customer id and/or mac does not exist.
- 422: nickname value must be less than 33 characters.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "typeIdentified": true,
        "icon": "string",
        "iconV2": "string",
        "category": "string",
        "brand": "string",
        "model": "string",
        "osName": "string",
        "createdAt": "2024-04-27T15:13:11.911Z",
        "id": 0
    }