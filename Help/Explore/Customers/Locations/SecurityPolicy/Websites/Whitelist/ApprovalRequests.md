# GET

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/websites/whitelist/approvalRequests

### Description

Get a list of pending approval requests for this location.

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
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id, CustomerId or requst id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

--------

# POST

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/websites/whitelist/approvalRequests

### Description

Post a request for a whitelist exception to be added to your person profile.

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
- value
  - REQUIRED
  - string
  - formData
- type
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 200: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id, CustomerId or requst id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}

------------

# PUT

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/websites/whitelist/approvalRequests/{requestId}

### Description

Approve a persons whitelist request and add it to the security policy.

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
- requestId
    - REQUIRED
    - string
    - path
- persons
    - REQUIRED
    - string($JSON)
    - formData

## Responses

### Statuses

- 204: No content.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id, CustomerId or requst id does not exist and is not known to Plume
- 500: Internal server error.

### Code



-----------------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/securityPolicy/websites/whitelist/approvalRequests/{requestId}

### Description

Reject an approval request for a website whitelist

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
- requestId
    - REQUIRED
    - string
    - path

## Responses

### Statuses

- 204: Success.
- 400: Required fields missing or field type is incorrect.
- 401: Authorization required or customer id not found.
- 404: Location id, CustomerId or requst id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {}