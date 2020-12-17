<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];


$mail_to = 'pelvichealthptwv@gmail.com';
$subject = '#message#' .$field_name;
$subject = 'Message from '.$field_name;

$body_message = 'From: ' .$field_name."\r\n";
$body_message .= 'email: ' .$field_email."\r\n";
$body_message .= 'message: ' .$field_message.;
$body_message = 'From: '.$field_name."\r\n";
$body_message .= 'E-mail: '.$field_email."\r\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$email."rn";
$headers .= 'Reply-To: '.$email."rn";

$mail_status = mail($mail_to, $subject, $body_message, $headers)
$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
  <script language="javascript" type="text/javascript">
    alert('Thank you for contacting us, we will get back to you as soon as possible!');
    window.location = 'contact.html';
  </script>
 <script language="javascript" type="text/javascript">
  alert('Thank you for contacting us, we will get back to you as soon as possible!');
  window.location = 'contact.html';
 </script>
<?php
}
else{ ?>
  <script language="javascript" type="text/javascript">
  alert('Message sending failed. Please send an email to pelvichealthptwv@gmail.com');
else{ ?>
 <script language="javascript" type="text/javascript">
  alert('Message sending failed. Please, send an email to pelvichealthptwv@gmail.com');
  window.location = 'contact.html';
</script>
 </script>
<?php
}
?>
