# soazposting
A sdk for soazposting api

## Installation

```bash
composer install xywl/soazposting
```

## Usage

* First you should read over [api document](https://www.ec-ship.hk/API-portal/Speedpost_API_Specification.pdf).

#### Demo code

* Initialize a api client
```php
use XYWL\SoazPosting\Client;

// set apiUsername, apiTokent, soazUsername, wsdlUri
$client = new Client("apiUsername", "apiTokent", "soazUsername", "wsdlUri");

//Or

$client =  new Client();
$client->setApiUsername('name')
    ->setApiToken('token')
    ->setSoazUsername('otherName')
    ->setWSDLUri('uri');
```

This sdk maintain two api request `Class`, `XYWL\SoazPosting\CreateSoazOrderRequest` for create order record , and `XYWL\SoazPosting\GetSoazAddressPackRequest` for get address pack file binary data.

Here go for code:

* Make a request for create order record, then will get a response which instance of `XYWL\SoazPosting\Base\createSoazOrderResponse`
```php
use XYWL\SoazPosting\CreateSoazOrderRequest;

$request = new CreateSoazOrderRequest();

// set request parameters according to api document

$request->setXXX()

//now use client to handle request

$response = $client->handle($request);

//var_dump($response);

```

* Make a request for get address pack file, then will get a response which instance of `XYWL\SoazPosting\Base\getSoazAddressPackResponse`
```php
use XYWL\SoazPosting\GetSoazAddressPackRequest;

$request = new GetSoazAddressPackRequest();

// set request parameters according to api document

$request->setXXX()

//now use client to handle request

$response = $client->handle($request);

//var_dump($response);

```
