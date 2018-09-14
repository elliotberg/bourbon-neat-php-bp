<?php
function check_recaptcha($response, $remoteip) {
  $secret = '6LfQ0S0UAAAAAJZuJjVcG65EF7SIQbGWrTfg_DAz';
  $url = "https://www.google.com/recaptcha/api/siteverify";

  // Curl request
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, array(
    'secret' => $secret,
    'response' => $response,
    'remoteip' => $remoteip
  ));
  $curlData = curl_exec($curl);
  curl_close($curl);

  // Parse data
  $recaptcha = json_decode($curlData, true);

  if ($recaptcha['success']) {
    return true;
  }
}
?>
