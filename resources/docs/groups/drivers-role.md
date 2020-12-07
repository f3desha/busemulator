# Drivers (role)


## Display all drivers.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/bus-drivers" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/bus-drivers',
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
    "http://localhost/api/bus-drivers"
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
[
    {
        "id": 2,
        "name": "Driver"
    }
]
```
> Example response (404, not found):

```json
[
    "Role not found"
]
```
<div id="execution-results-GETapi-bus-drivers" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-bus-drivers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bus-drivers"></code></pre>
</div>
<div id="execution-error-GETapi-bus-drivers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bus-drivers"></code></pre>
</div>
<form id="form-GETapi-bus-drivers" data-method="GET" data-path="api/bus-drivers" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-bus-drivers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-bus-drivers" onclick="tryItOut('GETapi-bus-drivers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-bus-drivers" onclick="cancelTryOut('GETapi-bus-drivers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-bus-drivers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/bus-drivers</code></b>
</p>
<p>
<label id="auth-GETapi-bus-drivers" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="GETapi-bus-drivers" data-component="header"></label>
</p>
</form>


## Display the specified driver.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/bus-drivers/9" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/bus-drivers/9',
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
    "http://localhost/api/bus-drivers/9"
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
    "id": 2,
    "name": "Driver"
}
```
> Example response (404, not found):

```json
[
    "User not found"
]
```
> Example response (404, not found):

```json
[
    "Role not found"
]
```
<div id="execution-results-GETapi-bus-drivers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-bus-drivers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bus-drivers--id-"></code></pre>
</div>
<div id="execution-error-GETapi-bus-drivers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bus-drivers--id-"></code></pre>
</div>
<form id="form-GETapi-bus-drivers--id-" data-method="GET" data-path="api/bus-drivers/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-bus-drivers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-bus-drivers--id-" onclick="tryItOut('GETapi-bus-drivers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-bus-drivers--id-" onclick="cancelTryOut('GETapi-bus-drivers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-bus-drivers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/bus-drivers/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-bus-drivers--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="GETapi-bus-drivers--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-bus-drivers--id-" data-component="url" required  hidden>
<br>
The ID of the user with Driver role.</p>
</form>


## Change users role to Driver.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://localhost/api/bus-drivers/8" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/bus-drivers/8',
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
    "http://localhost/api/bus-drivers/8"
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
    "id": 3,
    "name": "Regular"
}
```
> Example response (404, not found):

```json
[
    "Role not found"
]
```
<div id="execution-results-PUTapi-bus-drivers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-bus-drivers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-bus-drivers--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-bus-drivers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-bus-drivers--id-"></code></pre>
</div>
<form id="form-PUTapi-bus-drivers--id-" data-method="PUT" data-path="api/bus-drivers/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-bus-drivers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-bus-drivers--id-" onclick="tryItOut('PUTapi-bus-drivers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-bus-drivers--id-" onclick="cancelTryOut('PUTapi-bus-drivers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-bus-drivers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/bus-drivers/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-bus-drivers--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="PUTapi-bus-drivers--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-bus-drivers--id-" data-component="url" required  hidden>
<br>
The ID of the user with Driver role.</p>
</form>


## Remove Driver role from user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/bus-drivers/9" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/bus-drivers/9',
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
    "http://localhost/api/bus-drivers/9"
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
    "msg": "Not found."
}
```
<div id="execution-results-DELETEapi-bus-drivers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-bus-drivers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-bus-drivers--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-bus-drivers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-bus-drivers--id-"></code></pre>
</div>
<form id="form-DELETEapi-bus-drivers--id-" data-method="DELETE" data-path="api/bus-drivers/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-bus-drivers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-bus-drivers--id-" onclick="tryItOut('DELETEapi-bus-drivers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-bus-drivers--id-" onclick="cancelTryOut('DELETEapi-bus-drivers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-bus-drivers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/bus-drivers/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-bus-drivers--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="DELETEapi-bus-drivers--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-bus-drivers--id-" data-component="url" required  hidden>
<br>
The ID of the user with Driver role.</p>
</form>



