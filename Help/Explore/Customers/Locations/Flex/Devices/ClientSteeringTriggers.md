# GET

### URI

/Customers/{id}/locations/{locationId}/flex/devices/{mac}/clientSteeringTriggers

### Description

Find all instances of the model.

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
- mac
    - REQUIRED
    - string
    - path
    - device mac address
- order
  - string
  - query
  - desc || asc
- limit
  - number($double)
  - query
  - 1000 max for deep:false and 10 max for deep:true
- startAt
  - string
  - query
  - find objects after this value
- endAt
  - string
  - query
  - find objects before this value

    
## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id does not exist.
- 500: Internal server error.

### Code

    {}