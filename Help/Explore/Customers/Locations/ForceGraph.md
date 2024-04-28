# GET

### URI

/Customers/{id}/locations/{locationId}/forceGraph

### Description

HTML or JSON (vertices[] + edges[]) used to display a Network Topology.

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
- ip
  - string
  - query
  - deprecated and optional IP address of client displaying the topology
- mac
  - string
  - query
  - optional mac address of client displaying the topology
- authKey
  - string
  - query
  - PubNub authKey
- subscribeKey
  - string
  - query
  - PubNub subscribeKey
- view
  - string
  - query
  - view template override (e.g., iguana)
- allSSIDs
  - boolean
  - query
- showPartnerComponent
  - boolean
  - query

## Responses

### Statuses

The HTML and JSON to initialize and dynamically display and update a Topology.

The JSON can also be used to get a network's list of nodes + devices (a.k.a. vertices) and links (a.k.a., edges).

- 200: Success, HTML or JSON returned depending on "Accept" HTTP header.
- 404: customer id or location id does not exist and is not known to Plume
- 500: Internal server error.

### Code

    "string"