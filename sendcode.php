<?php
include "header.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
?>

<div class="container">
    <div class="row ">

        <div class="col-12">

                <form class="login" method="post" id="loginID">
                    <!-- <input type="email" placeholder="Email" name="email"> -->
                    <input type="email" placeholder="Enter Your mail*" name="email">
                </form>
                <div class="htc__login__btn mt--30">
                    <button class="btn btn-primary" form="loginID" name="verify">Send Code</button>
                </div>
                <?php
                    if(isset($_POST['verify'])){
                        $email = $_POST['email'];
                        $code = rand(11111,99999);
                        $body = "your forget password code is:$code";
                        include "auth.php";
                        $forget = new auth();
                        $forget->setCode($code);
                        $forget->setEmail($email);
                        $checkedEmail = $forget->checkEmail();
                        if(!empty($checkedEmail)){
                            $result = $forget->changeCode();
                            if($result === TRUE){
                                //send Mail
                                $mail = new PHPMailer(true);
                                try {
                                    //Server settings
                                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                                    $mail->isSMTP();                                            // Send using SMTP
                                    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                                    $mail->Username   = 'ecommercenti50@gmail.com';                     // SMTP username
                                    $mail->Password   = 'NTI@123456';                               // SMTP password
                                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                                    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                                    //Recipients
                                    $mail->setFrom('ecommercenti50@gmail.com', 'Ecommerce forget password code');
                                    $mail->addAddress($_POST['email']);     // Add a recipient
                                                
                                    // Content
                                    $mail->isHTML(true);                                  // Set email format to HTML
                                    $mail->Subject = 'forget passwrod code';
                                    $mail->Body    = $body;

                                    $mail->send();
                                    // echo 'Message has been sent';
                                } catch (Exception $e) {
                                    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                }
                                header("Location:verify.php?email=$email&sendCode=1");

                            }else{
                                echo ("<div class='alert alert-danger'> error connection </div>");
                            }
                        }else{
                            echo ("<div class='alert alert-danger'> No such Email like this </div>");

                        }
                        
                       

                

                        
                    }
                ?>
                <div class="htc__social__connect">
                    <h2>Or Login With</h2>
                    <ul class="htc__soaial__list">
                        <li><a class="bg--twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>

                        <li><a class="bg--instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>

                        <li><a class="bg--facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>

                        <li><a class="bg--googleplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                    </ul>
                </div>

        </div>
    </div>
</div>

<?php
include "footer.php";
?>