# Claim and Unclaim nodes- API

## Claim Gateway

After creating the Wifi Network, the next step is to claim the Gateway, which may be an ISP Gateway or a Plume pod. A technician may use this API call on a service portal.

Using Plume mobile App, the node may be claimed by the customer via:

- a QR scanner built into the Plume mobile App.
- entering a nodeId (usually serial number)
- If the node includes a BLE radio, the Plume mobile App will claim it via Bluetooth Low Energy (BLE) if the customer is logged in and the hardware is powered on.

- License Note: This API call increases the number of Plume licenses consumed by the ISP

## Additional nodes can be claimed:

- during the onboarding flow using the mobile app
- after onboarding using Add nodes button in the mobile app.
- using Frontline by a technician
- using API by a technician

## Validations

- Admin authorization token or user authorization token
- CustomerID in the URL must be a customer within the administrative scope of the user token provided for Authorization
- LocationID must exist and must be within the administrative scope of the user token provided in Header Authorization
- The serial number must be already provisioned and configured in the Plume Cloud inventory
- The serial number must not be already claimed at another customer location

## Request

The claim API call is the same for both Gateways and Extenders.

### POST

    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}/locations/{{Location-ID}}/nodes
    Authorization: #Auth Token from login step - admin user
    
    Content-Type: application/JSON
    {
        "serialNumber": "string"
        "nickname": "string" # Optional friendly name for node
    }


## Successful Response
### HTTP 200

    {
        "claimed": [
        {
            "serialNumber": "string", # Unique serial number of the device
            "id": "string", # ID of the device, in most cases this is the serial number
            "residentialGateway": , # True/False indicating if the device is an ISP Gateway
            "_version": "string", # Plume System use
            "customerId": "string", # Customer ID associated to the device
            "locationId": "string", # Location ID associated to the device
            "deployment": "string", # Plume System use
            "shardNumber": "string", # Plume System use
            "radioMac24": "string", # Base radio MAC address of the 2.4Ghz radio
            "radioMac50": "string", # Base radio MAC address of the 5Ghz radio
            "ethernetMac": "string", # Ethernet uplink MAC address
            "bluetoothMac": "string", # Base radio MAC address of the BLE radio
            "boxSerialNumber": "string", # Unique Serial number of the box of Plume Extenders the hardware was shipped in for plume retail product
            "packId": "string", # Unique Pack ID for the set of Plume Extenders for Plume retail product
            "updatedAt": "string", # Timestamp for when the device claim record was last changed
            "manufacturerFirmware": "string", # Firmware version running on the device when it was shipped for Plume retail product
            "createdAt": "string", # Timestamp the device record was created
            "purchaseOrderNumber": "string", # Plume retail product use
            "partNumber": "string", # Part number of hardware
            "shipDate": "string", # Shipped date used in Plume Retail product
            "macs": [...omitted…], # List of BSSIDs the Hardware may use for serving SSIDs
            "backhaulDhcpPoolIdx":  # Is a unique number for the backhaul used by the Node for MAC address selection
        }
        ]
    }

## HTTP Error Codes and Reasons:

| Code | Response |
| ---- | -------- |
| HTTP 200: No Content.	| Valid serial number but zero new claimed nodes for this location. I.e., this node is already claimed. |
| HTTP 401: Authorization required.	| Authorization Header failed the security check due to being missing or expired, or the user does not have the appropriate security context to execute this API on this group. |
| HTTP 404: Unable to find Node	| Unable to find Node with the serial number or location id. |
| HTTP 409: Already owned	| Another customer owns the node. |
| HTTP 422: Input validation failed.| 	Claiming request exceeded numPodsAuthorized (=leaf pods), accountId+partnerId not unique, and/or monitorMode=true. |
| HTTP 500: Internal server error. | Internal server error. Inventory service unreachable. |
| HTTP 503: Service unavailable	| Some error occurs after nodes are successfully claimed on location. |


## Unclaim nodes

To get a Plume Extender ready to be sent in for replacement via RMA, it must be unclaimed from the customer account and location.  This step occurs when the customer removes a Plume Extender from the Plume Mobile App or support removes the Extender using Frontline. A technician may alternatively complete this action on behalf of the customer using this API from a service portal. The following API call is used to achieve this process.

## Validations:

- Admin authorization token or user authorization token
- Customer ID in the URL must be a customer within administrative scope of user token provided for Authorization
- Location ID must exist and must be within the administrative scope of user token provided in Header Authorization

## Request:

### DELETE

    Authorization: #Auth Token from login step in Appendix
    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}/locations/{{Location-ID}}/nodes/{{Serial-Number-of-Device}}
    Content-Type: application/JSON

## Response:

### HTTP  204


## HTTP Error Codes and reasons:

| Code | Response |
| ---- | -------- |
| 400: Required fields are missing.	| Node already Unclaimed |
| 401: Authorization required. | Authorization Header has failed the security check, due to being missing, expired or the User does not have the appropriate security context to execute this API. or CustomerId may not exist or be known to this User's security. |
| 404: Not Found.	| LocationId not found, nodeId missing from request or location has zero claimed nodes  500: Internal server error.	Internal server error. |