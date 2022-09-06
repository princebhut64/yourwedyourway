<?php
  
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(file_exists('vendor/autoload.php')){
        require_once 'vendor/autoload.php';
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load(); 
    }elseif(file_exists('../vendor/autoload.php')){
        require_once '../vendor/autoload.php';
        $dotenv = Dotenv\Dotenv::createImmutable('../');
        $dotenv->load();   
    }


    session_start();
    set_time_limit(0);
        
    ini_set('display_errors',0); 
    $timezone = "Asia/Calcutta";
    date_default_timezone_set($timezone);
        
        if(!function_exists('mysql_query')) {    
            
            $clink = mysqli_connect($_ENV['DB_HOST'],$_ENV['DB_USERNAME'],$_ENV['DB_PASSWORD'],$_ENV['DB_DATABASE']);
            
            function mysql_query($str) {
                global $clink;
                return mysqli_query($clink, $str);
            }
        
            function mysql_fetch_assoc($str) {
                global $clink;
                return mysqli_fetch_assoc($str);
            }
        
            function mysql_fetch_array($str) {
                global $clink;
                return mysqli_fetch_array($str);
            }
        
            function mysql_fetch_row($str) {
                global $clink;
                return mysqli_fetch_row($str);
            }
        
            function mysql_error() {
                global $clink;
                return mysqli_error($clink);
            }
        
            function mysql_num_fields($str) {
                global $clink;
                return mysqli_num_fields($str);
            }
            function mysql_num_rows($str) {
                global $clink;
                return mysqli_num_rows($str);
            }
            function mysql_insert_id() {
                global $clink;
                return mysqli_insert_id($clink);
            }
        
            function mysql_escape_string($str) {
                global $clink;
                return mysqli_escape_string($clink, $str);
            }
            function mysql_real_escape_string($str) {
                global $clink;
                return mysqli_real_escape_string($clink, $str);
            }
        }else{
            mysql_connect($_ENV['DB_HOST'],$_ENV['DB_USERNAME'],$_ENV['DB_PASSWORD']);
            mysql_select_db($_ENV['DB_DATABASE']);
        }
        
        
        mysql_query('SET SESSION sql_mode="NO_ENGINE_SUBSTITUTION"');
        mysql_query('SET GLOBAL sql_mode="NO_ENGINE_SUBSTITUTION"');
        
    function smtpmailer() {
        require 'vendor/autoload.php';
        
        $remarks = $_POST['remarks'] ? $_POST['remarks'] : "Testing1";
        
        $mail = new PHPMailer;
        $mail->SMTPDebug = 3;                           
        $mail->isSMTP();        
        $mail->Host = 'md-in-92.webhostbox.net';
        $mail->SMTPAuth = true;                      
        $mail->Username = 'info@jstechno.in';
        $mail->Password = 'abcd@1234';
        $mail->SMTPSecure = "ssl";                       
        $mail->Port = 465;
        $mail->From = "purvi3294@gmail.com";
        $mail->FromName = "Full Name";
        $mail->addAddress("developer7.jstechno@gmail.com");
        $mail->isHTML(true);
        $mail->Subject = "Subject Text";
    
        $mail->Body = "
                <html>
                   <body>
                       <table style='width:600px;'>
                           <tbody>
                               <tr>
                                   <td style='width:150px'><strong>Remarks: </strong></td>
                                   <td style='width:400px'>$remarks</td>
                               </tr>
                           </tbody>
                       </table>
                   </body>
               </html>
                ";
        
        
        if(!$mail->send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
            echo '<script type="text/javascript">alert("Thank You for Contact us!");</script>';
        }
    }
?>