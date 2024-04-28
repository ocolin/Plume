# GET

/Customers/{id}/termsAndPrivacyAccepted

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - Customer id
- refresh
  - Bool
  - Query


## Responses

### Statuses

- 200 Request was successful

### Code

    {
        "termsDocumentId": 0,
        "termsAcceptedAt": "2024-04-26T18:57:37.544Z",
        "privacyDocumentId": 0,
        "privacyAcceptedAt": "2024-04-26T18:57:37.544Z"
    }


---------

# POST

/Customers/{id}/termsAndPrivacyAccepted

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - Customer id
- termsDocumentId
  - number($double)
  - (formData)
- privacyDocumentId
  - number($double)
  - (formData)
- termsAcceptedAt
  - string($date-time)
  - (formData)
- privacyAcceptedAt
  - string($date-time)
  - (formData)

## Responses

### Statuses

- 200: Success, terms and privacy updated.
- 422: Input validation failed.
- 500: Internal server error.

### Code

    {
        "termsDocumentId": 0,
        "termsAcceptedAt": "2024-04-26T19:01:17.151Z",
        "privacyDocumentId": 0,
        "privacyAcceptedAt": "2024-04-26T19:01:17.151Z"
    }