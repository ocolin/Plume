# GET

### URI

/partners/locations/{keyword}

### Description

Queries Locations with serviceId or locationId within the caller's partnerId.

## Parameters

- keyword
  - REQUIRED
  - string
  - path
  - could be locationId, or serviceId.

## Responses

### Statuses

- 200: Success, full object returned.
- 401: Authorization required.
- 404: LocationId not found.
- 500: Internal server error.

### Code

    {}