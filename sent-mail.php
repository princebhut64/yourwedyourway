<?php
$sql = "select * from myapp_bookartist where id = '". $_GET['event_id'] ."'";
$q = mysql_query($sql) or die(mysql_error() . $sql);
$r = mysql_fetch_assoc($q);

$sql2 = "select * from myapp_user where id = '" . $_GET['user_id'] . "'";
$q2 = mysql_query($sql2) or die(mysql_error() . $sql2);
$r2 = mysql_fetch_assoc($q2);

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
    
$mail = new PHPMailer;
// $mail->SMTPDebug = 3;                           
$mail->isSMTP();        
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;                      
$mail->Username = 'service.yourwedy@gmail.com';
$mail->Password = 'bavaqpblyoafowoe';
$mail->SMTPSecure = "ssl";                       
$mail->Port = 465;
$mail->From = "service.yourwedy@gmail.com";
$mail->FromName = "No Reply";
$mail->addAddress( $r2['email'], ucwords($r2['fname']) . " " . ucwords($r2['lname']) );

$mail->isHTML(true);
$mail->Subject = "Now Your Event Apporved By Artist!!!";

$mail->Body = "
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Your Name: </strong></td>
                            <td style='width:400px'>".ucwords($r2['fname']) . " " . ucwords($r2['lname'])."</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Event Name: </strong></td>
                            <td style='width:400px'>".$r['event_name']."</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Event Date: </strong></td>
                            <td style='width:400px'>".$r['event_date']."</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Event Budget: </strong></td>
                            <td style='width:400px'>".$r['budget']."</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Description: </strong></td>
                            <td style='width:400px'>".$r['description']."</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
if(!$mail->send())
{
    // echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo '<script type="text/javascript">
    alert("Event is successfully changed!!!");
    setTimeout(function(){ 
        window.location.href = "index.php?p=userlist";
     }, 100);
    </script>';
}