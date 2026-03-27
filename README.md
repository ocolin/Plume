# Plume

## Table of Contents

- [What is Plume?](#what-is-plume)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
    - [Environment Variables](#instantiating-with-environment-variables)
    - [Constructor Arguments](#instantiating-with-constructor-arguments)
    - [Additional Configuration](#additional-configuration)
- [Interpolation Concepts](#interpolation-concepts)
    - [Endpoint Variables](#endpoint-variables)
    - [HTTP Body Variables](#http-body-variables)
- [Response](#response)
- [Usage](#usage)
    - [GET](#get)
    - [POST](#post)
    - [PUT](#put)
    - [PATCH](#patch)
    - [DELETE](#delete)
    - [HEAD](#head)
    - [REQUEST](#request)
- [TODO](#todo)

## What is Plume?

This plugin is a lightweight PHP API client for Plume cloud services. 

Plume hosts a cloud based service for provisioning and managing home and office wifi networks. Plume provides an API to their cloud services that allow partners to manage their customers's wifi and networking needs remotely. 

This client was designed so that API calls can be quickly and easily be implemented into your tools for managing Plume services.

### Plume website

https://www.plume.com/platform/home

### Plume API explorer

Requires partner login:

https://gamma.noc.plume.com/explorer

### Ocolin/Plume github

https://github.com/ocolin/Plume

---
## Requirements

- PHP >= 8.2
- psr/http-message ^1.0|^2.0
- guzzlehttp/guzzle ^7.10
- ocolin/global-type ^2.0

---
## Installation

```
composer require ocolin/plume
```
---
## Configuration

There are two ways to configure the Plume client. One is using environment variables and the other is using the constructor.

### Instantiating with environment variables

The following environment variables are used:

|Name| Description                               |
|----|-------------------------------------------|
|PLUME_AUTH_URL| Url to Plume's authentication service.    |
|PLUME_AUTH_HASH| Partner token for authentication service. |
|PLUME_PARTNER_ID| Your assigned Plume Partner ID            |
|PLUME_GROUP_ID| Your assigned Plume Group ID              |
|PLUME_API_URL| URL to the Plume cloud API server         |

There is an [.env.example](.env.example) file included to use as a template for your projects.

#### Example:

```php
// Setting manually for demonstration
$_ENV['PLUME_AUTH_URL']   = 'https://url.to.authserver.test';
$_ENV['PLUME_AUTH_HASH']  = 'MyAuthenticationTokenHashHere';
$_ENV['PLUME_PARTNER_ID'] = 'myPartnerIdHere';
$_ENV['PLUME_GROUP_ID']   = 'myGroupIdHere';
$_ENV['PLUME_API_URL']    = 'https://url.to.apiserver.test';
$plume = new Ocolin\Plume\Plume();
```

### Instantiating With Constructor Arguments

If you don't use environment variables, you can specify your credentials in the constructor through the use of a Config class.

#### Example:

```php
$config = new Ocolin\Plume\Config(
       api_url: 'https://url.to.authserver.test',
      auth_url: 'https://url.to.apiserver.test',
     auth_hash: 'MyAuthenticationTokenHashHere',
    partner_id: 'myPartnerIdHere',
      group_id: 'myGroupIdHere'
);

$plume = new Ocolin\Plume\Plume( config: $config );
```

### Additional configuration.

In addition to the Config class, there are a few other options for configuration.

- $options - Guzzle HTTP options. Good place to set timeouts, disable SSL verification, etc.
- $throwOnError - This sets Plume to throw an error when recieving an error status from the Plume cloud. This is off by default.


#### Example

```php
$plume = new Ocolin\Plume\Plume(
    options: [ 'timeout' => 30, 'verify' => false ]
    throwOnError: true
);
```
---
## Response

All methods return an `Ocolin\Plume\Response` object with the following properties:

| Property       | Type   | Description                        |
|----------------|--------|------------------------------------|
| status         | int    | HTTP status code                   |
| status_message | string | HTTP status message                |
| headers        | array  | HTTP response headers              |
| body           | mixed  | Decoded JSON response body         |

### Example
```php
$plume    = new Ocolin\Plume\Plume();
$response = $plume->get(
    endpoint: '/customers/{id}',
       query: [ 'id' => 'theClientsId' ]
);

echo $response->status;          // 200
echo $response->status_message;  // OK
echo $response->body->name;      // Customer name
```
---
## Interpolation Concepts

Some variables in the Plume client can be automatically replaced. Here are some examples.

### Endpoint variables

Many of the plume endpoints have variables in them, such as ```/customer/{id}```. These can be replaced automatically by any values in the query argument where the element key matches the variable in the endpoint.

Additionally, and groupId or partnerId variables in an endpoint will be automatically replaced with your config settings unless you opt to set them yourself. This saved you from having to populate those settings on endpoints that use them.

### HTTP Body variables

Inside your body data, the groupId and partnerID values can be auto populated if you include them as blank properties in your body.

```php
Example:
$body = [ 'groupId' => '', 'partnerId' => '' ];
```
---
## Usage

The Plume client comes with a function for each HTTP request method as well as a request function that let's you specify an HTTP method. 

Argument descriptions:

| name     | Description                                            | type          | default |
|----------|--------------------------------------------------------|---------------|---------|
| endpoint | The API endpoint found in Plume API Explorer.          | string        | None    |
| method   | HTTP method to use.                                    | string        | GET     |
| query    | HTTP query parameters and path parameters              | array\|object | []      |
| body     | HTTP body. JSON or www-form                            | array\|object|[]|
| formData | Use www-form instead of JSON. Needed by some endpoints | boolean       | false   |


### GET

```php
$plume  = new Ocolin\Plume\Plume();
$plume->get(
    endpoint: '/customers/{id}',
      query: [ 'id' => 'theClientsId' ] 
);
```

### POST

```php
$plume  = new Ocolin\Plume\Plume();
$plume->post(
    endpoint: '/customers/',
        body: [ 
        'name' => 'My Name',
        'accountId' => 'Account Id' 
    ] 
);
```

### PUT

```php
$plume  = new Ocolin\Plume\Plume();
$plume->put(
    endpoint: '/customers/{id}',
       query: [ 'id' => 'myCustomerId' ],
        body: [ 
             'name' => 'My Name',
        'accountId' => 'Account Id' 
    ] 
);
```

### PATCH

```php
$plume  = new Ocolin\Plume\Plume();
$plume->patch(
    endpoint: '/customers/{id}',
       query: [ 'id' => 'myCustomerId' ],
        body: [ 
             'name' => 'My Name',
        'accountId' => 'Account Id' 
    ] 
);
```

### DELETE

```php
$plume  = new Ocolin\Plume\Plume();
$plume->delete(
    endpoint: '/Customers/{id}',
       query: [ 'id' => 'theClientsId' ] 
);
```

### HEAD

```php
$plume  = new Ocolin\Plume\Plume();
$plume->head(
    endpoint: '/Customers/{id}/Locations/{locationId}',
       query: [ 
            'id'         => 'theClientsId',
            'locationId' => 'theLocationId'
        ] 
);
```

### REQUEST

General all-purpose API request function.

```php
$plume  = new Ocolin\Plume\Plume();
$plume->request(
    endpoint: '/customers/{id}',
      method: 'PATCH',
       query: [ 'id' => 'theClientsId' ],
        body: [ 
             'name' => 'My Name',
        'accountId' => 'Account Id' 
        ],
    formData: true
);
```
## TODO

- Some more rigorous unit testing and integration testing can be done.