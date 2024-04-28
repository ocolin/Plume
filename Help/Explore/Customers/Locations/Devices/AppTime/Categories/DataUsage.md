# GET

### URI

/Customers/{id}/locations/{locationId}/devices/{mac}/appTime/categories/dataUsage

### Description

Fetch the AppTime Categories Data Usage Stats for a Device.

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
    - string($JSON)
    - path
    - mac of device
- timePeriod
  - string
  - query
  - Any of "weekly","dailyToday","dailyYesterday","daily2DaysAgo","daily3DaysAgo","daily4DaysAgo","daily5DaysAgo","daily6DaysAgo","last30Days","last12Months"
- limit
  - number($double)
  - query
  - Maximum number of categories to return. Defaults to 20
- grouping
  - string
  - query
  - typing of Grouping for the purposes of applying the limit. Can be: 'overall'|'perTimeSlot'

## Responses

### Statuses

- 200: Success, AppTime Stats returned.
- 401: Authorization required or customer id not found.
- 404: location id or device does not exist.
- 500: Internal server error.

### Code

    [
        {}
    ]
