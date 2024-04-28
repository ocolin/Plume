# GET

### URI

/Customers/{id}/createGetMarketingExportDataAccessToken

### Description

Create access token to get marketing data by CRM for campaigns

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - path
  - Customer id
- ttl
    - number($double)
    - formData

## Responses

### Statuses

- 200: Success, accessToken returned.
- 401: Authorization required or customer id not found.
- 404: customer id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    {
        "id": "string",
        "ttl": 1209600,
        "scopes": [
            "string"
        ],
        "created": "2024-04-26T21:12:25.417Z",
        "userId": "string"
    }