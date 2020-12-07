# Routes


## Add a point to route.

Route is a data structure that is build base on routes, saving their order.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/routes/add-point?routeId=13&routePointId=6&afterRoutePoint=10" \
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
        'query' => [
            'routeId'=> '13',
            'routePointId'=> '6',
            'afterRoutePoint'=> '10',
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

let params = {
    "routeId": "13",
    "routePointId": "6",
    "afterRoutePoint": "10",
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
    "route": {
        "id": 1,
        "name": "Route №12",
        "created_at": "2020-12-06 19:08:02",
        "updated_at": "2020-12-06 19:08:02"
    },
    "points": [
        {
            "id": 1,
            "street_name": "Svyatoslava Rihtera",
            "street_number": "148",
            "lat": "46.4560308",
            "lng": "30.6844385",
            "pivot": {
                "route_id": "1",
                "route_point_id": "1"
            }
        },
        {
            "id": 3,
            "street_name": "Borisa Derevyanko",
            "street_number": "2",
            "lat": "46.442794",
            "lng": "30.704637",
            "pivot": {
                "route_id": "1",
                "route_point_id": "3"
            }
        },
        {
            "id": 2,
            "street_name": "Gastelo",
            "street_number": "55",
            "lat": "46.450927",
            "lng": "30.684999",
            "pivot": {
                "route_id": "1",
                "route_point_id": "2"
            }
        }
    ]
}
```
> Example response (404, not found):

```json
{
    "msg": "Not found."
}
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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>routeId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="routeId" data-endpoint="POSTapi-routes-add-point" data-component="query" required  hidden>
<br>
Id of the route where route point should be added.</p>
<p>
<b><code>routePointId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="routePointId" data-endpoint="POSTapi-routes-add-point" data-component="query" required  hidden>
<br>
Id of the route point, which should be added to route.</p>
<p>
<b><code>afterRoutePoint</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="afterRoutePoint" data-endpoint="POSTapi-routes-add-point" data-component="query"  hidden>
<br>
Id of the route point, after which should be added to route. If not set, new route point will be added as last.</p>
</form>


## Delete a route point from route.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/routes/delete-point?routeId=10&routePointId=12" \
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
        'query' => [
            'routeId'=> '10',
            'routePointId'=> '12',
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

let params = {
    "routeId": "10",
    "routePointId": "12",
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
    "msg": "Not found"
}
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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>routeId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="routeId" data-endpoint="DELETEapi-routes-delete-point" data-component="query" required  hidden>
<br>
Id of the route where route point should be deleted from.</p>
<p>
<b><code>routePointId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="routePointId" data-endpoint="DELETEapi-routes-delete-point" data-component="query" required  hidden>
<br>
Id of the route point, which should be deleted from route.</p>
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


> Example response (200, success):

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "name": "Route №12",
            "created_at": "2020-12-06 19:08:02",
            "updated_at": "2020-12-06 19:08:02"
        }
    ],
    "first_page_url": "http:\/\/homestead.test\/api\/routes?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/homestead.test\/api\/routes?page=1",
    "next_page_url": null,
    "path": "http:\/\/homestead.test\/api\/routes",
    "per_page": 20,
    "prev_page_url": null,
    "to": 1,
    "total": 1
}
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
    -G "http://localhost/api/routes/7" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/routes/7',
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
    "http://localhost/api/routes/7"
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
    "route": {
        "id": 1,
        "name": "Route №12",
        "created_at": "2020-12-06 19:08:02",
        "updated_at": "2020-12-06 19:08:02"
    },
    "points": [
        {
            "id": 1,
            "street_name": "Svyatoslava Rihtera",
            "street_number": "148",
            "lat": "46.4560308",
            "lng": "30.6844385",
            "pivot": {
                "route_id": "1",
                "route_point_id": "1"
            }
        },
        {
            "id": 3,
            "street_name": "Borisa Derevyanko",
            "street_number": "2",
            "lat": "46.442794",
            "lng": "30.704637",
            "pivot": {
                "route_id": "1",
                "route_point_id": "3"
            }
        },
        {
            "id": 2,
            "street_name": "Gastelo",
            "street_number": "55",
            "lat": "46.450927",
            "lng": "30.684999",
            "pivot": {
                "route_id": "1",
                "route_point_id": "2"
            }
        }
    ]
}
```
> Example response (404, not found):

```json
{
    "msg": "Not found."
}
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-routes--id-" data-component="url" required  hidden>
<br>
The ID of the route.</p>
</form>


## Update the specified route.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://localhost/api/routes/9?name=iste" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/routes/9',
    [
        'headers' => [
            'Authorization' => 'Basic {YOUR_AUTH_KEY}',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'name'=> 'iste',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/routes/9"
);

let params = {
    "name": "iste",
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
    "id": 4,
    "name": "Route №123",
    "created_at": "2020-12-07 07:52:22",
    "updated_at": "2020-12-07 08:35:57"
}
```
> Example response (404, not found):

```json
{
    "msg": "Not found."
}
```
<div id="execution-results-PUTapi-routes--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-routes--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-routes--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-routes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-routes--id-"></code></pre>
</div>
<form id="form-PUTapi-routes--id-" data-method="PUT" data-path="api/routes/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-routes--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-routes--id-" onclick="tryItOut('PUTapi-routes--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-routes--id-" onclick="cancelTryOut('PUTapi-routes--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-routes--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/routes/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-routes--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="PUTapi-routes--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-routes--id-" data-component="url" required  hidden>
<br>
The ID of the route.</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-routes--id-" data-component="query" required  hidden>
<br>
Name of the route.</p>
</form>


## Store a newly created route.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/routes?name=minima" \
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
        'query' => [
            'name'=> 'minima',
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

let params = {
    "name": "minima",
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
    "name": "Route №15",
    "updated_at": "2020-12-07 07:33:32",
    "created_at": "2020-12-07 07:33:32",
    "id": 2
}
```
> Example response (400, validation error):

```json
{
    "name": "The name may not be greater than 10 characters."
}
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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-routes" data-component="query" required  hidden>
<br>
Name of the route.</p>
</form>


## Remove the specified route.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/routes/4" \
    -H "Authorization: Basic {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/routes/4',
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
    "http://localhost/api/routes/4"
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
<div id="execution-results-DELETEapi-routes--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-routes--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-routes--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-routes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-routes--id-"></code></pre>
</div>
<form id="form-DELETEapi-routes--id-" data-method="DELETE" data-path="api/routes/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Basic {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-routes--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-routes--id-" onclick="tryItOut('DELETEapi-routes--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-routes--id-" onclick="cancelTryOut('DELETEapi-routes--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-routes--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/routes/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-routes--id-" hidden>Authorization header: <b><code>Basic </code></b><input type="text" name="Authorization" data-prefix="Basic " data-endpoint="DELETEapi-routes--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-routes--id-" data-component="url" required  hidden>
<br>
The ID of the route.</p>
</form>



