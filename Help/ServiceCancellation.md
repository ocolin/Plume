# RMA and Service Cancellation - API

This article describes the process for service cancellation or an RMA. These use cases below cover the API calls needed in order to terminate the service entirely, suspend the account, or just unclaim an Extender for RMA purposes.

- Single Plume Extender/Device RMA
- Service Cancellation
- Full Account Service Cancellation
- Account Suspension/Reduce Functionality


## Single Plume Extender/Device RMA

In order to get a Plume Extender ready to be sent in for replacement via RMA it must be unclaimed from the customer account. This step occurs when the customer removes a Plume Extender from the Plume Mobile App. A technician may alternatively complete this action on behalf of the customer using this API from a service portal. The following API call achieves this process.

License Note: This API call reduces the number of Plume licenses consumed by the ISP

## Validations

- Admin authorization token or user authorization token.
- Customer ID in the URL must be a customer within the administrative scope of the user token provided for Authorization.
- Location ID must exist and must be within the administrative scope of the user token provided in Header Authorization.

## Request
### DELETE

    Authorization: #Auth Token from login step in Appendix
    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}/locations/{{Location-ID}}/nodes/{{Serial-Number-of-Device}}
    Content-Type: application/JSON

## Response

### HTTP 204

## HTTP Error Codes and reasons

| HTTP Status Code                       | Response |
|----------------------------------------| -------- |
| HTTP 400: Required fields are missing. | Node already Unclaimed. |
| HTTP 401: Authorization required.      | Authorization Header has failed the security check, due to being missing, expired or the User does not have the appropriate security context to execute this API. or CustomerId may not exist or be known to this User's security.|
| 404: Not Found.                        | LocationId not found, nodeId missing from the request or the location has zero claimed nodes |
| HTTP 500: Internal server error.       | Internal server error. |


## Service Cancellation

In order to process service cancellation of a customer location the Plume Extenders and configuration should be achieved from the customer account.

The following API call archives the customer location which puts the WiFi configuration beyond use and unclaims all of the hardware associated with the customer. If the customer account was auto-provisioned and the location that was deleted was the last location for that customer then it will be left as is with zero locations. However, if the customer account was not auto provisioned then after the last location is deleted the Plume Cloud will create a new empty location for that customer because our mobile apps expect all customers to have at least one location.

License Note: This API call reduces the number of Plume licenses consumed by the ISP

## Validations:  

- Admin authorization token or user authorization token
- CustomerID in the URL must be a customer within the administrative scope of the user token provided for Authorization
- Location ID must exist and must be within the administrative scope of the user token provided in Header Authorization

## Request

### DELETE

    Authorization: #Auth Token from login step in Appendix
    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}/locations/{{Location-ID}}

## Successful Response

### HTTP 204


## HTTP Error Codes and Reasons:

| HTTP Status Code                       | Reason |
|----------------------------------------|--------|
| HTTP 401: Authorization required. | Authorization Header has failed the security check, due to being missing, or expired or the User does not have the appropriate security context to execute this API. or CustomerId may not exist or be known to this user's security. |
| 404: Not Found. | LocationId, does not exist.                                                                                                                                                                                                          |
| HTTP 409: Location already archived. | Location already archived.                                                                                                                                                                                                           |
| HTTP 500: Internal server error. | Internal server error.                                                                                                                                                                                                               |


## Full Account Service Cancellation

In order to process the full-service cancellation of the account the customer account should be deleted from the Plume Database. The following API call deletes the customer and archives all locations which puts all WiFi configurations beyond use and unclaims all of the hardware associated with the customer. In addition, this API triggers a Plume Cloud GDPR delete workflow.

License Note: This API call reduces the number of Plume licenses consumed by the ISP

## Validations:

- Admin authorization token or user authorization token.
- Customer ID in the URL must be a customer within the administrative scope of the user token provided for Authorization.

## Request:

### DELETE

    Authorization: #Auth Token from login step in Appendix
    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}

## Response:

### HTTP 200

    {count :1}

## HTTP Error Codes and Reasons:

| HTTP Status Code                       | Reason |
|----------------------------------------|--------|
| HTTP 401: Authorization required. | Authorization Header has failed the security check, due to being missing, or expired or the User does not have the appropriate security context to execute this API. or CustomerId may not exist or be known to this user's security. |
| 404: Not Found. | CustomerId, does not exist. |
| HTTP 500: Internal server error. | Internal server error. |


## Account Suspension / Reduced functionality

Occasionally there may be a need to put a customer’s location in a suspended state or reduce functionality (tiered service), for example in the case of non-payment the ISP may wish to not fully cancel the service but either limit the functionality or stop WiFi functionality altogether.

This is normally used as a temporary situation until either re-enablement or full cancellation is performed.

License Note: This API call may not affect the number of Plume licenses consumed by the ISP.

## Validations:

- Admin authorization token or user authorization token.
- CustomerID in the URL must be a customer within the administrative scope of the user token provided for Authorization,
- Status should be one of the following:
  - noService (prevents WiFi on access points)
  - basicService (removes some of the adaptive WiFi features and security features)
  - fullService (reverts back to full working service)


## Request:

### PATCH

    Authorization: #Auth Token from login step in Appendix
    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}/locations/{{location-ID}}/serviceLevel

    Content-Type: application/JSON
    {
        "status" : "noService" # level of service to set
    }

## Response:

    {
        "status": "noService",
        "createdAt": "2019-08-08T20:13:10.595Z",
        "updatedAt": "2019-08-08T20:13:10.595Z"
    }

## HTTP Error Codes and Reasons:

| HTTP Status Code                       | Reason  |
|----------------------------------------|---------|
| HTTP 401: Authorization required.	| Authorization Header has failed the security check, due to being missing, or expired or the User does not have the appropriate security context to execute this API.orCustomerId may not exist or be known to this user's security. |
| 404: Not Found. | 	customerId or locationId does not exist and is not known to Plume                                                                                                                                                                 |
| 422: Input validation failed.	| Invalid ‘status’ value  HTTP 500: Internal server error. Internal server error.                                                                                                                                                    |