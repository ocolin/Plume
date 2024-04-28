# GET

/Customers/{id}/locations/{locationId}/backhaul

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

- 200 Request was successful

### Code

    {}

-----------

# PUT

/Customers/{id}/locations/{locationId}/backhaul

## Parameters

- id
  - string($JSON)
  - (path)
  - Customer id
  - REQUIRED
- locationId
  - string
  - (path)
  - Location ID
  - REQUIRED
- mode
  - string
  - (formData)
  - auto || enable || disable
- dynamicBeacon
  - string
  - (formData)
  - A valid state for the dynamic beaconing setting. Either auto, enable, or disable
- wds
  - string
  - (formData)
  - auto || enable || disable
- wpaMode
  - string
  - (formData)
  - auto || psk2 || sae-mixed
- hitlessTopology
  - string
  - (formData)
  - auto || enable || disable

## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "mode": "auto",
        "wpaKey": "string",
        "dynamicBeacon": "auto",
        "wds": "auto",
        "wpaMode": "auto",
        "wpaModeRealized": "string",
        "hitlessTopology": "auto",
        "createdAt": "2024-04-26T19:54:18.018Z",
        "updatedAt": "2024-04-26T19:54:18.018Z"
    }