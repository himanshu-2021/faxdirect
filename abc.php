<?php
$to = '+16613471838';
$from = '+16615935774';
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.telnyx.com/v2/faxes',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('media_url' => 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf','connection_id' => '1598337276306261687','to' => $to,'from' => $from),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer KEY01785DDA462955A51C6B548E58E68B1A_qbXIOPZxxBPrtEAACFZuol'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
