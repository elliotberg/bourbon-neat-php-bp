<?php
$subject = 'Contact Form Message';
$emailfrom = '';
$emailto = 'elliot@watermain.co';
$url = '../contact.php?confirm=true';

$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From: '$emailfrom."\r\n";
$headers .= 'Reply-To: '.strip_tags($_POST['Email'])."\r\n";
$headers .= 'Return-Path: '.$emailto."\r\n"

if($_POST['Favorite_Color'] !== ''){
  die('Something went wrong!');
} else {
  $text = 'Message from<ul>';
  foreach ($_POST as $key => $value) {
    if ($key != 'Favorite_Color') {
      $key = str_replace('_', ' ', $key);
      $text .= '<li><strong>'.$key.':</strong> '.$value.'</li>';
    }
  }
  $text .= '</ul>';
  mail($emailto, $subject, $text, $headers);
  echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
?>
