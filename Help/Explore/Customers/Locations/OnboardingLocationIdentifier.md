# GET

### URI

/Customers/{id}/locations/{locationId}/onboardingLocationIdentifier

### Description

Get the onboarding identifier for a Location ID.

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

- 200: Success, current DPP configurator returned.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {}