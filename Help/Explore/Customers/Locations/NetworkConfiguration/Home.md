# GET

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/home

### Description

Get the current overall settings and status of the Advanced Networking settings for a Location ID.

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

- 200: Success, current networkConfiguration settings returned.
- 401: Authorization required or customer id not found.
- 500: Internal server error.

### Code

    {
        "networkMode": "string",
        "dnsServers": {
            "primaryDns": "string",
            "enabled": true,
            "secondaryDns": "string"
        },
        "upnp": {
            "enabled": false,
            "mode": "string",
            "modeRealized": true
        },
        "igmpSnooping": {
            "mode": "auto"
        }
    }