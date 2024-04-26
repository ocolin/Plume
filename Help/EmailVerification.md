# Email Verification - API

The customer’s email must be verified before the customer can log into the mobile app. The email may be verified by an external system or via the Plume Cloud directly.

## Send Email Verification Email

If the email used in the user creation step is not verified, you may trigger the email verification check from the Plume Cloud using the following API. This check only ensures that the email is real and accessible by an end user. It does not offer verification of who the person is but rather just checks that the user can receive future emails for other use cases like password reset.

### Request

#### POST

    Authorization: #Auth Token from login step in Appendix - admin user
    https://{{URL-Provided-by-Plume}}/api/Customers/resendEmailVerification

    Content-Type: application/JSON
    {
        "email":  # Email used by end customer
    }

### Successful Response

#### HTTP 204


## Bypass Email Verification via API

Email verification is required for the user to be able to log into the Plume Cloud via the Plume Mobile App. If the ISP previously verifies the email via an OSS system then the following API may be used to bypass Plume’s email verification check. If an external system does not verify the email then this API should not be used, and an email verification should be sent to the customer using the API above.

## Validations:
- Admin authorization token
- CustomerID in the URL path is a valid existing customer

### Request

#### PATCH

    Authorization: #Auth Token from login step in Appendix - admin user
    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}

    Content-Type: application/JSON
    {
        "emailVerified":true
    }

### Response

#### HTTP 200

    {
        "id": "string",
        "accountId": "string",
        "autoProvisioned": ,
        "name": "string",
        "createdAt": "string",
        "email": "string"
        "emailVerified":  
    }

- "id":  Plume Customer ID which will be used to identify the customer in PLume API calls
- "accountId": Account ID field for the customer. Default filled with an UUID
- "autoProvisioned": Plume System Flag for SSO and auto provisioned accounts
- "name": Customer name
- "createdAt": UTC Timestamp the customer was created
- "email": Customer Email address
- "emailVerified": Flag indicating if email has been verified and can be used for logging into Plume App

## HTTP Error Codes and Reasons:

| Code | Response |
| ---- | -------- |
| HTTP 401: Authorization required. | Authorization Header has failed the security check, due to being missing, or expired or the User does not have the appropriate security context to execute this API. or CustomerId may not exist or be known to this user's security. |
| HTTP  500: Internal server error. | Internal server error. |