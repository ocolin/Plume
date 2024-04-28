# PATCH

/Customers/{id}/locations/{locationId}/qoe/liveMode

## Parameters

- id
  - REQUIRED
  - string($JSON)
- locationId
  - REQUIRED
  - string
- enable
  - REQUIRED
  - boolean
- expiresAt
  - string
- reportingInterval
  - number($double)

## Responses

### Statuses

- 200: Success, the new info looks good.
- 401: Authorization required or customer id not found.
- 400: enalbe and expiresAt, reportingInterval validation error.
- 422: expiresAt and reportingInterval validation error.
- 500: Internal server error.

### Code

    {}