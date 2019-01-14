<?php

namespace PayHubP;

use App\Http\Controllers\Controller;

use PayHubP\Params;
use PayHubP\Responses;
use PayHubP\flexport_API;

class PayHubPController extends Controller
{
    public function index()
    {
        $ws = new flexport_API();
        $ws_params = new Params();

        $ws_params->GatewayUserName = "flexportdemo";
        $ws_params->GatewayPassword = "FlexPort123!";
        $ws_params->TransactionType = "sale";
        $ws_params->PaymentType = "creditcard";
        $ws_params->Amount = "1.00";
        $ws_params->CCNumber = "4111111111111111";
        $ws_params->CCExpDate = "0120";
        $ws_params->CVV = "123";

        $ws_response = $ws->ProcessTransaction($ws_params);

        echo "STATUS_CODE: " . $ws_response->STATUS_CODE . "<br />";
        echo "STATUS_MSG: " . $ws_response->STATUS_MSG . "<br />";
        echo "TRANS_ID: " . $ws_response->TRANS_ID . "<br />";
        echo "AUTH_CODE: " . $ws_response->AUTH_CODE . "<br />";
        echo "AVS_CODE: " . $ws_response->AVS_CODE . "<br />";
        echo "AVS_MSG: " . $ws_response->AVS_MSG . "<br />";
        echo "CVV2_CODE: " . $ws_response->CVV2_CODE . "<br />";
        echo "CVV2_MSG: " . $ws_response->CVV2_MSG . "<br />";
        echo "ORDERID: " . $ws_response->ORDERID . "<br />";
        echo "SAFE_ID: " . $ws_response->SAFE_ID . "<br />";
        echo "FULLRESPONSE: " . $ws_response->FULLRESPONSE . "<br />";
        //echo "POSTSTRING: " . $ws_response->POSTSTRING . "<br />";
        echo "BALANCE: " . $ws_response->BALANCE . "<br />";
        echo "GIFTRESPONSE: " . $ws_response->GIFTRESPONSE . "<br />";
        echo "MERCHANT_ID: " . $ws_response->MERCHANT_ID . "<br />";
        echo "CUSTOMER_MESSAGE: " . $ws_response->CUSTOMER_MESSAGE . "<br />";
    }
}
