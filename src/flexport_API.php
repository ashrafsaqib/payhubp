<?php

namespace PayHubP;

class flexport_API
{
    public function ProcessTransaction(Params $Params)
    {
        $Responses = new Responses();

        try
        {
            $values['TransactionType'] = $Params->TransactionType;
            $values['GatewayUserName'] = $Params->GatewayUserName;
            $values['GatewayPassword'] = $Params->GatewayPassword;
            $values['PaymentType'] = $Params->PaymentType;
            $values['Amount'] = $Params->Amount;
            $values['Tax'] = $Params->Tax;
            $values['Shipping'] = $Params->Shipping;
            $values['OrderDescription'] = $Params->OrderDescription;
            $values['OrderID'] = $Params->OrderID;
            $values['PONumber'] = $Params->PONumber;
            $values['CCNumber'] = $Params->CCNumber;
            $values['CCExpDate'] = $Params->CCExpDate;
            $values['CVV'] = $Params->CVV;
            $values['CheckName'] = $Params->CheckName;
            $values['CheckABA'] = $Params->CheckABA;
            $values['CheckAccount'] = $Params->CheckAccount;
            $values['AccountHolderType'] = $Params->AccountHolderType;
            $values['AccountType'] = $Params->AccountType;
            $values['SecCode'] = $Params->SecCode;
            $values['FirstName'] = $Params->FirstName;
            $values['LastName'] = $Params->LastName;
            $values['Company'] = $Params->Company;
            $values['Address1'] = $Params->Address1;
            $values['Address2'] = $Params->Address2;
            $values['City'] = $Params->City;
            $values['State'] = $Params->State;
            $values['Zip'] = $Params->Zip;
            $values['Country'] = $Params->Country;
            $values['Phone'] = $Params->Phone;
            $values['Fax'] = $Params->Fax;
            $values['EMail'] = $Params->EMail;
            $values['Website'] = $Params->Website;
            $values['ShippingFirstName'] = $Params->ShippingFirstName;
            $values['ShippingLastName'] = $Params->ShippingLastName;
            $values['ShippingCompany'] = $Params->ShippingCompany;
            $values['ShippingAddress1'] = $Params->ShippingAddress1;
            $values['ShippingAddress2'] = $Params->ShippingAddress2;
            $values['ShippingCity'] = $Params->ShippingCity;
            $values['ShippingState'] = $Params->ShippingState;
            $values['ShippingZip'] = $Params->ShippingZip;
            $values['ShippingCountry'] = $Params->ShippingCountry;
            $values['ShippingEmail'] = $Params->ShippingEmail;
            $values['ShippingPhone'] = $Params->ShippingPhone;
            $values['ShippingFax'] = $Params->ShippingFax;
            $values['ProcessorID'] = $Params->ProcessorID;
            $values['TransactionID'] = $Params->TransactionID;
            $values['Tracking_Number'] = $Params->Tracking_Number;
            $values['Shipping_Carrier'] = $Params->Shipping_Carrier;
            $values['IPAddress'] = $Params->IPAddress;
            $values['Track1'] = $Params->Track1;
            $values['Track2'] = $Params->Track2;
            $values['Track3'] = $Params->Track3;
            $values['Track_Type'] = $Params->Track_Type;
            $values['Custom_Field_1'] = $Params->Custom_Field_1;
            $values['Custom_Field_2'] = $Params->Custom_Field_2;
            $values['Custom_Field_3'] = $Params->Custom_Field_3;
            $values['Custom_Field_4'] = $Params->Custom_Field_4;
            $values['Custom_Field_5'] = $Params->Custom_Field_5;
            $values['Custom_Field_6'] = $Params->Custom_Field_6;
            $values['Custom_Field_7'] = $Params->Custom_Field_7;
            $values['Custom_Field_8'] = $Params->Custom_Field_8;
            $values['Custom_Field_9'] = $Params->Custom_Field_9;
            $values['Custom_Field_10'] = $Params->Custom_Field_10;
            $values['Custom_Field_11'] = $Params->Custom_Field_11;
            $values['Custom_Field_12'] = $Params->Custom_Field_12;
            $values['Custom_Field_13'] = $Params->Custom_Field_13;
            $values['Custom_Field_14'] = $Params->Custom_Field_14;
            $values['Custom_Field_15'] = $Params->Custom_Field_15;
            $values['Custom_Field_16'] = $Params->Custom_Field_16;
            $values['Custom_Field_17'] = $Params->Custom_Field_17;
            $values['Custom_Field_18'] = $Params->Custom_Field_18;
            $values['Custom_Field_19'] = $Params->Custom_Field_19;
            $values['Custom_Field_20'] = $Params->Custom_Field_20;
            $values['SAFE_Action'] = $Params->SAFE_Action;
            $values['SAFE_ID'] = $Params->SAFE_ID;
            $values['ReceiptType'] = $Params->ReceiptType;
            $values['MICR'] = $Params->MICR;
            $values['MICRSymbolSet'] = $Params->MICRSymbolSet;
            $values['CheckFrontTIFF'] = $Params->CheckFrontTIFF;
            $values['CheckBackTIFF'] = $Params->CheckBackTIFF;
            $values['CheckNumber'] = $Params->CheckNumber;
            $values['Terminal_ID'] = $Params->Terminal_ID;
            $values['CCNumber2'] = $Params->CCNumber2;
            $values['Clerk_ID'] = $Params->Clerk_ID;
            $values['Billing_Code'] = $Params->Billing_Code;
            $values['InvoiceID'] = $Params->InvoiceID;
            $values['BatchID'] = $Params->BatchID;
            $values['DLNumber'] = $Params->DLNumber;
            $values['DLState'] = $Params->DLState;
            $values['IdentityVerification'] = $Params->IdentityVerification;
            $values['CourtesyCardID'] = $Params->CourtesyCardID;
            $values['MagData'] = $Params->MagData;

            $client = new \SoapClient("https://secure.gwintegration.com/roxapi/flexport.asmx?WSDL");

            $res = $client->ProcessTransaction(array('objparameters' => $values));

            $Responses->AUTH_CODE = $res->ProcessTransactionResult->AUTH_CODE;
            $Responses->AVS_CODE = $res->ProcessTransactionResult->AVS_CODE;
            $Responses->AVS_MSG = $res->ProcessTransactionResult->AVS_MSG;
            $Responses->BALANCE = $res->ProcessTransactionResult->BALANCE;
            $Responses->CUSTOMER_MESSAGE = $res->ProcessTransactionResult->CUSTOMER_MESSAGE;
            $Responses->CVV2_CODE = $res->ProcessTransactionResult->CVV2_CODE;
            $Responses->CVV2_MSG = $res->ProcessTransactionResult->CVV2_MSG;
            $Responses->FULLRESPONSE = $res->ProcessTransactionResult->FULLRESPONSE;
            $Responses->GIFTRESPONSE = $res->ProcessTransactionResult->GIFTRESPONSE;
            $Responses->MERCHANT_ID = $res->ProcessTransactionResult->MERCHANT_ID;
            $Responses->ORDERID = $res->ProcessTransactionResult->ORDERID;
            $Responses->POSTSTRING = $res->ProcessTransactionResult->POSTSTRING;
            $Responses->SAFE_ID = $res->ProcessTransactionResult->SAFE_ID;
            $Responses->STATUS_CODE = $res->ProcessTransactionResult->STATUS_CODE;
            $Responses->STATUS_MSG = $res->ProcessTransactionResult->STATUS_MSG;
            $Responses->TRANS_ID = $res->ProcessTransactionResult->TRANS_ID;
        } catch (\SoapFault $e) {
            $Responses->STATUS_CODE = "-1";
            $Responses->STATUS_MSG = $e->getMessage();
        } catch (\Exception $e) {
            $Responses->STATUS_CODE = "-1";
            $Responses->STATUS_MSG = $e->getMessage();
        }
        return $Responses;
    }
}
