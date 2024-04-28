# POST

### URI

/Customers/{id}/locations/{locationId}/managers/{managerId}/resendInvite

### Description

Resend invite to a manager that has status "pending".

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
- managerId
  - REQUIRED
  - string
  - path
- notificationOptions
  - string($JSON)
  - formData

## Responses

### Statuses

- 204: Success.
- 400: Required fields missing or field type is incorrect.
- 404: Location or Manager does not exist.
- 422: Manager already accepted the invite to manage the location

### Code

    {}