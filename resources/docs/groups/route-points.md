# Route Points


## Display all Route Points.

<small class="badge badge-darkred">requires authentication</small>

Route Points is the points, from which Route is build.

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


> Example response (200, success):

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "street_name": "Svyatoslava Rihtera",
            "street_number": "148",
            "lat": "46.4560308",
            "lng": "30.6844385"
        },
        {
            "id": 2,
            "street_name": "Gastelo",
            "street_number": "55",
            "lat": "46.450927",
            "lng": "30.684999"
        },
        {
            "id": 3,
            "street_name": "Borisa Derevyanko",
            "street_number": "2",
            "lat": "46.442794",
            "lng": "30.704637"
        }
    ],
    "first_page_url": "http:\/\/homestead.test\/api\/route-points?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/homestead.test\/api\/route-points?page=1",
    "next_page_url": null,
    "path": "http:\/\/homestead.test\/api\/route-points",
    "per_page": 20,
    "prev_page_url": null,
    "to": 3,
    "total": 3
}
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
    -G "http://localhost/api/route-points/6" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/route-points/6',
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
    "http://localhost/api/route-points/6"
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
    "street_name": "Svyatoslava Rihtera",
    "street_number": "148",
    "lat": "46.4560308",
    "lng": "30.6844385"
}
```
> Example response (404, not found):

```json
{
    "msg": "Not found."
}
```
<div id="execution-results-GETapi-route-points--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-route-points--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-route-points--id-"></code></pre>
</div>
<div id="execution-error-GETapi-route-points--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-route-points--id-"></code></pre>
</div>
<form id="form-GETapi-route-points--id-" data-method="GET" data-path="api/route-points/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-route-points--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-route-points--id-" onclick="tryItOut('GETapi-route-points--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-route-points--id-" onclick="cancelTryOut('GETapi-route-points--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-route-points--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/route-points/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-route-points--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="GETapi-route-points--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-route-points--id-" data-component="url" required  hidden>
<br>
The ID of the route point.</p>
</form>


## Store a newly created Route Point.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/route-points?street_name=necessitatibus&street_number=possimus&lat=distinctio&lng=sapiente" \
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
        'query' => [
            'street_name'=> 'necessitatibus',
            'street_number'=> 'possimus',
            'lat'=> 'distinctio',
            'lng'=> 'sapiente',
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

let params = {
    "street_name": "necessitatibus",
    "street_number": "possimus",
    "lat": "distinctio",
    "lng": "sapiente",
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
    "street_name": "New street 2",
    "street_number": "1",
    "lat": "46.442794",
    "lng": "30.704637",
    "id": 4
}
```
> Example response (400, validation error):

```json
{
    "street_number": [
        "The street number may not be greater than 8 characters."
    ]
}
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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>street_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="street_name" data-endpoint="POSTapi-route-points" data-component="query" required  hidden>
<br>
Name of the route point Street.</p>
<p>
<b><code>street_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="street_number" data-endpoint="POSTapi-route-points" data-component="query" required  hidden>
<br>
Number of the route point Street.</p>
<p>
<b><code>lat</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lat" data-endpoint="POSTapi-route-points" data-component="query" required  hidden>
<br>
Latitude of the route point in format 1.111111</p>
<p>
<b><code>lng</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lng" data-endpoint="POSTapi-route-points" data-component="query" required  hidden>
<br>
Longitude of the route pointin format 1.111111</p>
</form>


## Update the specified Route Point.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://localhost/api/route-points/3?street_name=similique&street_number=animi&lat=occaecati&lng=doloremque" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/route-points/3',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'street_name'=> 'similique',
            'street_number'=> 'animi',
            'lat'=> 'occaecati',
            'lng'=> 'doloremque',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/route-points/3"
);

let params = {
    "street_name": "similique",
    "street_number": "animi",
    "lat": "occaecati",
    "lng": "doloremque",
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
{
    "id": 2,
    "street_name": "test change",
    "street_number": "222",
    "lat": "1.211",
    "lng": "2.161"
}
```
> Example response (404, not found):

```json
{
    "msg": "Not found."
}
```
<div id="execution-results-PUTapi-route-points--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-route-points--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-route-points--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-route-points--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-route-points--id-"></code></pre>
</div>
<form id="form-PUTapi-route-points--id-" data-method="PUT" data-path="api/route-points/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-route-points--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-route-points--id-" onclick="tryItOut('PUTapi-route-points--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-route-points--id-" onclick="cancelTryOut('PUTapi-route-points--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-route-points--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/route-points/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-route-points--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="PUTapi-route-points--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-route-points--id-" data-component="url" required  hidden>
<br>
The ID of the route point.</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>street_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="street_name" data-endpoint="PUTapi-route-points--id-" data-component="query" required  hidden>
<br>
Name of the route point Street.</p>
<p>
<b><code>street_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="street_number" data-endpoint="PUTapi-route-points--id-" data-component="query" required  hidden>
<br>
Number of the route point Street.</p>
<p>
<b><code>lat</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lat" data-endpoint="PUTapi-route-points--id-" data-component="query" required  hidden>
<br>
Latitude of the route point in format 1.111111</p>
<p>
<b><code>lng</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lng" data-endpoint="PUTapi-route-points--id-" data-component="query" required  hidden>
<br>
Longitude of the route pointin format 1.111111</p>
</form>


## Remove the specified Route Point from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/route-points/8" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/route-points/8',
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
    "http://localhost/api/route-points/8"
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
<div id="execution-results-DELETEapi-route-points--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-route-points--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-route-points--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-route-points--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-route-points--id-"></code></pre>
</div>
<form id="form-DELETEapi-route-points--id-" data-method="DELETE" data-path="api/route-points/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-route-points--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-route-points--id-" onclick="tryItOut('DELETEapi-route-points--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-route-points--id-" onclick="cancelTryOut('DELETEapi-route-points--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-route-points--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/route-points/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-route-points--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="DELETEapi-route-points--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-route-points--id-" data-component="url" required  hidden>
<br>
The ID of the route.</p>
</form>



