## Answer:
Let me start with a short definition of what HTTP is. It stands for hyper text transfer protocol, its a protocol used by the world wide web to define client/server communication. 
The client (e.g web browser) makes a request to a server using a GET request method, the server recieves the request and returns a response accordingly. 

HTTP request methods include the following:
- GET
- POST
- PUT
- PATCH
- DELETE
- HEAD
- CONNECT
- OPTIONS
- TRACE

###### ======================================================================================================================================================================================================================================================================================

## GET request method: ##
This is a http request method that is used only to retrieve data for a specified resource. For example, a client like a web browser can send a GET request to the following url:
- `https://mywebsite.com/books`

The server is expected to respond (e.g with a json type response) containing the a list of all the books on the database as an example. (assuming the information about books is stored in a database on the server)
If the request was successful, the server also responds with something called a status code, in this scenario the status code will be 200 which indicates success.


```
GET: '/books'

response:
200 OK

{
    'data': [
        {
            'title': 'sample title 1',
            'author': {
                'name': 'sample author 1'
            }
        },
        ...
    ]
}
```

## HEAD request method:
This is similar to the GET request, but the server only returns the response header without the response body. 
Use case is for checking headers e.g Content-Type, Content-Length etc before sending an actual GET request to retrieve a resource or document.

## POST request method:
This is a http request method that is used to create a new resource. A post request is sent to the server along with the request body (the contents of a form request for example email, password etc).

```
POST: `/books'

request:
[
    'title' => 'new book title',
    'author_id' => '1'
];

response:
201 Created

{
    'response': [
        {
            'success': true,
            ...
        }
    ]
}
```

## PUT request method:
This is used to perform a full update of a specified resource. Like the POST request method it also requires a request payload that will contain information needed to retrieve the record and perform a full update on the resource.

```
PUT: '/books'

request:
[
    'book_id' => 1
    'title' => 'different book title'
];

response:
200/204 (with content/without content)

{
    'response': [
        {
            'updated': true
        }
    ]
}
```

## PATCH request method:
This is similar to the PUT method except that it is used to perform a partial update on the specified resource. Also like the PUT request method, it requires a request payload that will contain information needed to retrieve the record and perform a partial update on the resource.

```
PATCH: '/books'

request:
[
    'book_id' => 1,
    ...
    'title' => 'different book title'
    ...
];

response:
200/204 (with content/without content)

{
    'response': [
        {
            'updated': true
        }
    ]
}

//updates only the title of the book resource.
```

## DIFFERENCES:

**Purpose**

- GET: retrieve resource
- POST: create new resource
- PUT: perform full update of a specified resource
- PATCH: a partial update of a specified resource
- DELETE: delete a specified resource
- HEAD: check header before sending the actual GET request

**Response code**

- GET: 200 OK
- POST: 201 CREATED
- PUT: 200 0r 204 (with response content/ without response content)
- PATCH: 200 0r 204 (with response content/ without response content)
- DELETE: 200 0r 204 (with response content/ without response content)
- HEAD: 200 OK

**Request Parameters**
- GET: does not require request parameters 
- POST: requires request parameters e.g usually the form params like the name, email, phone number
- PUT: requires request parameters e.g the id of the resource to be perform a full update on
- PATCH: requires request parameters e.g the id of the resource to be perform a partial update on
- DELETE: requires request parameters e.g the id of the resource to be perform a delete action on
- HEAD: None


`For all of them, the server is expected to respond with a 404 status code if the resource is not found.`


## Final comments:
- The POST, GET, PUT/PATCH, DELETE requests methods can be likened to the methods for CRUD operations (create read update and delete). 
- POST method is used to CREATE a resource also popularly used for delete actions, GET method is used to VIEW a resource, and the PUT/PATCH are used for full and partial updates of a resource.