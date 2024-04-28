# GET

### URI

/Customers/exists

### Description

Check if the customer email exists and is known to Plume and returns emailVerified value.

## Parameters

- email
  - string
  - query
  - Pass the email as an URL parameter.

## Responses

### Statuses

- 200: customer email exists and is known to Plume, emailVerified returned
- 400: email is required
- 404: customer email does not exist and is not known to Plume
- 422: email is not valid
- 500: Internal server error.

### Code

    true