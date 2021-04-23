<?php
/**
 * @param string $CLIENT_CODE     : Terminal ID. It can access from Param account
 * @param string $CLIENT_USERNAME : Username. It can access from Param account
 * @param string $CLIENT_PASSWORD : Password. It can access from Param account
 * @param string $GUID            : Key belonging to member workplace
 * @param string $MODE            : PROD/TEST
 **/

$_url = 'https://test-dmz.param.com.tr:4443/turkpos.ws/service_turkpos_test.asmx';
//$_url = 'https://posws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx';


$GUID            = '0c13d406-873b-403b-9c09-a5766840d98c';  // GUID Kodunuzu tırnak içerisine yazmanız gerekmektedir.
$CLIENT_CODE     = 10738;                                   // Client Kodunuzu tırnak içerisine yazmanız gerekmektedir.
$CLIENT_USERNAME = 'Test';                                  // Client Kullanıcı adınızı tırnak içerisine yazmanız gerekmektedir.
$CLIENT_PASSWORD = 'Test';                                  // Client Şifrenizi tırnak içerisine yazmanız gerekmektedir.
$MODE            = "Test";                                  // 'PROD' Gerçek Ortam, 'Test' Test Sanal Ortam

$hosturl         = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$failUrl         = $hosturl."/api/unsuccesfull.php";
$successUrl      = $hosturl."/api/succesfull.php";
$payAction       = $hosturl."/api/api/soap.php";
$ipAddress       = ($_SERVER['REMOTE_ADDR']=="::1")?'127.0.0.1':$_SERVER['REMOTE_ADDR'];


$cardHolderPhone = "";
$transactionId   = time();
$orderId         = "1".time();
$orderId         = time();
$referenceUrl    = $hosturl;
$extraData1      = " ";
$extraData2      = " ";
$extraData3      = " ";
$extraData4      = " ";
$extraData5      = " ";