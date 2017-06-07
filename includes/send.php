<?php
$honeypot = false;
$captcha = false;

if ($_POST['Favorite_Color'] === '') {
  $honeypot = true;
} else {
  die('Something went wrong!');
}

if ($_POST['Math'] == 4) {
  $captcha = true;
} else {
  die('Something went wrong!');
}

if ($honeypot === true && $captcha === true) {
  $subject = 'Contact Form Message';
  //$emailfrom = '';
  $user_email = strip_tags($_POST['Email']);
  $emailto = 'elliot@watermain.co';
  $url = '../contact.php?confirm=true';

  $headers  = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
  $headers .= 'From: '.$user_email."\r\n";
  //$headers .= 'From: '.$emailfrom."\r\n";
  //$headers .= 'Reply-To: '.strip_tags($_POST['Email'])."\r\n";
  //$headers .= 'Return-Path: '.$emailto."\r\n";

  $text = 'Message from<ul>';
  foreach ($_POST as $key => $value) {
    if ($key !== 'Favorite_Color' && $key !== 'Math') {
      $key = str_replace('_', ' ', $key);
      $value = strip_tags($value);
      $value = htmlspecialchars($value);
      $text .= '<li><strong>'.$key.':</strong> '.$value.'</li>';
    }
  }
  $text .= '</ul>';

  mail($emailto, $subject, $text, $headers);
  echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  //offline testing
  //echo $emailto.'<br>'.$headers.'<br>'.$subject.'<br>'.$text;
}
?>
