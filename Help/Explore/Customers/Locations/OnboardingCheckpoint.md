# POST

### URI

/Customers/{id}/locations/{locationId}/onboardingCheckpoint

### Description

Record the new Onboarding Checkpoint for the Location ID.

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
- checkpoint
  - string
  - formData
  - is the last passed onboarding step by the customer: 'PodsAdded' or 'OnboardingComplete';
- podsSeenByBle
  - string($JSON)
  - formData
  - is the number of Nodes the app discovered by BLE when the onboarding was completed by the customer, submit with PodsAdded
- appOs
  - string
  - formData
  - is the version of the app used during the onboarding, submit with PodsAdded
- osVersion
  - string
  - formData
  - is the phone OS version used during the onboarding, submit with PodsAdded

## Responses

### Statuses

- 200: Success, most recent checkpoint saved.
- 401: Authorization required or customer id not found.
- 404: location id does not exist and is not known to Plume
- 422: checkpoint value must be defined.
- 500: Internal server error.

### Code

    {
        "checkpoint": {
            "checkpoint": {
                "value": "string",
                "timestamp": "2024-04-28T02:09:29.827Z",
                "createdAt": "2024-04-28T02:09:29.827Z",
                "id": "string",
                "locationId": "string"
            }
        }
    }