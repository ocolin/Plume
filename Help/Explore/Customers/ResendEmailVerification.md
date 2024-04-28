# POST

### URI

/Customers/resendEmailVerification

### Description

Resend the verification email.

## Parameters

- email
  - string
  - formData
  - Email address that verification email will be sent to.
- notificationOptions
  - string($JSON)
  - formData

## Responses

### Statuses

- 204: Successfully sent email verification.
- 400: Customer email is required (for this request).
- 404: Unable to find Customer by email address.
- 409: Customer email already verified.
- 500: Internal server error.

### Code

