# Update Plume Customer AccountID to reflect ISP CRM Account ID changes - API

The AccountID field, which is part of the customer object is auto-filled with a UUID (universally unique identifier) as a result of the creation step detailed in the previous step.

The primary purpose of the AccountID is to establish a relationship between an existing ISP’s customer database and the plume customer database. Notably, the Plume Cloud enforces that the combination of partnerId and accountId is unique such that an ISP cannot create a duplicate Plume Cloud customer account for a single ISP customer account.

The following API Endpoint is used to update the AccountID using the customerID which was returned in the customer creation step.

## Validation:
- Admin authorization token.
- CustomerID in the URL path is a valid existing customer
- AccountId is unique within the Plume Cloud for accounts with the corresponding partnerId value

### Request

#### PATCH

    Authorization: #Auth Token from login step in Appendix - admin user
    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}

    Content-Type: application/JSON
    {
        "accountId":"string" # Account ID in the ISP CRM system
    }

### Successful Response

#### HTTP 200

    {
        "id": "string", # Plume Customer ID which will be used to identify the customer in Plume API calls
        "accountId": "string", # Account ID field for the customer. Default filled with an UUID
        "anonymous": , # Plume System Flag for SSO
        "autoProvisioned": , # Plume System Flag for SSO and auto provisioned accounts
        "name": "string", # Customer Name
        "systemUser": , # Plume System Flag
        "createdAt": "string", # UTC Timestamp the customer was created
        "_version": "string", # Plume System use only
        "email": "string" # Customer Email address
    }

## HTTP Error Codes and Reasons:

| Code | Response |
| ---- | -------- |
| HTTP 401: Authorization required. | Authorization Header has failed the security check, due to being missing, or expired or the User does not have the appropriate security context to execute this API. or CustomerId may not exist or be known to this user's security. |
| HTTP  500: Internal server error. | Internal server error |