# GET

### URI

/Customers/{id}/locations/{locationId}/mapConfig

### Description

Get MAP-E/MAP-T config for the location.

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID

## Responses

### Statuses

- 200: Success.
- 401: Authorization required.
- 404: Location does not exist.
- 422: Multiple validation errors.
- 429: Too many requests.
- 500: Internal server error.

### Code

    {}

-----------

# PUT

### URI

/Customers/{id}/locations/{locationId}/mapConfig

### Description

Update MAP-E/MAP-T config for the location.

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID
- mode
  - REQUIRED
  - string
  - formData
  - Any of "AUTO", "ENABLE", "DISABLE"
- mapType
  - REQUIRED
  - string
  - formData
  - Mechanism for Mapping of Address and Port. Any of "MAP_TYPE_E", "MAP_TYPE_T"
- mapRulesDhcp
  - boolean
  - formData
  - Provision MAP rules via DHCPv6
- mapRulesUrl
  - string
  - formData
  - Provision MAP rules from “v6plus” distribution server
- mapLegacyDraft
  - boolean
  - formData
  - Use MAP legacy RFC draft 03 to calculate MAP IPv6 address
- bmrIpv6Prefix
  - string
  - formData
  - Basic Mapping Rule IPv6 prefix
- bmrIpv4Prefix
  - string
  - formData
  - Basic Mapping Rule IPv4 prefix
- bmrEaLength
  - number($double)
  - formData
  - Basic Mapping Rule EA-bits length
- bmrPsidOffset
  - number($double)
  - formData
  - Basic Mapping Rule PSID offset
- dmr
  - string
  - formData
  - Default Mapping Rule
- otherConfig
  - string($JSON)
  - formData
  - Array of objects for additional configuration. Provide in format of [{ key: "something1", value: "something2" }]
- disableDhcp
  - boolean
  - formData
  - Disable DHCP Client on WAN side

## Responses

### Statuses

You must supply at least one of these optional parameter combinations:
{mapRulesDhcp} || {mapRulesUrl} || {bmrIpv6Prefix, bmrIpv4Prefix, bmrEaLength, bmrPsidOffset, dmr}

- 202: Success.
- 401: Authorization required.
- 404: Location does not exist.
- 422: Multiple validation errors.
- 429: Too many requests.
- 500: Internal server error.

### Code

    {}

----------

# PATCH

### URI

/Customers/{id}/locations/{locationId}/mapConfig

### Description

Update some of the MAP-E/MAP-T config for the location.

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID
- mode
    - REQUIRED
    - string
    - formData
    - Any of "AUTO", "ENABLE", "DISABLE"
- otherConfig
  - string($JSON)
  - formData
  - Array of objects for additional configuration. Provide in format of [{ key: "something1", value: "something2" }]

## Responses

### Statuses

- 202: Success.
- 401: Authorization required.
- 404: Location does not exist.
- 422: Multiple validation errors.
- 429: Too many requests.
- 500: Internal server error.

### Code

    {}

-----------

# DELETE

### URI

/Customers/{id}/locations/{locationId}/mapConfig

### Description

Delete the MAP-E/MAP-T config for the location. Does not change the mode.

## Parameters

- id
    - string($JSON)
    - path
    - Customer id
    - REQUIRED
- locationId
    - REQUIRED
    - string($JSON)
    - path
    - Location ID

## Responses

### Statuses

- 202: Success.
- 401: Authorization required.
- 404: Location does not exist.
- 422: Multiple validation errors.
- 429: Too many requests.
- 500: Internal server error.
