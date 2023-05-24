<?php
include "header.php";
?>

<div class="container">
    <div class="row ">

        <div class="col-12">

                <form class="login" method="post" id="loginID">
                    <!-- <input type="email" placeholder="Email" name="email"> -->
                    <input type="password" placeholder="Type new password *" name="password">
                    <input type="password" placeholder="Confirm password *" name="password_confiramtion">

                </form>
                <div class="htc__login__btn mt--30">
                    <button class="btn btn-primary" form="loginID" name="verify">Change Password</button>
                </div>
                <?php
                    if(isset($_POST['verify'])){
                       $password = $_POST['password'];
                       $password_confiramtion = $_POST['password_confiramtion'];
                        if(isset($_GET['email'])){
                            $email = $_GET['email'];
                        }else{
                            echo "<div class='alert alert-danger'> Error connection </div>";
                        }

                       if(!preg_match("^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$^",$password)){
                        echo "<div class='alert alert-danger'>Password must be Minimum eight characters, at least one letter and one number </div>";
                        }
                        else{
                            if($password == $password_confiramtion){
                             // update password
                             include "auth.php";
                             $changePass = new auth();
                             $changePass->setPassword($password);
                             $changePass->setEmail($email);
                             $result = $changePass->changePassword();
                                if($result === TRUE){
                                    header("Location: login-register.php");
                                }else{
                                    echo "<div class='alert alert-danger'>Password not Saved</div>";
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
    </div>
</div>

<?php
include "footer.php";
?>

