# Route Points


## Display all Route Points.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/route-points" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/route-points',
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
    "http://localhost/api/route-points"
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


<div id="execution-results-GETapi-route-points" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-route-points"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-route-points"></code></pre>
</div>
<div id="execution-error-GETapi-route-points" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-route-points"></code></pre>
</div>
<form id="form-GETapi-route-points" data-method="GET" data-path="api/route-points" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-route-points', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-route-points" onclick="tryItOut('GETapi-route-points');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-route-points" onclick="cancelTryOut('GETapi-route-points');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-route-points" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/route-points</code></b>
</p>
<p>
<label id="auth-GETapi-route-points" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="GETapi-route-points" data-component="header"></label>
</p>
</form>


## Display the specified Route Point.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/route-points/voluptates" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/route-points/voluptates',
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
    "http://localhost/api/route-points/voluptates"
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


<div id="execution-results-GETapi-route-points--routePoint-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-route-points--routePoint-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-route-points--routePoint-"></code></pre>
</div>
<div id="execution-error-GETapi-route-points--routePoint-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-route-points--routePoint-"></code></pre>
</div>
<form id="form-GETapi-route-points--routePoint-" data-method="GET" data-path="api/route-points/{routePoint}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-route-points--routePoint-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-route-points--routePoint-" onclick="tryItOut('GETapi-route-points--routePoint-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-route-points--routePoint-" onclick="cancelTryOut('GETapi-route-points--routePoint-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-route-points--routePoint-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/route-points/{routePoint}</code></b>
</p>
<p>
<label id="auth-GETapi-route-points--routePoint-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="GETapi-route-points--routePoint-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>routePoint</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="routePoint" data-endpoint="GETapi-route-points--routePoint-" data-component="url" required  hidden>
<br>
</p>
</form>


## Store a newly created Route Point.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/route-points" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/route-points',
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
    "http://localhost/api/route-points"
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


<div id="execution-results-POSTapi-route-points" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-route-points"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-route-points"></code></pre>
</div>
<div id="execution-error-POSTapi-route-points" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-route-points"></code></pre>
</div>
<form id="form-POSTapi-route-points" data-method="POST" data-path="api/route-points" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-route-points', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-route-points" onclick="tryItOut('POSTapi-route-points');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-route-points" onclick="cancelTryOut('POSTapi-route-points');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-route-points" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/route-points</code></b>
</p>
<p>
<label id="auth-POSTapi-route-points" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="POSTapi-route-points" data-component="header"></label>
</p>
</form>


## Update the specified Route Point.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://localhost/api/route-points/tenetur" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/route-points/tenetur',
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
    "http://localhost/api/route-points/tenetur"
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


<div id="execution-results-PUTapi-route-points--routePoint-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-route-points--routePoint-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-route-points--routePoint-"></code></pre>
</div>
<div id="execution-error-PUTapi-route-points--routePoint-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-route-points--routePoint-"></code></pre>
</div>
<form id="form-PUTapi-route-points--routePoint-" data-method="PUT" data-path="api/route-points/{routePoint}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-route-points--routePoint-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-route-points--routePoint-" onclick="tryItOut('PUTapi-route-points--routePoint-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-route-points--routePoint-" onclick="cancelTryOut('PUTapi-route-points--routePoint-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-route-points--routePoint-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/route-points/{routePoint}</code></b>
</p>
<p>
<label id="auth-PUTapi-route-points--routePoint-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="PUTapi-route-points--routePoint-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>routePoint</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="routePoint" data-endpoint="PUTapi-route-points--routePoint-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified Route Point from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/route-points/dolores" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/route-points/dolores',
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
    "http://localhost/api/route-points/dolores"
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


<div id="execution-results-DELETEapi-route-points--routePoint-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-route-points--routePoint-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-route-points--routePoint-"></code></pre>
</div>
<div id="execution-error-DELETEapi-route-points--routePoint-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-route-points--routePoint-"></code></pre>
</div>
<form id="form-DELETEapi-route-points--routePoint-" data-method="DELETE" data-path="api/route-points/{routePoint}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-route-points--routePoint-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-route-points--routePoint-" onclick="tryItOut('DELETEapi-route-points--routePoint-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-route-points--routePoint-" onclick="cancelTryOut('DELETEapi-route-points--routePoint-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-route-points--routePoint-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/route-points/{routePoint}</code></b>
</p>
<p>
<label id="auth-DELETEapi-route-points--routePoint-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="DELETEapi-route-points--routePoint-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>routePoint</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="routePoint" data-endpoint="DELETEapi-route-points--routePoint-" data-component="url" required  hidden>
<br>
</p>
</form>



