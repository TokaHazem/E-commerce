<?php

include "header.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if(isset($_SESSION['user'])){
    header("Location: index.php");
}
 ?>
        <!-- End Header Style -->
        
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Offset MEnu -->
            <div class="offsetmenu">
                <div class="offsetmenu__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="off__contact">
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <ul class="sidebar__thumd">
                        <li><a href="#"><img src="images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/8.jpg" alt="sidebar images"></a></li>
                    </ul>
                    <div class="offset__widget">
                        <div class="offset__single">
                            <h4 class="offset__title">Language</h4>
                            <ul>
                                <li><a href="#"> Engish </a></li>
                                <li><a href="#"> French </a></li>
                                <li><a href="#"> German </a></li>
                            </ul>
                        </div>
                        <div class="offset__single">
                            <h4 class="offset__title">Currencies</h4>
                            <ul>
                                <li><a href="#"> USD : Dollar </a></li>
                                <li><a href="#"> EUR : Euro </a></li>
                                <li><a href="#"> POU : Pound </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset__sosial__share">
                        <h4 class="offset__title">Follow Us On Social</h4>
                        <ul class="off__soaial__link">
                            <li><a class="bg--twitter" href="#"  title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                            
                            <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                            <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                            <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                            <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Offset MEnu -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/sm-img/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/sm-img/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.html">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Login Register Area -->
        <div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(images/bg/5.jpg) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="login__register__menu" role="tablist">
                            <li role="presentation" class="login active"><a href="#login" role="tab" data-toggle="tab">Login</a></li>
                            <li role="presentation" class="register"><a href="#register" role="tab" data-toggle="tab">Register</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Start Login Register Content -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                                <form class="login" method="post" id="loginID">
                                    <input type="email" placeholder="Email" name="email">
                                    <input type="password" placeholder="Password*" name="password">
                                </form>
                                <div class="tabs__checkbox">
                                    <input type="checkbox">
                                    <span> Remember me</span>
                                    <span class="forget"><a href="sendcode.php">Forget Pasword?</a></span>
                                </div>
                                <div class="htc__login__btn mt--30">
                                    <button class="btn btn-primary" form="loginID" name="login">Login</button>
                                </div>
                                <?php
                                    if(isset($_POST['login'])){
                                            $email = $_POST['email'];
                                            $password = $_POST['password'];
                                            include_once "auth.php";
                                            $user = new auth();
                                            $user->setEmail($email);
                                            $user->setPassword($password);
                                            $loggedInUser = $user->login();
                                            if(empty($loggedInUser))
                                            {
                                                echo ("<div class = 'alert alert-danger'> Wrong Email or password </div>");
                                            }else{

                                                // print_r($loggedInUser->fetch_object());die;
                                                $userLogged = $loggedInUser->fetch_object();
                                                if($userLogged->status == 1 ){
                                                    $_SESSION['user'] = (array)$userLogged;
                                                    header("Location:index.php");
                                                }
                                                elseif($userLogged->status == 2)
                                                {
                                                    //send mail
                                                    $code = rand(11111,99999);
                                                    $user->setCode($code);
                                                    $result = $user->changeCode();
                                                    if($result === TRUE){
                                                        $body = "<h3> your verification code is:$code </h3>";
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
                                                                $mail->setFrom('ecommercenti50@gmail.com', 'Ecommerce verification code');
                                                                $mail->addAddress($_POST['email']);     // Add a recipient
                                                                            
                                                                // Content
                                                                $mail->isHTML(true);                                  // Set email format to HTML
                                                                $mail->Subject = 'verification code';
                                                                $mail->Body    = $body;
    
                                                                $mail->send();
                                                                // echo 'Message has been sent';
                                                            } catch (Exception $e) {
                                                                // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                                            }
                                                            header("Location:verify.php?email=$userLogged->email");

                                                    }else{
                                                        echo "<div class='alert alert-danger'> Try Again later </div>";
                                                    }
                                                   

                                                }
                                               
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
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div id="register" role="tabpanel" class="single__tabs__panel tab-pane fade">
                                <form class="login" method="post" id="registerForm">
                                    <input type="text" placeholder="first Name *" name="first">
                                    <input type="text" placeholder="last Name *" name="last">
                                    <input type="phone" placeholder="phone*" name="phone">
                                    <input type="email" placeholder="Email*" name="email">
                                    <input type="password" placeholder="Password*" name="password">
                                    <input type="password" placeholder="Confirm Password*" name="password_confirmation">
                                </form>
                              
                                <div class="tabs__checkbox">
                                    <input type="checkbox">
                                    <span> Remember me</span>
                                </div>
                                <div class="htc__login__btn">
                                    <button class="btn btn-danger" name="register" form="registerForm">register</button>
                                </div>

                                <?php
                                    if(isset($_POST['register'])){
                                        $first = $_POST['first'];
                                        $last = $_POST['last'];
                                        $phone = $_POST['phone'];
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];
                                        $password_confirmation = $_POST['password_confirmation'];
                                        $code = rand(11111,99999);

                                        if(!preg_match("^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$^",$password)){
                                            echo "<div class='alert alert-danger'>Password must be Minimum eight characters, at least one letter and one number </div>";
                                        }else{
                                            if($password == $password_confirmation){
                                                //logic
                                                // validate on email
                                                // validate on phone
                                                include_once "auth.php";
                                                $user = new auth();
                                                $user->setFirst($first);
                                                $user->setLast($last);
                                                $user->setphone($phone);
                                                $user->setEmail($email);
                                                $user->setPassword($password);
                                                $user->setCode($code);
                                                $result = $user->addData();
                                                // var_dump ($result);
                                                if($result === TRUE){
                                                    // send mail
                                                    $body = "<h3> your verification code is:$code </h3>";
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
                                                            $mail->setFrom('ecommercenti50@gmail.com', 'Ecommerce verification code');
                                                            $mail->addAddress($_POST['email']);     // Add a recipient
                                                                        
                                                            // Content
                                                            $mail->isHTML(true);                                  // Set email format to HTML
                                                            $mail->Subject = 'verification code';
                                                            $mail->Body    = $body;

                                                            $mail->send();
                                                            // echo 'Message has been sent';
                                                        } catch (Exception $e) {
                                                            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                                        }

                                                    header("Location: verify.php?email=$email");
                                                }else{
                                                    echo "<div class='alert alert-danger'> problem in server </div>";
                                                }
                                                
                                            }else{
                                                echo "<div class='alert alert-danger'>Password not matched</div>";
                                            }
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
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
                <!-- End Login Register Content -->
            </div>
        </div>
        
        <!-- End Login Register Area -->
        <!-- Start Footer Area -->
<?php include "footer.php" ?>