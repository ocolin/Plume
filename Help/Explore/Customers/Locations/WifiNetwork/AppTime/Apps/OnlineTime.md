# GET

### URI

/Customers/{id}/locations/{locationId}/wifiNetwork/appTime/apps/onlineTime

### Description

Fetch the AppTime Apps Online Time Stats for default network.

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
- timePeriod
    - REQUIRED
    - string
    - query
    - Any of "weekly","dailyToday","dailyYesterday","daily2DaysAgo","daily3DaysAgo","daily4DaysAgo","daily5DaysAgo","daily6DaysAgo","last30Days","last12Months"
- limit
    - number($double)
    - query
    - Maximum number of apps to return. Defaults to 20
- grouping
    - string
    - query
    - typing of Grouping for the purposes of applying the limit. Can be: 'perTimeSlot' ONLY


## Responses

### Statuses

- 200: Success, AppTime Stats returned.
- 401: Authorization required or customer id not found.
- 404: location id or secondary does not exist.
- 500: Internal server error.

### Code

    [
        {}
    ]