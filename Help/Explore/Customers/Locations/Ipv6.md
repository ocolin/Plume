# GET

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


## Responses

### Statuses

- 200 Request was successful

### Code

    {}

---------

# PATCH

## Parameters

- id
  - REQUIRED
  - string($JSON)
  - (path)
  - Customer id
- locationId
  - REQUIRED
  - string
  - (path)
- mode
  - string
  - formData
- dns
  - string($JSON)
  - formData
- addressingConfig
  - string
  - formData

## Responses

### Statuses

- 200 Request was successful

### Code

    {}