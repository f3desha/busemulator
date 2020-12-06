# Buses


## Assign driver to bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/buses/assign-driver" \
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
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses/assign-driver"
);

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
</form>


## Remove driver from bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/buses/delete-driver" \
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
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses/delete-driver"
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
</form>


## Assign route to bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/buses/assign-route" \
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
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/buses/assign-route"
);

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
    -G "http://localhost/api/buses/11" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/buses/11',
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
    "http://localhost/api/buses/11"
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


<div id="execution-results-GETapi-buses--bus-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-buses--bus-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-buses--bus-"></code></pre>
</div>
<div id="execution-error-GETapi-buses--bus-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-buses--bus-"></code></pre>
</div>
<form id="form-GETapi-buses--bus-" data-method="GET" data-path="api/buses/{bus}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-buses--bus-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-buses--bus-" onclick="tryItOut('GETapi-buses--bus-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-buses--bus-" onclick="cancelTryOut('GETapi-buses--bus-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-buses--bus-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/buses/{bus}</code></b>
</p>
<p>
<label id="auth-GETapi-buses--bus-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="GETapi-buses--bus-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>bus</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="bus" data-endpoint="GETapi-buses--bus-" data-component="url" required  hidden>
<br>
The ID of the Bus.</p>
</form>


## Update the specified bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://localhost/api/buses/dolorem" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/buses/dolorem',
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
    "http://localhost/api/buses/dolorem"
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


<div id="execution-results-PUTapi-buses--bus-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-buses--bus-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-buses--bus-"></code></pre>
</div>
<div id="execution-error-PUTapi-buses--bus-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-buses--bus-"></code></pre>
</div>
<form id="form-PUTapi-buses--bus-" data-method="PUT" data-path="api/buses/{bus}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-buses--bus-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-buses--bus-" onclick="tryItOut('PUTapi-buses--bus-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-buses--bus-" onclick="cancelTryOut('PUTapi-buses--bus-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-buses--bus-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/buses/{bus}</code></b>
</p>
<p>
<label id="auth-PUTapi-buses--bus-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="PUTapi-buses--bus-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>bus</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="bus" data-endpoint="PUTapi-buses--bus-" data-component="url" required  hidden>
<br>
</p>
</form>


## Store a newly created bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/buses" \
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
    method: "POST",
    headers,
}).then(response => response.json());
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
</form>


## Remove the specified bus from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/buses/sint" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/buses/sint',
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
    "http://localhost/api/buses/sint"
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


<div id="execution-results-DELETEapi-buses--bus-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-buses--bus-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-buses--bus-"></code></pre>
</div>
<div id="execution-error-DELETEapi-buses--bus-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-buses--bus-"></code></pre>
</div>
<form id="form-DELETEapi-buses--bus-" data-method="DELETE" data-path="api/buses/{bus}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-buses--bus-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-buses--bus-" onclick="tryItOut('DELETEapi-buses--bus-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-buses--bus-" onclick="cancelTryOut('DELETEapi-buses--bus-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-buses--bus-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/buses/{bus}</code></b>
</p>
<p>
<label id="auth-DELETEapi-buses--bus-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="DELETEapi-buses--bus-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>bus</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="bus" data-endpoint="DELETEapi-buses--bus-" data-component="url" required  hidden>
<br>
</p>
</form>


## Drive a bus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/buses/quas/drive" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/buses/quas/drive',
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
    "http://localhost/api/buses/quas/drive"
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


<div id="execution-results-GETapi-buses--bus--drive" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-buses--bus--drive"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-buses--bus--drive"></code></pre>
</div>
<div id="execution-error-GETapi-buses--bus--drive" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-buses--bus--drive"></code></pre>
</div>
<form id="form-GETapi-buses--bus--drive" data-method="GET" data-path="api/buses/{bus}/drive" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-buses--bus--drive', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-buses--bus--drive" onclick="tryItOut('GETapi-buses--bus--drive');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-buses--bus--drive" onclick="cancelTryOut('GETapi-buses--bus--drive');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-buses--bus--drive" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/buses/{bus}/drive</code></b>
</p>
<p>
<label id="auth-GETapi-buses--bus--drive" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="GETapi-buses--bus--drive" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>bus</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="bus" data-endpoint="GETapi-buses--bus--drive" data-component="url" required  hidden>
<br>
</p>
</form>



