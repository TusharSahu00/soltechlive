
<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$text = $_POST['text'];
$to = "tusharsahu002@gmail.com";
$subject = "Mail From website";


//Message Body..
$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>SurName:</strong> </td><td>" . $surname . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
$message .= "<tr><td><strong>Contact:</strong> </td><td>" . $phone . "</td></tr>";
$message .= "<tr><td><strong>Message:</strong> </td><td>" . $text . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


//headers..
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers = 'From: info@cljaipur.in'."\r\n" .
$headers .= 'Cc: digiconnectonline@gmail.com' . "\r\n";


//mail it...
if($email!=NULL){
    mail($to,$subject,$message,$headers);
    ?>
    <script language="javascript" type="text/javascript">
    alert('Thank you for the message. We will contact you shortly.');
    window.location = 'thankyou.html';
  </script>
  <?php
  
}

else { ?>
    <script language="javascript" type="text/javascript">
      alert('Message failed. Please, send an email to jaipur@careerlauncher.com');
    </script>
    <?php
}
header('Location: index.html');
?>

