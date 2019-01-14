# payhubp
Payhub Plus Transaction API PHP Package

## Installation

This package is very easy to set up. There are only couple of steps.

### Composer

Pull this package in through Composer

`composer require ashrafsaqib/payhubp`


### Config File

In the config/app.php file add the following line 

```
/*
 * Package Service Providers...
 */
 PayHubP\PayHubPServiceProvider::class,
```
In the project .env file define the logins according to your payhub plus merchant account.

GATEWAY_USERNAME

GATEWAY_PASSWORD

### Usage 
Include these files on the top on your controller
```php

// PayHubP Classes
use PayHubP\flexport_API;
use PayHubP\Params;
use Response;

```

```
// PayHubP starts
$ws = new flexport_API();
$ws_params = new Params();

$ws_params->GatewayUserName = env('GATEWAY_USERNAME');
$ws_params->GatewayPassword = env('GATEWAY_PASSWORD');
$ws_params->TransactionType = "sale";
$ws_params->PaymentType = "creditcard";
$ws_params->Amount = $amount;
$ws_params->CCNumber = $request->cc_number;
$ws_params->CCExpDate = $request->cc_expire_month . $request->cc_expire_year;
$ws_params->CVV = $request->ccv;

$ws_response = $ws->ProcessTransaction($ws_params);

if ($ws_response->STATUS_CODE != 1) {
    return 'false';
}
```


## More Information
For any other disucssion relevant to this package, you can contact me at linktosaqib@gmail.com

## Credit Note
This package is an adaptation of PayHub Plus Sample Code for transactions.

## Opening an Issue
Before opening an issue there are a couple of considerations:
* A **star** on this project shows support and is way to say thank you to all the contributors. If you open an issue without a star, *your issue may be closed without consideration.* Thank you for understanding and the support. You are all awesome!
* **Read the instructions** and make sure all steps were *followed correctly*.
* **Check** that the issue is not *specific to your development environment* setup.
* **Provide** *duplication steps*.
* **Attempt to look into the issue**, and if you *have a solution, make a pull request*.
* **Show that you have made an attempt** to *look into the issue*.
* **Check** to see if the issue you are *reporting is a duplicate* of a previous reported issue.
* **Following these instructions show me that you have tried.**
* If you have a questions send me an email to linktosaqib@gmail.com
* Please be considerate that this is an open source project that I provide to the community for FREE when opening an issue. 

## License
This package is free software distributed under the terms of the MIT license.



