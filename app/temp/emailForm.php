<?php

if($_POST["submit"]) {
    $recipient="contact@dougirw.in";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>
    ");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
    }

    ?>
<div>
  <?=$thankYou ?>

  <form method="post" action="emailForm.php">
      <label>Name:</label>
      <input name="sender" />

      <label>Email address:</label>
      <input name="senderEmail" />

      <label>Message:</label>
      <textarea rows="5" cols="20" name="message"></textarea>

      <input type="submit" name="submit" />
  </form>

</div>