# PUT

### URI

/Customers/{id}/locations/{locationId}/nodes/{nodeId}/ledMode

### Description

Update the LED mode on a particular Node for a Location ID.

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
- nodeId
    - REQUIRED
    - string($JSON)
    - path
- mode
    - string
    - formData
    - on/off/wps/connectable

## Responses

### Statuses

When the mode is set to "locate", the Node with that ID at this locationId, will have its LED blinked for locating purposes. The mode is set to "normal" to return the LED to its normal mode of operation.

- 200: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 422: ledMode must be defined.
- 422: ledMode must be "locate" or "normal".
- 422: nodeId must be defined.
- 425: nodeId must belong to the location.
- 500: Internal server error.

### Code

    {
        "mode": "string"
    }