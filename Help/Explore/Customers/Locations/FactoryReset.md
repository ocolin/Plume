# DELETE

### URI

/Customers/{id}/locations/{locationId}/factoryReset

### Description

Reset specified location settings to default, while keeping claimed nodes intact. Some of the flags can cause a node to be reeboted.

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
- persons
  - boolean
  - formData
  - Whether or not to delete person information
- onboardingCheckpoints
  - boolean
  - formData
  - Whether or not to reset onboarding checkpoints
- devices
  - boolean
  - formData
  - Whether or not to delete devices related information
- networkConfiguration
  - boolean
  - formData
  - Whether or not to reset network configuration (triggers node reboot)
- wifiNetwork
  - boolean
  - formData
  - Whether or not to reset wifi network (triggers node reboot)
- deviceFreeze
  - boolean
  - formData
  - Whether or not to reset device freeze templates
- deviceNicknames
  - boolean
  - formData
  - Whether or not to reset device nicknames
- managers
  - boolean
  - formData
  - Whether or not to reset managers of the location
- wanConfiguration
  - boolean
  - formData
  - Whether or not to reset wanConfiguration

## Responses

### Statuses

- 204: Success, a job well done.
- 401: Authorization required or customer id not found.
- 404: location id not found or nodeId missing from URL
- 500: Internal server error.


