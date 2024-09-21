# Customer Provisioning - API

To start, a unique customer must be registered with the Plume Cloud. Basic information such as their Name, Email, and password must be registered and verified. This can be done via a RESTful API call to the Plume Cloud with an authentication token.

The Plume PartnerId is a required field. Work with Plume to obtain a PartnerId to be used for the integration. A location’s default profile value is auto which means it is configured for HomePass. A profile value of smallbusiness indicates that the location will be configured for WorkPass.

### Provisioning Best Practices

- The real email from the end customer should be used because it is the method to log into the Plume mobile app. If the email is not known, a unique temporary valid email may be used and updated via Frontline by a technician when the installation is completed (e.g. email user@example.org)
- PartnerId is provided by Plume. Unique partnerId will be provided per country/ISP per Plume Cloud.
- The name is to be set to the customer name in the CRM system
- The PartnerId provided by Plume should be used by Plume to add them to a corresponding Plume Cloud Group.

### Validations

- Admin authorization token.
    - Name and email are not mandatory fields but are needed to behave like the old registerWithGroups method.
        - If email is not present, a random mail will be used that will look like: null+${randomString}@plume.com.
        - The name must not contain the special characters of “”.
- Customer email must not already exist in the Plume Cloud.
- Passwords set by customers must be at least 8 characters long and have at least two character classes:
    - Uppercase letters (A-Z)
    - Lowercase letters (a-z)
    - Numbers (0-9)
    - Non-alphanumeric (!@#$%^&*()_+-=[]{}|')
- accountID must be unique per Plume PartnerId, a mandatory field, and if not known, can be a UUID.
    - The accountId must not contain the special characters of “”.
- partnerId must be supplied.
- profile (optional) and defaults to “auto”
- onboardingCheckpoint (optional).
    - Legal values are: “PodsAdded” or
    - “OnboardingComplete”.

### Request

#### POST

    https://{{URL-Provided-by-Plume}}/api/Customers/register
    Authorization: #Auth Token from login step in Appendix- admin user

    Content-Type: application/JSON
    {
        "email": "string",
        "name": "string",  
        "accountId": "TEST123456"
        "partnerId": "string"
        "profile": “string”,
        "acceptLanguage": “string”  
        “onboardingCheckpoint”: “string”
    }

- "email": The real email from the end customer should be used because it is the method to log into the Plume mobile app. If the email is not known, a unique temporary valid email may be used and updated via Frontline by a technician when the installation is completed (e.g. email user@example.org)
- "name": Customer name. “First Last”
- "accountId": Account ID field for the customer that relates the customer to a CRM
- "partnerId": Partner ID in the Plume system used for inventory control, App customizations, and analytics. Any "partnerId string" that doesn't match the partnerID already declared in the Plume system will result in an error message.
- "profile": Location profile, defaults to “auto”,
- "acceptLanguage": Language used when creating a Customer and displaying error messages. Default is “en-US”
- "onboardingCheckpoint": is the last passed onboarding step by the customer. Legal value is either 'PodsAdded' or 'OnboardingComplete'

### Successful Response

#### HTTP 200

    {
        "id": "string",  
        "accountId": "string",
        "anonymous": ,
        "autoProvisioned": ,
        "name": "string",
        "systemUser": ,
        "_version": "string",
        "locationId": "string",  
        "partnerId": “string”
    }

- "id": Plume Customer ID will be used to identify the customer in Plume API calls.
- "accountId": Account ID field for the customer.
- "anonymous": Plume System Flag for SSO
- "autoProvisioned":  Plume System Flag for SSO and auto-provisioned accounts
- "name": Customer name
- "systemUser": Plume System Flag "createdAt": "string", # UTC Timestamp the customer was created
- "_version": Plume System uses only "email": "string", # Customer Email address
- "locationId": Location ID created for the customer
- "partnerId": PartnerID in the Plume system, which is used for inventory control, App customizations, and analytics

### HTTP Error Codes and Reasons:

| Code | Response |
| ---- | -------- |
| HTTP 400: Required fields are missing. | Please check the input to confirm all required fields are present. |
| HTTP 401: Authorization required. | Authorization Header has failed the security check, due to being missing, or expired or the User does not have the appropriate security context to execute this API on this group. |
| HTTP 403: PartnerId is not allowed to provision new Plume accounts. | PartnerId is locked for new account creation. |
| HTTP 404: PartnerId is not found | PartnerId does not exist on Plume Cloud. |
| HTTP 409: Duplicate key | The AccountId and PartnerId are not unique. |
| HTTP 422: Input validation failed. | Validation error on fields supplied, e.g., the email address is in invalid format or already exists, missing partnerId in authorization token, invalid acceptLanguage. |
| HTTP  500: Internal server error. | Internal server error.|