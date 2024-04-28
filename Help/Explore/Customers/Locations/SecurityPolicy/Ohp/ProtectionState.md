# PUT

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/ohp/protectionState

### Description

Update the Device Protection State for Out of Home Protection.

## Parameters



## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code
