<?php

// ==== Control Vars =======
$strFromNumber = "+14438704037";
$strToNumber = "+919810737228";
$strMsg = "Hello Papa"; //Olivier accidentally pulled up a porn site on a projector
$aryResponse = array();


    // include the Twilio PHP library - download from
    // http://www.twilio.com/docs/libraries/
    require_once ("inc/Services/Twilio.php");

    // set our AccountSid and AuthToken - from www.twilio.com/user/account
    $AccountSid = "AC6f716b4db945ecbbc9e4aaa133f95932";
    $AuthToken = "fe41e9dd488b1562c32b73db295d73ba";

    // ini a new Twilio Rest Client
    $objConnection = new Services_Twilio($AccountSid, $AuthToken);


    // Send a new outgoinging SMS by POSTing to the SMS resource */
    $bSuccess = $objConnection->account->sms_messages->create(

        $strFromNumber, 	// number we are sending From
        $strToNumber,           // number we are sending To
        $strMsg			// the sms body
    );

		
    $aryResponse["SentMsg"] = $strMsg;
    $aryResponse["Success"] = true;


    echo json_encode($aryResponse);
