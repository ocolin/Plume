# Set the ServiceId for Customer’s Location - API

## Set the ServiceId for the Customer’s Location
A customer account may have multiple locations, each location may have a custom serviceID to track multiple service contracts a single customer may have. This is an optional step if the ISP supports multiple locations and would like to mark the location with an ISP known value to distinguish the location (ServiceId is a free text string).

A location’s default profile value is auto which means it is configured for HomePass. A profile value of smallbusiness indicates that the location will be configured for WorkPass.


## Request

### PATCH
    Authorization: #Auth Token from login step in Appendix - admin user
    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}/locations/{{Location-ID}}
    
    Content-Type: application/JSON
    {
        "serviceId": “string” # Service ID link to ISP CRM
        "profile": “string” # Location profile
    }

## Successful Response

### HTTP 200

    {
        "id": "string", # Location ID associated with customer which is used for following Plume API calls.
        "name": "string", # Plume Location Name
        "serviceId": “string”, # Service ID link to ISP CRM
        "freezeTemplates": [..object omitted..], # Plume Device Freeze configuration
        "createdAt": "string", # Timestamp the location was created in the Plume System
        "customerId": "string", # Plume Customer ID that is associated with the location.
        "ispSpeedTestConfiguration": {..object omitted..}, # Plume ISP Speed Test configuration
        "bandSteering": {..object omitted..}, # Plume Band Steering configuration
        "clientSteering": {..object omitted..}, # Plume Client Steering configuration
        "monitorMode": {..object omitted..}, # ISP Gateway Operating mode for ISP Gateway only networks
        "backhaul": {..object omitted..}, # Plume System use for backhaul configuration
        "optimizations": {..object omitted..}, # Plume Optimizer configuration
}


## HTTP Errors Codes and Reasons:
| HTTP Status Code | Reason |
| ---------------- | ------ |
| HTTP 400: Required fields are missing. | Please check the input to confirm all required fields are present. (e.g. the serviceId) |
| HTTP 401: Authorization required. | Authorization Header has failed the security check, due to it being missing, or expired or the User does not have the appropriate security context to execute this API. or CustomerId may not exist or be known to this user's security. |
| HTTP 404: Not Found. | LocationId does not exist and is not known to Plume |
| HTTP 422: Input validation failed. | No input parameters are present or serviceId includes "" or "profile" not matching undefined, auto, or small business. |
| HTTP 500: Internal server error. | Failure on the server side. |

