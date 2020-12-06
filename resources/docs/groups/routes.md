# Routes


## Add a point to route.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/routes/add-point" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/routes/add-point',
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
    "http://localhost/api/routes/add-point"
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


<div id="execution-results-POSTapi-routes-add-point" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-routes-add-point"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-routes-add-point"></code></pre>
</div>
<div id="execution-error-POSTapi-routes-add-point" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-routes-add-point"></code></pre>
</div>
<form id="form-POSTapi-routes-add-point" data-method="POST" data-path="api/routes/add-point" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-routes-add-point', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-routes-add-point" onclick="tryItOut('POSTapi-routes-add-point');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-routes-add-point" onclick="cancelTryOut('POSTapi-routes-add-point');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-routes-add-point" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/routes/add-point</code></b>
</p>
<p>
<label id="auth-POSTapi-routes-add-point" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="POSTapi-routes-add-point" data-component="header"></label>
</p>
</form>


## Delete a route point from route.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/routes/delete-point" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/routes/delete-point',
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
    "http://localhost/api/routes/delete-point"
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


<div id="execution-results-DELETEapi-routes-delete-point" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-routes-delete-point"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-routes-delete-point"></code></pre>
</div>
<div id="execution-error-DELETEapi-routes-delete-point" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-routes-delete-point"></code></pre>
</div>
<form id="form-DELETEapi-routes-delete-point" data-method="DELETE" data-path="api/routes/delete-point" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-routes-delete-point', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-routes-delete-point" onclick="tryItOut('DELETEapi-routes-delete-point');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-routes-delete-point" onclick="cancelTryOut('DELETEapi-routes-delete-point');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-routes-delete-point" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/routes/delete-point</code></b>
</p>
<p>
<label id="auth-DELETEapi-routes-delete-point" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="DELETEapi-routes-delete-point" data-component="header"></label>
</p>
</form>


## Display all routes.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/routes" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/routes',
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
    "http://localhost/api/routes"
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


<div id="execution-results-GETapi-routes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-routes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-routes"></code></pre>
</div>
<div id="execution-error-GETapi-routes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-routes"></code></pre>
</div>
<form id="form-GETapi-routes" data-method="GET" data-path="api/routes" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-routes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-routes" onclick="tryItOut('GETapi-routes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-routes" onclick="cancelTryOut('GETapi-routes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-routes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/routes</code></b>
</p>
<p>
<label id="auth-GETapi-routes" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="GETapi-routes" data-component="header"></label>
</p>
</form>


## Display the specified route.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/routes/quis" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/routes/quis',
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
    "http://localhost/api/routes/quis"
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


<div id="execution-results-GETapi-routes--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-routes--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-routes--id-"></code></pre>
</div>
<div id="execution-error-GETapi-routes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-routes--id-"></code></pre>
</div>
<form id="form-GETapi-routes--id-" data-method="GET" data-path="api/routes/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-routes--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-routes--id-" onclick="tryItOut('GETapi-routes--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-routes--id-" onclick="cancelTryOut('GETapi-routes--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-routes--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/routes/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-routes--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="GETapi-routes--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-routes--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified route.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://localhost/api/routes/nam" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/routes/nam',
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
    "http://localhost/api/routes/nam"
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


<div id="execution-results-PUTapi-routes--route-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-routes--route-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-routes--route-"></code></pre>
</div>
<div id="execution-error-PUTapi-routes--route-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-routes--route-"></code></pre>
</div>
<form id="form-PUTapi-routes--route-" data-method="PUT" data-path="api/routes/{route}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-routes--route-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-routes--route-" onclick="tryItOut('PUTapi-routes--route-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-routes--route-" onclick="cancelTryOut('PUTapi-routes--route-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-routes--route-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/routes/{route}</code></b>
</p>
<p>
<label id="auth-PUTapi-routes--route-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="PUTapi-routes--route-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>route</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="route" data-endpoint="PUTapi-routes--route-" data-component="url" required  hidden>
<br>
</p>
</form>


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/routes" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/routes',
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
    "http://localhost/api/routes"
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


<div id="execution-results-POSTapi-routes" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-routes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-routes"></code></pre>
</div>
<div id="execution-error-POSTapi-routes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-routes"></code></pre>
</div>
<form id="form-POSTapi-routes" data-method="POST" data-path="api/routes" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-routes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-routes" onclick="tryItOut('POSTapi-routes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-routes" onclick="cancelTryOut('POSTapi-routes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-routes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/routes</code></b>
</p>
<p>
<label id="auth-POSTapi-routes" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="POSTapi-routes" data-component="header"></label>
</p>
</form>


## Remove the specified route.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/routes/iste" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/routes/iste',
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
    "http://localhost/api/routes/iste"
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


<div id="execution-results-DELETEapi-routes--route-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-routes--route-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-routes--route-"></code></pre>
</div>
<div id="execution-error-DELETEapi-routes--route-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-routes--route-"></code></pre>
</div>
<form id="form-DELETEapi-routes--route-" data-method="DELETE" data-path="api/routes/{route}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-routes--route-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-routes--route-" onclick="tryItOut('DELETEapi-routes--route-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-routes--route-" onclick="cancelTryOut('DELETEapi-routes--route-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-routes--route-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/routes/{route}</code></b>
</p>
<p>
<label id="auth-DELETEapi-routes--route-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="DELETEapi-routes--route-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>route</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="route" data-endpoint="DELETEapi-routes--route-" data-component="url" required  hidden>
<br>
</p>
</form>



