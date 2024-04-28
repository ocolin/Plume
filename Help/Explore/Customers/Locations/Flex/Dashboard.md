# GET

### URI

/Customers/{id}/locations/{locationId}/flex/dashboard

### Description

Daily/Weekly/Monthly device usage summary report based on location

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
- macs
  - string($JSON)
  - query
  - mac list of all devices in the location

## Responses

### Statuses



### Code

    {}