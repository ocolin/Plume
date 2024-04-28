# GET

### URI

/Customers/{id}/locations/{locationId}/marketingExport

### Description

Get detailed information of a location for CRM campaigns.

## Parameters

- id
  - string($JSON)
  - path
  - Customer id
  - REQUIRED
- locationId
  - REQUIRED
  - string
  - path
  - Location ID
- wifiMotionCapable
  - boolean
  - query
- wifiMotionEnable
  - boolean
  - query
- onlineProtectionEnabled
  - boolean
  - query
- personsWithoutAssignedDevices
  - boolean
  - query
- peopleProfileEverCreated
  - boolean
  - query
- blockedSecurityEventsCountThirtyDay
  - boolean
  - query
- devicesOnlineThirtyDays
  - boolean
  - query
- mostActiveDevicesThirtyDays
  - boolean
  - query
- appTimeCapable
  - boolean
  - query
- subscription
  - boolean
  - query
- lastThirtyDaysSpeedTestAverages
  - boolean
  - query

## Responses

### Statuses

- 200: Success, location data in response.
- 500: Internal server error.

### Code

    {}