# DELETE

### URI

/Customers/{id}/locations/{locationId}/configs

### Description

Delete specified location settings, while keeping claimed nodes intact

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
- persons
  - boolean
  - formData
  - Whether or not to delete person information
- onboardingCheckpoints
  - boolean
  - formData
  - Whether or not to delete onboarding checkpoints
- devices
  - boolean
  - formData
  - Whether or not to delete devices related information
- networkConfiguration
  - boolean
  - formData
  - Whether or not to delete network configuration
- wifiNetwork
  - boolean
  - formData
  - Whether or not to delete wifi network
- deviceFreeze
  - boolean
  - formData
  - Whether or not to delete device freeze templates
- deviceNicknames
  - boolean
  - formData
  - Whether or not to delete device nicknames
- managers
  - boolean
  - formData
  - Whether or not to delete managers of the location
- wanConfiguration
  - boolean
  - formData
  - Whether or not to delete wanConfiguration

## Responses

### Statuses

- 204: Success, a job well done.
- 401: Authorization required or customer id not found.
- 404: location id not found or nodeId missing from URL
- 500: Internal server error.


