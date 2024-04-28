# POST

### URI

/Customers/{id}/locations/{locationId}/secondaryNetworks/captivePortals/companyInfo/search

### Description

Get the companyInfo for the given url (domain).

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
- url
  - string
  - formData
- urlType
  - string
  - formData
  - only 'domain' currently supported

## Responses

### Statuses

- 200: Success, company info returned.
- 401: Authorization required or customer id not found.
- 404: location id or url does not exist.
- 500: Internal server error.

### Code

    {}