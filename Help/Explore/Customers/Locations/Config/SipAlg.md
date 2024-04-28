# PATCH

### URI

/Customers/{id}/locations/{locationId}/config/sipAlg

### Description

Updates a sipAlg config. sipAlg is an application within many routers. It inspects any VoIP traffic to prevent problems caused by firewalls and if necessary modifies the VoIP packets.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
    - Location ID
- mode
    - string
    - formData
    - string enum: [ AUTO, ENABLE, DISABLE ]

## Responses

### Statuses

- 202: Success, accepted and forwarded the data.
- 400: Required fields missing.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 422: Invalid data.
- 500: Internal server error.


--------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/config/sipAlg

### Description

Resets a sipAlg config. sipAlg is an application within many routers. It inspects any VoIP traffic to prevent problems caused by firewalls and if necessary modifies the VoIP packets.

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - path
    - Customer id
- locationId
    - REQUIRED
    - string
    - path
    - Location ID

## Responses

### Statuses

- 202: Success, reset.
- 401: Authorization required or customer id not found.
- 404: Location id, does not exist.
- 500: Internal server error.

