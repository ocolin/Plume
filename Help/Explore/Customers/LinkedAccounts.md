# POST

/Customers/{id}/linkedAccounts

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Customer id
- provider
  - REQUIRED
  - string
  - formData
- userId
  - REQUIRED
  - string
  - formData
- userName
  - string
  - formData
- userDisplayName
  - string
  - formData
- sessionToken
  - REQUIRED
  - string
  - formData

## Responses

### Statuses

- 200: Success, the outside account inserted into the customer info/object.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {}

-----------

# DELETE

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- provider
    - REQUIRED
    - string
    - formData
- userId
    - REQUIRED
    - string
    - formData

## Responses

### Statuses

- 200: Success, the outside account inserted into the customer info/object.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {}
