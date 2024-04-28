# PATCH

### URI

/Customers/{id}/locations/{locationId}/securityConfiguration

### Description

Patch Security Configurations for location (preferredIntelligence, etc)

## Parameters

- Id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
- securityConfig
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success, updated.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: Invalid securityConfig.
- 500: Internal server error.

### Code

    {
        "_version": "1.0.0",
        "preferredIntelligence": "auto",
        "ipThreatIntelligence": "string",
        "wcHealthTelemetry": "auto",
        "wcHeroTelemetry": "auto",
        "ipThreatProtect": "auto",
        "dpiContentFiltering": "auto",
        "inlineDpi": "auto",
        "dosProtection": {},
        "ipThreatProvider": "auto",
        "updatedAt": "2024-04-28T00:27:13.825Z"
    }
