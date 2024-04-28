# GET

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/qos/appPrioritization

### Description

Get person status for app prioritization.

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
- personId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

-------


# PATCH

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/qos/appPrioritization

### Description

Update person app prioritization config.

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
- personId
    - REQUIRED
    - string
    - path
- template
  - REQUIRED
  - string
  - formData
  - value supported - personPriority

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

-------------


# DELETE

### URI

/Customers/{id}/locations/{locationId}/persons/{personId}/qos/appPrioritization

### Description

Delete person app prioritization config.

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
- personId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 200: Success.
- 401: Authorization required or customer id not found.
- 404: Location id or WifiNetwork does not exist and is not known to Plume
- 500: Internal server error.

### Code

    