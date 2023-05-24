<?php
include "header.php";
?>
<div class="container">
    <div class="row ">

        <div class="col-12">

                <form class="login" method="post" id="loginID">
                    <!-- <input type="email" placeholder="Email" name="email"> -->
                    <input type="text" placeholder="verification code*" name="code">
                </form>
                <div class="htc__login__btn mt--30">
                    <button class="btn btn-primary" form="loginID" name="verify">Verify</button>
                </div>
                <?php
                    if(isset($_POST['verify'])){
                        $code = $_POST['code'];
                        if(isset($_GET['email'])){
                            $email = $_GET['email'];
                        }else{
                            echo "<div class='alert alert-danger'> Error connection </div>";
                        }

                        include_once "auth.php";
                        $user = new auth();
                        $user->setCode($code);
                        $user->setEmail($email);
                        $verifiedUser = $user->verifyEmail();
                        // print_r($verifiedUser);die;
                        if(empty($verifiedUser)){
                            echo "<div class='alert alert-danger'> Wrong Code </div>";
                        }else{
                            if(isset($_GET['sendCode']) && $_GET['sendCode'] == 1){
                                header("Location:forgetPassword.php?email=$email");
                            }else{
                                $user->setStatus(1);
                                $status = $user->changeStatus();
                                if($status === TRUE){
                                    // echo "<div class='alert alert-success'> user is verified </div>" 
                                    // creat session
                                    session_start();
                                    $x = 1;
                                    while($row = $verifiedUser->fetch_assoc()){
                                        if($x == 1)
                                        {
                                            $_SESSION['user'] = $row;
                                        }
                                        $x++;
                                    }
                                    header('Location: index.php');
    
    
                                }else{
                                    echo "<div class='alert alert-danger'> Error Connection status </div>";
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
    </div>
</div>

<?php
include "footer.php";
?>