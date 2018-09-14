<?php
$metaTitle='';
$metaDesc='';
$metaKeywords='';
require_once 'includes/header.php';
?>

<?php if (isset($_GET['confirm']) && $_GET['confirm'] == true) {?>
  <h2>Thank You!</h2>

  <p>We have received your message and will respond as soon as possible.</p>
<?php } else {?>
  <h2>Contact Form</h2>

  <form id="contact-form" method="post" action="includes/contact-form.php">

    <div class="invalid-msg"></div>

    <label for="name">Full Name</label>
    <input type="text" name="Full Name" id="name" required="required">

    <label for="email">Email</label>
    <input type="email" name="Email" id="email" placeholder="username@example.com" required="required">

    <label for="cmnt">Comments</label>
    <textarea rows="5" name="Message" placeholder="Enter your message" id="cmnt" required="required"></textarea>

    <div id='recaptcha' class="g-recaptcha" data-sitekey="" data-callback="contactSubmit" data-size="invisible"></div>

    <button class="btn" type="submit">Submit</button>
  </form>
<?php }?>

<form action="http://maps.google.com/maps" method="get" target="_blank" class="directions-form">
  <label for="saddr">Enter your location</label>
  <input type="text" name="saddr" placeholder="123 Example Ave, Torrington, CT" />
  <input type="hidden" name="daddr" value="" />
  <input type="submit" class="btn" value="Get directions" formtarget="_blank" />
</form>

<?php
require_once 'includes/footer.php';
?>
