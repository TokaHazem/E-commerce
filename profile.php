<?php include "header.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
?>

<div class="container">
    <div class="row ">
        <?php
        $id = $_SESSION['user']['id'];
        include "auth.php";
        $user = new auth();
        $user->setID($id);
        $userData = $user->getSingleUSer();
        $userDataObject = $userData->fetch_object();
        // print_r($_SERVER);
        ?>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="card" style="width: 18rem;">
                    <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/nti/tmart/<?php echo $userDataObject->image ?>" class="card-img-top" alt="...">
                    <input type="file" name="image">
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <label for="">FirstName: </label>
                            <input type="text" name="first" value="<?php echo $userDataObject->first ?>">
                        </li>
                        <li class="list-group-item">
                            <label for="">LastName: </label>
                            <input type="text" name="last" value="<?php echo $userDataObject->last ?>">
                        </li>
                        <li class="list-group-item">
                            <label for="">phone: </label>
                            <input type="text" name="phone" value="<?php echo $userDataObject->phone ?>">
                        </li>
                        <li class="list-group-item">
                            <label for="">email: </label>
                            <input type="email" name="email" value="<?php echo $userDataObject->email ?>">
                        </li>
                        <li class="list-group-item">
                            <a href="changepassword.php?email=<?php echo $userDataObject->email ?>
                            ">Change Password ? </a>
                        </li>


                    </ul>
                    <div class="card-body">
                        <li class="list-group-item">
                            <button class="form-control btn btn-primary">Update Profile</button>
                        </li>
                    </div>
                </div>
                <?php

                if (isset($_POST['phone'])) {
                    $first = $_POST['first'];
                    $last = $_POST['last'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $user->setFirst($first);
                    $user->setLast($last);
                    $user->setPhone($phone);
                    $user->setEmail($email);
                    $check = $user->checkEmail();
                    if (isset($_FILES['image']['name'])) {
                        $directory = "uploads/users/";
                        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $imageName = time() . '.' . $extension;
                        $halfPath = $directory . $imageName;
                        $flag = 0;
                        if (!in_array($extension, ['png', 'jpg'])) {
                            echo ("<div class='alert alert-danger'> you must upload png or jpg photos only </div>");
                            $flag = 1;
                        }

                        if ($_FILES['image']['size'] > 1000000) {
                            echo ("<div class='alert alert-danger'> the file too large </div>");
                            $flag = 1;
                        }
                        if ($flag != 1) {

                            if (move_uploaded_file($_FILES['image']['tmp_name'], $halfPath)) {

                                $user->setImage($halfPath);
                            } else {
                                echo ("<div class='alert alert-danger'> Sorry, there was an error uploading your file.</div>");
                            }
                        } else {
                            // echo $flag;
                        }
                    }
                    $result = $user->updateData();
                    if ($result === TRUE) {
                        header("Location:profile.php");
                    }

                    if (empty($check)) {
                        $changedemail = $user->changeEmail();
                        if ($changedemail === TRUE) {
                            $user->setStatus(2);
                            $status = $user->changeStatus();
                            if ($status === TRUE) {
                                $code = rand(11111, 99999);
                                $user->setCode($code);
                                $changedcode = $user->changeCode();
                                if ($changedcode === TRUE) {
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
                                    header("Location:verify.php?email=$email");
                                 }
                               
                            }
                        }
                    } else {
                        echo ("<div class = 'alert alert-danger'> This Email is Already Exist </div>");
                    }
                    // print_r($_FILES);die;


                }

                ?>
            </form>

        </div>
    </div>
</div>

<?php include "footer.php" ?>