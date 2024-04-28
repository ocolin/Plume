# PATCH

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/multicast

### Description

Update the multicast settings for a Location ID.

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
- multicast
  - body


    {
        "igmpSnooping": {
            "mode": "auto"
        },
        "igmpProxy": {
            "mode": "auto"
        },
        "mldProxy": {
            "mode": "auto"
        },
        "multicastToUnicast": {
            "mode": "auto"
        }
    }

## Responses

### Statuses

Supported modes for individual settings are:

- igmpSnooping: enable/disable/auto
- igmpProxy: igmpv1/igmpv2/igmpv3/disable/auto
- mldProxy: mldv1/mldv2/disable/disable/auto
- multicastToUnicast: enable/disable/auto


- 200: Success, new multicast settings saved.
- 401: Authorization required or customer id not found.
- 422: Input validation error, see output for details.
- 500: Internal server error.

### Code

    {
        "igmpSnooping": {
            "mode": "auto"
        },
        "igmpProxy": {
            "mode": "auto"
        },
        "mldProxy": {
            "mode": "auto"
        },
        "multicastToUnicast": {
            "mode": "auto"
        }
    }
