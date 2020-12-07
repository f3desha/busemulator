# Buses


## Assign driver to bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/buses/assign-driver?driverId=17&busId=20" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/buses/assign-driver',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'driverId'=> '17',
            'busId'=> '20',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses/assign-driver"
);

let params = {
    "driverId": "17",
    "busId": "20",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Basic {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (201, success):

```json
{
    "id": 1,
    "model": "Mercedes"
}
```
> Example response (404, not found):

```json
{
    "msg": "Bus not found"
}
```
> Example response (404, not found):

```json
{
    "msg": "User is not a Driver"
}
```
> Example response (404, not found):

```json
{
    "msg": "Driver not found"
}
```
> Example response (404, not found):

```json
{
    "msg": "Bus already assigned to this driver"
}
```
<div id="execution-results-POSTapi-buses-assign-driver" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-buses-assign-driver"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-buses-assign-driver"></code></pre>
</div>
<div id="execution-error-POSTapi-buses-assign-driver" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-buses-assign-driver"></code></pre>
</div>
<form id="form-POSTapi-buses-assign-driver" data-method="POST" data-path="api/buses/assign-driver" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-buses-assign-driver', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-buses-assign-driver" onclick="tryItOut('POSTapi-buses-assign-driver');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-buses-assign-driver" onclick="cancelTryOut('POSTapi-buses-assign-driver');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-buses-assign-driver" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/buses/assign-driver</code></b>
</p>
<p>
<label id="auth-POSTapi-buses-assign-driver" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="POSTapi-buses-assign-driver" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>driverId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="driverId" data-endpoint="POSTapi-buses-assign-driver" data-component="query" required  hidden>
<br>
Id of Driver user</p>
<p>
<b><code>busId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="busId" data-endpoint="POSTapi-buses-assign-driver" data-component="query" required  hidden>
<br>
Id of bus to assign the driver</p>
</form>


## Remove driver from bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/buses/delete-driver?busId=13" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/buses/delete-driver',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'busId'=> '13',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses/delete-driver"
);

let params = {
    "busId": "13",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Basic {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (204, success):

```json
<Empty response>
```
> Example response (404, not found):

```json
{
    "msg": "Bus not found"
}
```
> Example response (404, not found):

```json
{
    "msg": "Bus has no driver assigned"
}
```
<div id="execution-results-DELETEapi-buses-delete-driver" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-buses-delete-driver"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-buses-delete-driver"></code></pre>
</div>
<div id="execution-error-DELETEapi-buses-delete-driver" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-buses-delete-driver"></code></pre>
</div>
<form id="form-DELETEapi-buses-delete-driver" data-method="DELETE" data-path="api/buses/delete-driver" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-buses-delete-driver', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-buses-delete-driver" onclick="tryItOut('DELETEapi-buses-delete-driver');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-buses-delete-driver" onclick="cancelTryOut('DELETEapi-buses-delete-driver');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-buses-delete-driver" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/buses/delete-driver</code></b>
</p>
<p>
<label id="auth-DELETEapi-buses-delete-driver" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="DELETEapi-buses-delete-driver" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>busId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="busId" data-endpoint="DELETEapi-buses-delete-driver" data-component="query" required  hidden>
<br>
Id of bus to remove the driver from</p>
</form>


## Assign route to bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/buses/assign-route?routeId=1&busId=11" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/buses/assign-route',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'routeId'=> '1',
            'busId'=> '11',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses/assign-route"
);

let params = {
    "routeId": "1",
    "busId": "11",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Basic {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (201, success):

```json
{
    "id": 1,
    "model": "Volvo"
}
```
> Example response (404, not found):

```json
{
    "msg": "Bus not found"
}
```
> Example response (404, not found):

```json
{
    "msg": "Route not found"
}
```
> Example response (404, not found):

```json
{
    "msg": "Route already assigned to this bus"
}
```
<div id="execution-results-POSTapi-buses-assign-route" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-buses-assign-route"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-buses-assign-route"></code></pre>
</div>
<div id="execution-error-POSTapi-buses-assign-route" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-buses-assign-route"></code></pre>
</div>
<form id="form-POSTapi-buses-assign-route" data-method="POST" data-path="api/buses/assign-route" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-buses-assign-route', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-buses-assign-route" onclick="tryItOut('POSTapi-buses-assign-route');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-buses-assign-route" onclick="cancelTryOut('POSTapi-buses-assign-route');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-buses-assign-route" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/buses/assign-route</code></b>
</p>
<p>
<label id="auth-POSTapi-buses-assign-route" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="POSTapi-buses-assign-route" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>routeId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="routeId" data-endpoint="POSTapi-buses-assign-route" data-component="query" required  hidden>
<br>
Id of Route to assign to bus</p>
<p>
<b><code>busId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="busId" data-endpoint="POSTapi-buses-assign-route" data-component="query" required  hidden>
<br>
Id of bus to assign the driver</p>
</form>


## Remove route from bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/buses/delete-route" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/buses/delete-route',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses/delete-route"
);

let headers = {
    "Authorization": "Basic {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (204, success):

```json
<Empty response>
```
> Example response (404, not found):

```json
{
    "msg": "Bus not found"
}
```
> Example response (404, not found):

```json
{
    "msg": "Bus has no route assigned"
}
```
<div id="execution-results-DELETEapi-buses-delete-route" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-buses-delete-route"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-buses-delete-route"></code></pre>
</div>
<div id="execution-error-DELETEapi-buses-delete-route" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-buses-delete-route"></code></pre>
</div>
<form id="form-DELETEapi-buses-delete-route" data-method="DELETE" data-path="api/buses/delete-route" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-buses-delete-route', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-buses-delete-route" onclick="tryItOut('DELETEapi-buses-delete-route');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-buses-delete-route" onclick="cancelTryOut('DELETEapi-buses-delete-route');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-buses-delete-route" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/buses/delete-route</code></b>
</p>
<p>
<label id="auth-DELETEapi-buses-delete-route" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="DELETEapi-buses-delete-route" data-component="header"></label>
</p>
</form>


## Display all buses.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/buses" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/buses',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses"
);

let headers = {
    "Authorization": "Basic {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200, success):

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "model": "Mercedes"
        }
    ],
    "first_page_url": "http:\/\/homestead.test\/api\/buses?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/homestead.test\/api\/buses?page=1",
    "next_page_url": null,
    "path": "http:\/\/homestead.test\/api\/buses",
    "per_page": 20,
    "prev_page_url": null,
    "to": 1,
    "total": 1
}
```
<div id="execution-results-GETapi-buses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-buses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-buses"></code></pre>
</div>
<div id="execution-error-GETapi-buses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-buses"></code></pre>
</div>
<form id="form-GETapi-buses" data-method="GET" data-path="api/buses" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-buses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-buses" onclick="tryItOut('GETapi-buses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-buses" onclick="cancelTryOut('GETapi-buses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-buses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/buses</code></b>
</p>
<p>
<label id="auth-GETapi-buses" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="GETapi-buses" data-component="header"></label>
</p>
</form>


## Display the specified bus.

<small class="badge badge-darkred">requires authentication</small>

This endpoint allows you to look the details of a bus.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/buses/7" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/buses/7',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses/7"
);

let headers = {
    "Authorization": "Basic {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200, success):

```json
{
    "id": 1,
    "model": "Mercedes",
    "driver_id": null,
    "route_id": null
}
```
> Example response (404, not found):

```json
{
    "msg": "Not found."
}
```
<div id="execution-results-GETapi-buses--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-buses--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-buses--id-"></code></pre>
</div>
<div id="execution-error-GETapi-buses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-buses--id-"></code></pre>
</div>
<form id="form-GETapi-buses--id-" data-method="GET" data-path="api/buses/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-buses--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-buses--id-" onclick="tryItOut('GETapi-buses--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-buses--id-" onclick="cancelTryOut('GETapi-buses--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-buses--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/buses/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-buses--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="GETapi-buses--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-buses--id-" data-component="url" required  hidden>
<br>
The ID of the Bus.</p>
</form>


## Update the specified bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://localhost/api/buses/5?name=laboriosam" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/buses/5',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'name'=> 'laboriosam',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses/5"
);

let params = {
    "name": "laboriosam",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Basic {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


> Example response (200, success):

```json
true
```
> Example response (404, not found):

```json
{
    "msg": "Not found."
}
```
<div id="execution-results-PUTapi-buses--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-buses--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-buses--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-buses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-buses--id-"></code></pre>
</div>
<form id="form-PUTapi-buses--id-" data-method="PUT" data-path="api/buses/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-buses--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-buses--id-" onclick="tryItOut('PUTapi-buses--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-buses--id-" onclick="cancelTryOut('PUTapi-buses--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-buses--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/buses/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-buses--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="PUTapi-buses--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-buses--id-" data-component="url" required  hidden>
<br>
The ID of the Bus.</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-buses--id-" data-component="query" required  hidden>
<br>
Name of the Bus.</p>
</form>


## Store a newly created bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/buses?model=numquam" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/buses',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'model'=> 'numquam',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses"
);

let params = {
    "model": "numquam",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Basic {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (201, success):

```json
{
    "model": "Volvo 2",
    "id": 2
}
```
> Example response (400, validation error):

```json
{
    "name": "The name may not be greater than 10 characters."
}
```
<div id="execution-results-POSTapi-buses" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-buses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-buses"></code></pre>
</div>
<div id="execution-error-POSTapi-buses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-buses"></code></pre>
</div>
<form id="form-POSTapi-buses" data-method="POST" data-path="api/buses" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-buses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-buses" onclick="tryItOut('POSTapi-buses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-buses" onclick="cancelTryOut('POSTapi-buses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-buses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/buses</code></b>
</p>
<p>
<label id="auth-POSTapi-buses" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="POSTapi-buses" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>model</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="model" data-endpoint="POSTapi-buses" data-component="query" required  hidden>
<br>
Make of the bus.</p>
</form>


## Remove the specified bus from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/buses/17" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/buses/17',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses/17"
);

let headers = {
    "Authorization": "Basic {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (204, success):

```json
<Empty response>
```
> Example response (404, not found):

```json
{
    "msg": "Not found"
}
```
<div id="execution-results-DELETEapi-buses--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-buses--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-buses--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-buses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-buses--id-"></code></pre>
</div>
<form id="form-DELETEapi-buses--id-" data-method="DELETE" data-path="api/buses/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-buses--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-buses--id-" onclick="tryItOut('DELETEapi-buses--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-buses--id-" onclick="cancelTryOut('DELETEapi-buses--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-buses--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/buses/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-buses--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="DELETEapi-buses--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-buses--id-" data-component="url" required  hidden>
<br>
The ID of the bus.</p>
</form>


## Drive a bus.

<small class="badge badge-darkred">requires authentication</small>

Few things to drive a bus: register user, promote it to Driver, create Route and assign it to Bus and that's it - Driver can drive a Bus!

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/buses/14/drive" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/buses/14/drive',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses/14/drive"
);

let headers = {
    "Authorization": "Basic {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


> Example response (200, success):

```json
{
    "current_route_point_name": "Koroleva",
    "current_route_point_number": "23",
    "passengers_out": 113,
    "passengers_in": 63,
    "passengers_in_the_bus": 64,
    "max_passengers_in_the_bus": 300,
    "description": "You arrived to the route point Koroleva 23. Passengers left: 113. Passengers entered: 63. Passengers riding in the bus: 64"
}
```
> Example response (404, not found):

```json
{
    "msg": "Bus not found"
}
```
> Example response (404, not found):

```json
{
    "msg": "This bus has no route assigned to id"
}
```
> Example response (404, not found):

```json
{
    "msg": "User not found"
}
```
> Example response (404, not found):

```json
{
    "msg": "Your role is not a Driver"
}
```
> Example response (404, not found):

```json
{
    "msg": "You are not a driver of this bus"
}
```
<div id="execution-results-PUTapi-buses--id--drive" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-buses--id--drive"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-buses--id--drive"></code></pre>
</div>
<div id="execution-error-PUTapi-buses--id--drive" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-buses--id--drive"></code></pre>
</div>
<form id="form-PUTapi-buses--id--drive" data-method="PUT" data-path="api/buses/{id}/drive" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-buses--id--drive', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-buses--id--drive" onclick="tryItOut('PUTapi-buses--id--drive');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-buses--id--drive" onclick="cancelTryOut('PUTapi-buses--id--drive');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-buses--id--drive" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/buses/{id}/drive</code></b>
</p>
<p>
<label id="auth-PUTapi-buses--id--drive" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="PUTapi-buses--id--drive" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-buses--id--drive" data-component="url" required  hidden>
<br>
The ID of the Bus.</p>
</form>



