# GET

/Customers/{id}/_migration

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - (path)
- refresh
    - Bool
    - (query)

## Responses

### Statuses

- 200 Request was successful

### Code

    {
        "migratedFrom": "string",
        "migratedTo": "string",
        "migratedAt": "2024-04-26T19:05:17.972Z",
        "migrationReason": "string",
        "id": "string"
    }

--------

# POST

/Customers/{id}/_migration

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - (path)
- data (body)


    {
        "migratedFrom": "string",
        "migratedTo": "string",
        "migratedAt": "2024-04-26T19:06:40.537Z",
        "migrationReason": "string",
        "id": "string"
    }

## Responses

### Statuses

- 200 Request was successful

### Code

    {
        "migratedFrom": "string",
        "migratedTo": "string",
        "migratedAt": "2024-04-26T19:07:21.140Z",
        "migrationReason": "string",
        "id": "string"
    }

-------

# PUT

/Customers/{id}/_migration

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - (path)
- data (body)


    {
        "migratedFrom": "string",
        "migratedTo": "string",
        "migratedAt": "2024-04-26T19:06:40.537Z",
        "migrationReason": "string",
        "id": "string"
    }


## Responses

### Statuses

- 200 Request was successful

### Code

    {
        "migratedFrom": "string",
        "migratedTo": "string",
        "migratedAt": "2024-04-26T19:09:16.800Z",
        "migrationReason": "string",
        "id": "string"
    }

--------

# DELETE

/Customers/{id}/_migration

## Parameters

- id
    - REQUIRED
    - string($JSON)
    - (path)

## Responses

### Statuses

- 204 Request was successful

### Code