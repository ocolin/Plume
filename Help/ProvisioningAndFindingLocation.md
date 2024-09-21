# Provision and finding a customer location via API

This article contains instructions on how to:

- Provision Customer in Plume Cloud via API
- Obtain Customer ID and LocationID from Device Serial Number
- Obtain Customer ID from ServiceID
- Obtain Oauth 2.0 JWT Bearer Access Token

## Provision Customer in Plume Cloud via API

To first get started, a unique customer must be registered with the Plume Cloud. Basic information such as their Name, Email, and password must be registered and verified. This can be done via a RESTful API call to the Plume Cloud with an authentication token.

The Plume PartnerId is a required field. Work with Plume in order to obtain a PartnerId to be used for the integration. A location’s default profile value is “auto” which means it is configured for HomePass. A profile value of “smallbusiness” indicates that the location will be configured for WorkPass.

## Provisioning Best Practices

- The real email from the end customer should be used because it is the method to log into the Plume mobile app. If the email is not known, a unique temporary valid email may be used and updated via Frontline by a technician when the installation is completed (e.g. email user@example.org)
- PartnerId is provided by Plume. Unique partnerId will be provided per country/ISP per Plume Cloud
- Name is to be set to the customer name in the CRM system
- The PartnerId provided by Plume is used by Plume to add an account to a corresponding Plume Cloud Group


## Validations:

- Admin authorization token
- Name and email are not mandatory fields but are needed to behave like the old registerWithGroups method. If email is not present, a random mail will be used that will look like: null+${randomString}@plume.com. The name must not contain the special characters of “”.
- Customer email must not already exist in the Plume Cloud
- Passwords set by customers must be at least 8 characters long and have at least two character classes:
- Uppercase letters (A-Z)
- Lowercase letters (a-z)
- Numbers (0-9)
- Non-alphanumeric (!@#$%^&*()_+-=[]{}|')
- accountID must be unique per Plume PartnerId, a mandatory field, and if not known, can be a UUID. The accountId must not contain the special characters of “”.
- partnerId must be supplied
- profile (optional) and defaults to “auto”
- onboardingCheckpoint (optional). Legal values are: “PodsAdded” or “OnboardingComplete”.

### Request:

#### POST

    https://{{URL-Provided-by-Plume}}/api/Customers/register
    Authorization: #Auth Token from login step in Appendix  - admin user
    
    Content-Type: application/JSON
    {
        "email": "string", # The real email from the end customer should be used
        because it is the method to log into the Plume mobile app. If the email
        is not known, a unique temporary valid email may be used and updated via
        Frontline by a technician when the install is completed (eg. email user@example.org)
        
        "name": "string", # Customer name. “First Last”
        
        "accountId": "TEST123456" # Account ID field for the customer that relates
        the customer to a CRM
        
        "partnerId": "string" #PartnerID in the plume system which is used for
        inventory control, App customizations, and analytics. Any "partnerId
        string" that doesn't match with the partnerID already declared in the
        Plume system will result in an error message.
        
        "profile": “string”, # Location profile, defaults to “auto”,
        
        "acceptLanguage": “string” # Language used when creating a Customer 
        and when displaying error messages. Default is “en-US”

        “onboardingCheckpoint”: “string” # is the last passed onboarding step
        by the customer. Legal value is either 'PodsAdded' or 'OnboardingComplete'
    }

### Response:

## HTTP 200
    
    {
        "id": "string", # Plume Customer ID which will be used to identify the customer in Plume API calls
        "accountId": "string", # Account ID field for the customer.
        "anonymous": , # Plume System Flag for SSO
        "autoProvisioned": , # Plume System Flag for SSO and auto provisioned accounts
        "name": "string", # Customer name
        "systemUser": , # Plume System Flag
        "createdAt": "string", # UTC Timestamp the customer was created
        "_version": "string", # Plume System use only
        "email": "string", # Customer Email address
        "locationId": "string", # Location ID created for customer
        "partnerId": “string” #PartnerID in the plume system which is used for inventory control,
        App customizations, and analytics 
    }

## HTTP Error Codes and Reasons:

| Code | Response |
| ---- | -------- |
| 400: Required fields are missing.	| Please check the input to confirm all required fields are present. |
| 401: Authorization required.	| The Authentication Header has failed the security check, due to being missing, expired or the User does not have the appropriate security context to execute this API for the requested partnerId or group. |
| 403: PartnerId is not allowed to provision new Plume accounts.	| PartnerId is locked for new account creation. |
| 404: PartnerId is not found	| PartnerId does not exist on Plume Cloud. |
| 409: Duplicate key	| The AccountId and PartnerId are not unique. |
| 422: Input validation failed.	| Validation error on fields supplied e.g. email address invalid format or already exists, missing partnerId in authorization token, invalid acceptLanguage |
| 500: Internal server error.	| Internal server error. |


## Obtain the Location ID for the Customer via API

The Location ID is an important element to track for the customer as it is required for claiming Plume Extender(s) and provisioning network service. A customer must have at least one Location Object. The first Location, named “Home”, is created upon the creation of the customer object. The “Home” location may be used as the 1st location where Plume Extender(s) and a Wifi Network can be claimed and configured. The following API Endpoint is used to collect the Location(s) associated with a particular customer ID.

## Validations:

- Admin authorization token or user authorization token
- CustomerID in the URL must be a customer within the administrative scope of the user token provided for Authorization


### Request:

#### GET

    Authorization: #Auth Token from login step in Appendix - admin or customer
    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}/locations
    
    Content-Type: application/JSON

### Response:
#### HTTP 200
    
    {
        
        "id": "string", # Location ID associated with customer which is used for following Plume API calls.
        "name": "string", # Plume Location Name
        "createdAt": "string", # Timestamp the location was created in the Plume System
        "customerId": "string", # Plume Customer ID that is associated with the location.
    }

## HTTP Error Codes and reasons:

| Code | Response |
| ---- | -------- |
| 401: Authorization required. | Authorization Header has failed the security check, due to being missing, expired or the User does not have the appropriate security context to execute this API. or CustomerId may not exist or be known to this User's security. |
| 404: Not found.	| Location not found |
| 500: Internal server error.	| Internal server error. |



## Obtain Customer ID and LocationID from Device Serial Number

For active customers provisioned with the Adaptive WiFiTM product the customer ID may need to be looked up in order to process and service the account. If the node is claimed to an account on the corresponding Plume Cloud then the following API endpoint will return both the Customer ID and Location ID. If the node is not claimed on the corresponding Plume Cloud and the API client has access to the node information via their Partner ID then the Inventory node information will be returned (minus Customer ID and Location ID).


### Request:

#### GET
    
    Authorization: #Auth Token from login step in Appendix
    https://{{URL-Provided-by-Plume}}/api/Partners/nodes/{--Device--Serial-Number--}}

### Response:
#### HTTP 200
    
    {
        "customerId": "string", # Customer ID associated to the device
        "locationId": "string", # Location ID associated to the device
        "serialNumber": "string",  # Unique serial number of the device
        "packId": "string", # Unique Pack ID for the set of Plume Extenders for Plume retail product
        "partnerId": "string" # Partner ID associated to the device
    }

## HTTP Error Codes and Reasons:

| Code | Response                                                                                                                                                                 |
| ---- |--------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 401: Authorization required.	| The Authorization Header has failed the security check, due to being missing, or expired or the User does not have the appropriate security context to execute this API. |
| 403: Not found or no access.	| No right to access the node.                                                                                                                                             |
| 404: Not Found.	| Node or Location not found.                                                                                                                                              |
| 500: Internal server error.	| Internal server error.                                                                                                                                                   |


## Obtain Customer ID from ServiceID

For active customers provisioned with the Adaptive WiFiTM product, the customer ID and Location ID may need to be looked up in order to process and service the account. Each subscribed service for a customer would be attached to a different location ID. The following API will complete a lookup for the customer and location ID for a given service ID. Keep in mind that the service ID must be assigned as part of the provisioning stage in order for this lookup to provide the customer/location result.

### Request:

#### GET

    Authorization: #Auth Token from login step in Appendix
    https://{{URL-Provided-by-Plume}}/api/Partners/locations/{{--serviceID--from--CRM--}}

### Response:

#### HTTP 200
    
    {
        "id": , # Location ID associated with customer which is used for following Plume API calls.
        “name”: , # Plume Location Name
        "serviceId": , # ISP service ID to associate to Customer and Service in CRM
        "customer": {
            id: , # Plume Customer ID that is associated with the location.
            name:  , # Customer name
            accountId:  # ISP account ID associated to the customer via the CRM system
        }
    }


## HTTP Error Codes and reasons:

| Code | Response |
| ---- | -------- |
|   401: Authorization required. | The Authorization Header has failed the security check, due to being missing, or expired or the User does not have the appropriate security context to execute this API. |
| 403: Forbidden | User with an authorization token does not have a PartnerId set that has rights to access the specified location ID. |
| 404: Not found. | Location not found |
| 500: Internal server error. | Internal server error.|


## Obtain Oauth 2.0 JWT Bearer Access Token

The Oauth 2.0 JWT bearer access token is Plume’s prescribed approach for machine-to-machine (i.e., cloud-to-cloud) integrations and is intended to replace the original “Obtain Authorization Token” approach. An ISP should request access to the Plume Cloud via the Plume Portal. The Plume Portal will help the ISP self-service the onboarding and utilization of this approach. Specifically, the Plume Portal will provide the following details for which the ISP’s engineers should securely manage with their cloud:

- "role": "partnerIdAdmin",
- "tokenTtlMinutes": 10,
- The token TTL is configured via the Plume Portal to be between 5 minutes and 1440 minutes (1 day) and is included with each session token as “expires_in” (i.e., “expires in” X seconds)
- "scope": "partnerId:{{Plume PartnerId}} role:partnerIdAdmin",
- "authorizationHeader": "Basic {{bearer token}}",
- The authorization header is an Oauth 2.0 client + secret base64 encoded
- "authorizationTokenUrl": "https://external.sso.plume.com/oauth2/{{unique Plume Cloud ID}}/v1/token"

First, make an authentication request against Okta APIs using the Client Credentials OAuth 2.0 flow. Okta documentation for the following API call can be found at https://developer.okta.com/docs/reference/api/oidc/#token

    // Generate a new JWT bearer access token using client credentials
    curl -X "POST" "{{authorizationTokenUrl}}" \
         -H 'Cache-Control: no-cache' \
         -H 'Content-Type: application/x-www-form-urlencoded; charset=utf-8' \
         -H 'Authorization: {{authorizationHeader}}' \
         --data-urlencode "grant_type=client_credentials" \
         --data-urlencode "scope=partnerId:[Plume Partner Id] role:partnerIdAdmin"

    // returns HTTP 200
    {
        "token_type": "Bearer",
        "expires_in": 600,
        "access_token": "[ACCESS_TOKEN]",
        "scope": "partnerId:[Plume Partner Id] role:partnerIdAdmin"
    }
    
    // Subsequent HTTP requests to Plume Cloud APIs
    curl "https://URL-Provided-by-Plume/api/*”
     -H 'Authorization: Bearer [ACCESS_TOKEN]'

## HTTP Error Codes and Reasons:

| Code                        | Response |
|-----------------------------| -------- |
| 400: Bad request	           | PartnerId hasn't been correctly configured for machine-to-machine. Or, the values for scope, authorizationHeader, and/or authorizationHeaderUrl are incorrect.|
| 401: Authorization failed	  | Several possibilities: failed Okta verification, rejected by our API software’s application security, etc|
| 403: Forbidden	             | The API call is allowed but not for the specific resource (e.g., the Customer account is owned by a different partnerId)|
| 500: Internal server error  | 	Internal server error.|