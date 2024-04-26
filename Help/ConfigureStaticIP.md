# Configuring Static IP - API

The following details the sequence of the API calls that a CSP needs to make in order to set static IP addresses via API.

## Provisioning best practices

CSP must know the customer id, location id, static IP address (IPv4), network mask, Gateway, primary DNS, and secondary DNS.

## Validations:

- Admin authorization token or user authorization token
- CustomerID in the URL must be a customer within the administrative scope of the user token provided for Authorization
- LocationID must exist and must be within the administrative scope of the user token provided in Header Authorization

## Request (Method: PUT):

    https://{{URL-Provided-by-Plume}}/api/Customers/{{Customer-ID}}/locations/{{Location-
    ID}}/wanConfiguration
    {
        "enabled": "true",
        "ip": "192.168.12.250",
        "subnet": "255.255.255.0",
        "gateway": "192.168.12.1",
        "primaryDns": "8.8.8.8",
        "secondaryDns": "8.8.4.4"
    }

### Note:

"ip", "subnet", "gateway", "primaryDns" and "secondaryDns" are unique to every request. The above output is a randomized value (test data) for this example.


## Frontline:

To set values in Frontline, navigate to API Explorer and search for wanConfiguration from here; enter the JSON string appropriate for the desired configuration modification; for this, use case StaticIPv4.

## Response:

    {
        "id": "6418e71b6agdf9100ad90478",
        "pppoe":
        {
            "enabled": null,
            "username": null,
            "password": ""
        },
            "uplink":
        {
            "enabled": null,
            "bridgeName": null,
            "hardwarePort": null,
            "vlan": null, "qos": null
        },
            "staticIPv4":
        {
            "enabled": "true",
            "ip": "192.168.12.250",
            "subnet": "255.255.255.0",
            "gateway": "192.168.12.1",
            "primaryDns": "8.8.8.8",
            "secondaryDns": "8.8.4.4"
        },
        "updatedAt": "2023-03-27T14:41:58.312Z",
        "locationId": "6418c49cevb87a500afb2d95"
    }

## Note:

"id", "locationId" Are unique to every request. The above output is a randomized value for this example.

## HTTP Codes and reasons:

| Code | Response |
| ---- | -------- |
| 200:	| Success, updated.
| 400:	| Required fields are missing.
| 401:	| Authorization required or customer id not found.
| 404:	| Location id, does not exist.
| 422:	| Required fields are not valid.
| 500:	| nternal server error