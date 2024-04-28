# GET

### URI

/Customers/{id}/locations/{locationId}/subscription

### Description

Get Subscription details for this location

## Parameters

- Id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
    - Location ID

## Responses

### Statuses

- 200: Success, subscription details returned
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

----------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/subscription

### Description

Patch Subscription details for this location

## Parameters

- Id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
- status
  - REQUIRED
  - string
  - formData
  - enum of values include: Active, Suspended


## Responses

### Statuses

- 202: Success, status patched
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 422: Status is invalid.
- 500: Internal server error.

### Code


-------------

# PUT

### URI

/Customers/{id}/locations/{locationId}/subscription

### Description

Put Subscription details for this location

## Parameters

- Id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
- ratePlanId
    - REQUIRED
    - string
    - formData

## Responses

### Statuses

- 200: Success, service level returned
- 401: Authorization required or customer id not found.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}