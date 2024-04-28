# PUT

### URI

/Customers/{id}/iosDeviceToken/{deviceToken}

### Description

Inserts the iOS device token for the Customer ID, which may be used for notification services.

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
- deviceToken
  - REQUIRED
  - string
  - path

## Responses

### Statuses

- 204: Success, most recent IOS device Token saved.
- 401: Authorization required or customer id not found.
- 422: deviceToken value must be defined.
- 500: Internal server error.


