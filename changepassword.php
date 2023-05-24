<?php
include "header.php";
?>
<div class="container">
    <div class="row ">
        <div class="col-12">
                <form class="login" method="post" id="loginID">
                    <!-- <input type="email" placeholder="Email" name="email"> -->
                    <input type="password" placeholder="Type old password *" name="oldpassword">
                    <input type="password" placeholder="Type new password *" name="newpassword">
                    <input type="password" placeholder="Confirm password *" name="password_confiramtion">
                </form>
                <div class="htc__login__btn mt--30">
                    <button class="btn btn-primary" form="loginID" name="verify">Change Password</button>
                </div>
               <?php 
                if(isset($_POST['verify'])){
                    $oldpass=$_POST['oldpassword'];
                    $password = $_POST['newpassword'];
                    $password_confiramtion = $_POST['password_confiramtion'];
                     if(isset($_GET['email'])){
                         $email = $_GET['email'];
                         include "auth.php";
                         $changePass = new auth();
                         $changePass->setPassword($oldpass);
                         $changePass->setEmail($email);
                         $checkpass=$changePass->checkPassword();
                         if(empty($checkpass))
                         {
                             echo"<div class='alert alert-danger'>Wrong Password </div>";
                         }else {
                            if(!preg_match("^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$^",$password)){
                                echo "<div class='alert alert-danger'>Password must be Minimum eight characters, at least one letter and one number </div>";
                                }
                                else{
                                    if($password == $password_confiramtion){
                                     // update password
                                    
                                     
                                     $changePass->setPassword($password);
                                    
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
                     }else{
                         echo "<div class='alert alert-danger'> Error connection </div>";
                     }

                    


                     
                 }
               ?>
        </div>
    </div>
</div>


<?php include "footer.php" ?>