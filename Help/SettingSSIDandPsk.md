# Setting a SSID and PSK via API

Service Set Identifier (SSID) is a sequence of characters uniquely naming a wireless local area network (WLAN). An SSID is sometimes referred to as a "network name." This name allows stations to connect to the desired network when multiple independent networks operate in the same physical area.

If the customer opts to only use Plume Extenders and does not use the ISP Gateway, this step is required. For Plume Extenders paired with an ISP Gateway, the SSID configuration will be automatically provisioned from the configuration running on the ISP Gateway thus this step may be skipped. To get network services up at a customer location a Wifi Network must be created in the Plume Cloud. Customers utilizing Plume Extenders can configure the WiFi network from the Plume App which calls the API detailed below. Alternatively, a service technician may also call this API on behalf of the customer using a service portal.

An SSID (Service Set Identifier) and an Encryption Key must be selected, configured, and used by the customer when connecting their devices to the network. The Wifi Network may be configured via the following RESTful API call to the Plume Cloud with an Authentication token, customer ID, and Location ID.

## Validations:
- Admin authorization token or user authorization token
- Customer ID in the URL must be a customer within administrative scope of user token provided for Authorization
- Location ID must exist and must be within the administrative scope of user token provided in Header Authorization
- SSID and encryptionKey fields must be specified
- Encryption key must be greater or equal to 8 characters
- A Wifi Network is not yet created for the network


### Request:

#### POST

    Authorization: #Auth Token from login step in Appendix - admin or customer
    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}/locations/{{Location-ID}}/wifiNetwork

    Content-Type: application/JSON
    {
        "encryptionKey": "12345678",
        "ssid": "TestSSID",
        "WpaMode": "psk-mixed (WPA+WPA2) || sae-mixed (WPA2+WPA3) || psk2 (WPA2 only) || sae (WPA3 only)"
    }

- "encryptionKey": SSID Encryption Key which is used as the passcode for devices to connect
- "ssid": SSID name configuration for the WiFi Network.
- "WpaMode": WPA mode to be supported by SSID.

### Response:

#### HTTP 200

    {
        "wifiNetwork": {
            "encryptionKey": "string",
            "ssid": "string",
            "devicesVisibleToGuests": [..object omitted..],
            "createdAt": "string",
            "_version": "string",
            "id": "string",
            "locationId": "string",
            "keys": [..object omitted..],
            "accessZones": [..object omitted..],  
            "encrypted": ,
            "encryptedAt": "string"
        }
    }

- "encryptionKey":  SSID encryption key configured
- "ssid": SSID name configured
- "devicesVisibleToGuests": Plume HomePass Configuration
- "createdAt": UTC Timestamp the WiFi SSID was created
- "_version": Plume System use only
- "id": "string", # Unique identifier for the WiFi Configuration
- "locationId": "string", # Location ID where the WiFi configuration is applied
- "keys": [..object omitted..], # Plume HomePass Configuration
- "accessZones": [..object omitted..],  # Plume HomePass Configuration
- "encrypted": , # Flag indicating if SSID is configured to use an encryptionKey
- "encryptedAt": "string" # Timestamp indicating when the SSID was configured with a security key