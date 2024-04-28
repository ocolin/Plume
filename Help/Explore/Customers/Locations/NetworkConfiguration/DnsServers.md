# GET

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dnsServers

### Description

Get the current DNS IP addresses and settings for a Location ID.

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

- 200: Success, current DNS server settings returned.
- 401: Authorization required or customer id not found.
- 404: NetworkConfiguration or DNS server settings does not exist.
- 500: Internal server error.

### Code

    {
        "primaryDns": "string",
        "enabled": true,
        "secondaryDns": "string"
    }

------------

# PUT

### URI

/Customers/{id}/locations/{locationId}/networkConfiguration/dnsServers

### Description

Update the DNS IPv4 server addresses for a Location ID.

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
- primaryDns
  - string($JSON)
  - formData
- secondaryDns
  - string($JSON)
  - formData

## Responses

### Statuses

- 200: Success, new DNS Servers saved.
- 401: Authorization required or customer id not found.
- 422: primaryDns or secondaryDns DNS Servers value is empty.
- 500: Internal server error.

### Code

    {
        "primaryDns": "string",
        "enabled": true,
        "secondaryDns": "string"
    }
