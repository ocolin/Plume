# Obtain CustomerID and LocationID from Serial Number - API

For active customers provisioned with the Plume product, the customerID may need to be looked up to process and service the account. If the node is claimed to an account on the corresponding Plume Cloud, the API endpoint will return both the CustomerID and LocationID.

If the node is not claimed on the corresponding Plume Cloud and the API client has access to the node information via their PartnerID, then the Inventory node information will be returned (minus CustomerID and LocationID).

## Request

#### GET

    Authorization: #Auth Token from login step in Appendix
    https://{{URL-Provided-by-Plume}}/api/Partners/nodes/{--Device--Serial-Number--}}

### Successful Response

#### HTTP 200

    {
        "customerId": "string", # Customer ID associated to the device
        "locationId": "string", # Location ID associated to the device
        "serialNumber": "string", # Unique serial number of the device
        "packId": "string", # Unique Pack ID for the set of Plume Extenders for Plume retail product
        "partnerId": "string" # Partner ID associated to the device
    }

## HTTP Error Codes and Reasons:
| Code | Response |
| ---- | -------- |
| HTTP 401: Login Failed. | Authorization Header has failed the security check, due to being missing, or expired. or The User does not have the appropriate security context to execute this API. |
| HTTP 403: Not found or No access | No right to access the node. |
| HTTP 404: Not found | Node or Location not found. |
| HTTP  500: Internal server error. | Internal Server error. |