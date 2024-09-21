# Obtain CustomerID from AccountID - API

For active customers provisioned with the Plume product, the CustomerID may need to be looked up to process and/or service the account. The API endpoint below returns the CustomerID by searching for the AccountID provisioned during the onboarding.

Once the CustomerID is located using the AccountID, the “Obtain the Location ID for the Customer via API” flow can be used to look up the location ID for the customer. The customer and location IDs are required for many use cases.


### Request

Authorization: #Auth Token from login step in Appendix

#### GET

    https://URL-Provided-by-Plume/api/Partners/customers/search/{{--accountID--from--CRM--}}?field=accountId}

Additional API Parameters, both of which default to true but can be set to false:

- exactMatch=true/false
- startsWith=true/false

### Successful Response

#### HTTP 200

    [
        {
            "id": "string", # Plume Customer ID which will be used to identify the customer in Plume API calls
            "accountId": "string", # Account ID field for the customer. Default filled with an UUID
            "name": "string", # Customer name
            "locations": [
                {
                    "id": "string"
                },...
            ], # Array of locations created for or by the customer
            "email": "string" # Customer Email address
        },...
    ]

## HTTP Error Codes and Reasons:

| HTTP Status Code  | Reason     |
|------------------|-------------|
| HTTP 401: Login Failed.	| Authorization Header has failed the security check, due to being missing, or expired or the User does not have the appropriate security context to execute this API. or CustomerId may not exist or be known to this User's security. |
| HTTP 403: Forbidden	| User with authorization token does not have a partnerId set that has rights to access the specified node. |
| HTTP 422: Input validation failed	| Illegal field or illegal search keyword. Only valid fields are accountId, locationId, name, and email. The only illegal search keyword is “null”. |
| HTTP 404: Not Found	| Location not found. |
| HTTP  500: Internal server error.	| Internal server error. |