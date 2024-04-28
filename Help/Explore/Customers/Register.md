# POST

### URI

/Customers/register

### Description

Register/create an anonymous account with an accountId instead of with email/password.

## Parameters

- accountId
  - REQUIRED
  - string
  - formData
  - must be unique, a UUID is recommended, min length is 6 characters
- name
  - string
  - formData
  - Full name of customer, defaults to value of accountId
- partnerId
  - string
  - formData
  - PartnerId of customer for accountId
- email
  - string
  - formData
- acceptLanguage
  - string
  - formData
  - acceptable language
- profile
  - string
  - formData
- onboardingCheckpoint
  - string
  - formData
  - is the last passed onboarding step by the customer: 'PodsAdded' or 'OnboardingComplete';

## Responses

### Statuses

- 200: Success, customer and location IDs returned.
- 400: Required fields are missing.
- 401: Authorization required.
- 422: Input validation failed.
- 422: Only integration role can set profile to property.
- 500: Internal server error.

### Code

    {
        "id": "string",
        "email": "string",
        "accountId": "string",
        "locationId": "string",
        "anonymous": false,
        "name": "string",
        "createdAt": "2024-04-27T00:01:18.531Z",
        "_version": "1.0.0"
    }