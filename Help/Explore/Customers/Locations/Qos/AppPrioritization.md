# GET

### URI

/Customers/{id}/locations/{locationId}/qos/appPrioritization

### Description

Get status for app prioritization.

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

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

--------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/qos/appPrioritization


### Description

Update app prioritization config.

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
- enabled
  - boolean
  - formData
  - true if app prioritization is enabled
- mode
  - string
  - formData
  - App Prioritization mode - any of auto | enable | disable
- isFirstTimeUserExperience
  - boolean
  - formData
  - true if it is first time user experience
- template
  - string
  - formData
  - Template for app prioritization
- customSettingEnabled
  - boolean
  - formData
  - true if custom setting is enabled
- customSetting
  - string($JSON)
  - formData
  - Settings for app prioritization

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}
