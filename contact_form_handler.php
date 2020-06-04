<?php
if(isset($_POST['submit']))
{
   $Username=$_POST['name'];
   $visitor_email=$_POST['email'];
   $v_message=$_POST['message'];
      $email_body= "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Visitor Of Ahsan Asghar portfolio Website!</p>
<table>
<tr>
<th>Firstname</th>
<th>Message</th>
</tr>
<tr>
<td>$Username</td>
<td>$v_message</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   if(empty($Username)||empty($visitor_email)||empty($v_message))
   {
    header('location:index.php?error');
   }
   else
   {
    $to = "ahsanasghar232@gmail.com";
    if(mail($to,$visitor_email,$email_body,$headers))
    {
      header("location:index.php?success");
    }
   }
 }
 else
 {
  header("location:index.php");
 }

?>


