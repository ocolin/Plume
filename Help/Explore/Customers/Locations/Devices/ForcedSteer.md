# PUT

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/forcedSteer

### Description

Force a device to use the 2.4Ghz band with auto expire.

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
    - MAC address of the target device. Must have been online in the last 31 days.
- expiresAt
  - string
  - formData
  - time of expiration in RFC 3339 format (e.g. 2021-11-24T09:13:33+00:00), must be between 5 and 60 minutes in the future.

## Responses

### Statuses

- 204: Success, forced steer enabled.
- 404: Location ID or Device mac not found or the device has not been online in the last 31 days
- 422: expiresAt is outside of the expected range 5 to 60 minutes in the future
- 422: expiresAt is an invalid UTC date
- 422: expiresAt cannot be in the past
- 500: Internal server error.

### Code

    {}

----------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/forcedSteer

### Description

Disable 2.4Ghz band enforcement early.

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
    - MAC address of the target device. Must have been online in the last 31 days.

## Responses

### Statuses

- 204: Success, forced steer ended early.
- 404: Location ID or Device mac not found or the device has not been online in the last 31 days
- 500: Internal server error.

### Code

    {}