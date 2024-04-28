# GET

### URI

/Customers/{id}/locations/{locationId}/capabilities

### Description

Get the non-base feature capabilities supported by a particular Location ID.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID

## Responses

### Statuses

The controller will implement logic to determine the non-base features supported by the Pods in the location ID. The feature capability is determined on the system level, and not per individual Pod.
The mobile apps or other WebUIs should only show the UI for a feature if the disabled value equals "false".

- 200: Success, current Capabilities returned.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 500: Internal server error.

### Code

    {
        "networkConfiguration": {
            "networkMode": {
                "disabled": true,
                "reason": "string"
            },
            "upnp": {
                "disabled": true,
                "reason": "string"
            },
            "igmpSnooping": {
                "disabled": true,
                "reason": "string"
            },
            "igmpProxy": {
                "disabled": true,
                "reason": "string"
            },
            "mldProxy": {
                "disabled": true,
                "reason": "string"
            },
            "multicastToUnicast": {
                "disabled": true,
                "reason": "string"
            },
            "dnsServers": {
                "disabled": true,
                "reason": "string"
            },
            "dhcpReservations": {
                "disabled": true,
                "reason": "string"
            },
            "portForward": {
                "disabled": true,
                "reason": "string"
            }
        },
        "security": {
            "dnsCategoryBlocking": {
                "disabled": true,
                "reason": "string"
            }
        },
        "ispSpeedTest": {
            "disabled": true,
            "reason": "string"
        },
        "deviceFreeze": {
            "disabled": true,
            "reason": "string"
        },
        "multiPasswordSSID": {
            "disabled": true,
            "reason": "string"
        },
        "wifiMotion": {
            "disabled": true,
            "reason": "string"
        },
        "_version": "1.0.0",
        "capabilitiesChangedAt": "2024-04-27T19:04:33.437Z",
        "createdAt": "2024-04-27T19:04:33.437Z"
    }