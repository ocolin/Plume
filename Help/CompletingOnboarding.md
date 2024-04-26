# Completing Onboarding - API

Completing the onboard will trigger an email to the customer and also timestamp when this process has been completed.

This step occurs automatically during the final stage of onboarding using the Plume Mobile App.

A technician may alternatively complete this action on behalf of the customer using this API from a service portal.

The onboard status may be monitored from the location object using get Location API.

## Supported Checkpoints:

- OnboardingComplete = This presents the user with the home screen and no onboarding.
- PodsAdded = This gives the user the final onboarding screens to plug the device in.

### Request

#### POST
    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}/locations/{{Location-ID}}/onboardingCheckpoint
    Authorization: #Auth Token from login - admin user
    
    Content-Type: application/JSON
    {
        "checkpoint": "OnboardingComplete"
    }

### Successful Response

#### HTTP 200

    {
        "checkpoint": {
            "value": "string", # Indicates the status of onboarding
            "timestamp": “string” # UTC timestamp when Onboard was completed
        }
    }




## HTTP Error Codes and Reasons:

| Code | Response |
| ---- | -------- |
| HTTP 401: Authorization required. |	Authorization Header has failed the security check, due to being missing, expired or the User does not have the appropriate security context to execute this API on this group.|
| HTTP 404: Not Found.	| Locationid does not exist. |
| HTTP 422: Input validation failed. |	Checkpoint value must be defined. |
| HTTP  500: Internal server error.	 | Failure on the server-side. | 
