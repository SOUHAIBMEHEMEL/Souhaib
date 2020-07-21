<?php
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['subject'])&&isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = 'fs_mehemel@esi.dz';
    $body ='
        <html>
            <body>
                <h3>test</h3>
                <p>Name: <br>'.$name.'</p>
                <p>Email: <br>'.$email.'</p>
                <p>Subject: <br>'.$subject.'</p>
                <p>Message: <br>'.$message.'</p>
            </body>
        </html>
    ';

    //headers
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; Charset-utf-8";

    $send = mail($to,$subject,$body,$headers);
    if ($send){
        echo '<br>';
        echo 'thanks for contacting me';
    }
    else{
        echo 'error';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>test mail</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="name" placeholder="name"><br>
            <input type="text" name="email" placeholder="email"><br>
            <input type="text" name="subject" placeholder="subject"><br>
            <input type="text" name="message" placeholder="message"><br>
            <button type="submit">submit</button>
        </form>
    </body>
</html>


