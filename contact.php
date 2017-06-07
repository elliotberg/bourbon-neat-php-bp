<?php
$metaTitle='';
$metaDesc='';
$metaKeywords='';
require_once 'includes/header.php';
// change the captcha numbers here and the sum in send.php
$a = 3;
$b = 1;
?>

<?php if (isset($_GET['confirm'])) {?>
  <h2>Thank You!</h2>

  <p>We have received your message and will respond as soon as possible.</p>
<?php } else {?>
  <form method="post" action="includes/send.php">
    <label for="name">Full Name<strong>*</strong></label>
    <input type="text" name="Full_Name" id="name" required="required">

    <label for="email">Email<strong>*</strong></label>
    <input type="email" name="Email" id="email" placeholder="username@example.com" required="required">

    <label for="fav-color" class="visuallyhidden">Favorite Color</label>
    <input type="text" name="Favorite_Color" id="fav-color" placeholder="Leave Blank If Human" autocomplete="off" tabindex="-1">

    <label for="math">What is <?php echo $a;?> + <?php echo $b;?>?<strong>*</strong></label>
    <input type="text" name="Math" id="math" required="required" placeholder="<?php echo $a;?> + <?php echo $b;?> =">

    <label for="cmnt">Comments/Questions<strong>*</strong></label>
    <textarea rows="3" name="Message" placeholder="Enter your message" id="cmnt" required="required"></textarea>

    <button type="submit" class="btn">Submit</button>
  </form>

  <p><em><strong>*</strong>Required Field</em></p>
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
