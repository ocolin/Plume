# PUT

### URI

/Customers/{id}/locations/{locationId}/bleMode

### Description

Enable or Disable BLE beaconing for all Pods at a location for Pod location services (e.g. for Pods Naming).

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
- mode
  - string
  - formData
  - on/off/wps/connectable

## Responses

### Statuses

With the mode of "on", all connected pods at this location will have their bluetooth beacon turned on for locating purposes. Each BLE beacon contains the serial number of the transmitting Pod. A setting of "off", turns off the BLE beaconing for all Pods. With mode set to "wps", all connected pods at this location will have their bluetooth beacon turned on for WPS related proximity measurements.

- 200: Success, your new info looks good.
- 401: Authorization required or customer id not found.
- 404: location id does not exist.
- 422: bleMode must be defined.
- 500: Internal server error.

### Code

    {
        "mode": "string"
    }