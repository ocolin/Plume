# Plume

A simple PHP client for accessing a Plume API server. It will cache your auth credentials so as to only request them when they expire and not on every API call. When initializing the client, it will check the status of it's auth credentials, and then request new ones only if needed. 

## Environment Variables

### Ways to set varaibles

There are 3 ways to provide the client with the server variables.

1. Feed them manually into constructor from calling library.
2. Use environment variables that are initialized in the calling library.
3. Use local environment variables stored in a .env file in the root of this library.

The constructor has a boolean flag called "local." If set to true, envrionment variables will be loaded from a .env file in the root directory.

### Environment variable names

- PLUME_AUTH_URL - URL of Plume authentication server.
- PLUME_API_URL - URL of Plume cloud server.
- PLUME_AUTH_HASH - Hash used by auth server.
- PLUME_AUTH_SCOPE - Auth server scope.
- PLUME_PARTNER_ID - Your Plume partner ID.
- PLUME_GROUP_ID - Your Plume group ID.

### Sample

See example .env file at /.env.example

## Initializing Plume client

### Environment pre-set by calling library

```
$plume = new Ocolun\Plume\Plume();
```

### Environment vars in local .env file

```
$plume = new Ocolun\Plume\Plume( local: true );
```

### Manually supplying server variables

```
$plume = new Ocolun\Plume\Plume( 
       api_url: 'https://piranha-gamma.prod.us-west-2.aws.plumenet.io/api/',
      auth_url: 'https://external.sso.plume.com/oauth2/XYZ/v1/token',
    partner_id: 'XYZ',
      group_id: 'XYZ',
     auth_hash: 'XYZ'
);
```

## Making API calls

### Arguments

#### Path

This is the URI path used when making an HTTP call to the server.

#### Query

These are parameters that are either in the query part of the URI, or variables {variable} in the URI path. And variables in the URI path surrounded by curly braces will be replaced by any raviable with the same name in the query array.

#### Body

This part gets sent as the HTTP request body. Only used for calls that write data to the server. It can be formatted as an array or query. It will eventually be encoded into a JSON string before sending to server.

#### Auto-fill

Anywhere the partnerId or GroupId are used, whether in the path, query, or body, they will be automatically filled in using the credentials provided when initializing the client. 

No variable is needed for either of these in the path. However if either of them is needed in the HTTP body being sent to server, you will need to add the variable as an element without a value. This is the only way for the client to know if such a field should exist in the body.

### Call

This is a generic function that let's you build any type of call. It also returns not just the body of the server output, but also header information as well.

```
$output = $plume->call(
      path: '/customers/{id}',
    method: 'GET',
     query: [ 'id' => 'XZY' ]
);

/** OUTPUT
stdClass Object
(
    [status] => 200
    [status_message] => OK
    [headers] => [...]
    [body] => stdClass Object( ... )
)
*/
```

### Get

Get an object from the server.

```
$output = $plume->get(
    path: '/customers/{id}',
    query: [ 'id' => 'XZY' ]
);

/** OUTPUT
stdClass Object
(
    [id] => 66ef34687f1c07000b200925
    [accountId] => 12345
    [anonymous] => 
    [autoProvisioned] => 
    [name] => Test Account
    [locked] => 
    [partnerId] => XYZ
    [acceptLanguage] => en-US
    [source] => Customer.registerWithGroups
    [createdAt] => 2024-09-21T21:02:32.777Z
    [provisioningSsoAuditTrail] => 
    [email] => devnull@test.com
    [locationId] => XYZ
)
*/
```

### Post

Create a new object on server

```
$output = $plume->post(
    path: '/Customers/registerWithGroups',
    body: [
        'accountId' => '12345',
            'email' => 'devnull@test.com',
             'name' => 'Test Account'
    ]
);

/** OUTPUT
stdClass Object
(
    [id] => 66ef34687f1c07000b200925
    [accountId] => 12345
    [anonymous] => 
    [autoProvisioned] => 
    [name] => Test Account
    [locked] => 
    [partnerId] => XYZ
    [acceptLanguage] => en-US
    [source] => Customer.registerWithGroups
    [createdAt] => 2024-09-21T21:02:32.777Z
    [provisioningSsoAuditTrail] => 
    [email] => devnull@test.com
    [locationId] => XYZ
)
*/
```

### Patch

Used to update an existing object.

```
$output = $plume->patch(
    path: '/customers/{id}'
    query: [ 'id' => 'XYZ' ],
    body: [ 'name' => 'New Name' ]
);
```

### Put

Functions identical to Patch for most calls. 

### Delete

Remove an object from the server.

```
$output = $plume->delete(
    path: '/customers/{id}'
    query: [ 'id' => 'XYZ' ],
);

/** OUTPUT
stdClass Object
(
    [count] => 1
)

*/
```