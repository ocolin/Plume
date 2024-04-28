# GET

### URI

/Customers/{id}/iosDeviceTokens/{deviceToken}/exists

### Description

Provides feedback as to whether an iOS deviceToken was previously registered for push notifications.

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

- 200: Success, exists:true|false returned.
- 404: customer id does not exist.
- 500: Internal server error.

### Code

    {}
