<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient  = "20057cm035@gmail.com";

mail($recipient,$subject,$message,$mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="contactus.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="contactus.html">home page</a>.</p>
        
    </div>
</body>
</html>

'

?>