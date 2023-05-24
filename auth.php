<?php
include "operations.php";
include "database.php";
// include "generalTrait.php";
class auth extends database implements operation {
    // use generalTrait;
    private $id;private $first;private $last;private $phone;private $email;private $code;private $status;private $created_at;
    private $image;
    
    //seter
    public function setID($id)
    {
        $this->id = $id;
    }
    public function setFirst($first)
    {
        $this->first = $first;
    }

    public function setLast($last)
    {
        $this->last = $last;
    }

    public function setphone($phone)
    {
        $this->phone = $phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $password = sha1($password);
        $this->password = $password;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    //getter
    public function getID()
    {
        return $this->id;
    }
    public function getFirst()
    {
        return $this->first;
    }

    public function getLast()
    {
        return $this->last;
    }

    public function getphone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
       return  $this->password;
    }
    public function getCode()
    {
       return  $this->code;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    

    public function updateData(){

        $query = "UPDATE `users` SET `users`.`first` = '$this->first', `users`.`last` = '$this->last' ,`users`.`phone` = '$this->phone' ";
            // print_r($this);die;
            if($this->image){
                $query .=  ",`users`.`image` = '$this->image'";
            }
        $query .=  "WHERE `users`.`id` = $this->id " ;
         echo $query;
        return $this->runDML($query);
    }
    public function addData(){
        $query = "INSERT INTO `users` (`users`.`first`,`users`.`last`,`users`.`phone`,`users`.`email`,`users`.`password`,`users`.`code`) 
        VALUES ('$this->first','$this->last','$this->phone','$this->email','$this->password','$this->code')";
        // echo($query);die;
        // $body = "<h3> your verification code is:$this->code </h3>";
        // $this->sendMail($this->email,$body);
        return $this->runDML($query);

    }
    public function selectData(){

    }
    public function deleteData(){

    }

    public function verifyEmail()
    {
        $query = "SELECT `users`.* FROM `users` WHERE `users`.`code` = $this->code AND `users`.`email` = '$this->email' LIMIT 1";
        return $this->runDQL($query);

    }

    public function changeStatus()
    {
        $query = "UPDATE `users` SET `users`.`status` = $this->status WHERE `users`.`email` = '$this->email'";
        return $this->runDML($query);
    }

    public function login()
    {
        $query = "SELECT `users`.*  FROM `users` WHERE `users`.`email` = '$this->email' AND `users`.`password` = '$this->password' ";
        return $this->runDQl($query);
    }

    public function getUsers(){
        $query = "SELECT `users`.*  FROM `users` WHERE `users`.`id` >= 90";
        return $this->runDQl($query);

    }
    public function changeCode()
    {
        $query = "UPDATE `users` SET `users`.`code` = $this->code WHERE `users`.`email` = '$this->email'" ;
        return $this->runDML($query);
    }

    public function checkEmail()
    {
        $query = "SELECT `users`.* FROM `users` WHERE `users`.`email` = '$this->email' ";
        return $this->runDQL($query);

    }
    public function changePassword()
    {
        $query = "UPDATE `users` SET `users`.`password` = '$this->password' WHERE `users`.`email` = '$this->email' ";
        return $this->runDML($query);
    }

    public function getSingleUSer()
    {
        $query = "SELECT `users`.* FROM `users` WHERE `users`.`id` = $this->id";
        return $this->runDQL($query);
    }
    public function changeEmail()
    {
        $query = "UPDATE `users` SET `users`.`email` = '$this->email' WHERE `users`.`id` = '$this->id' ";
        return $this->runDML($query);
    }
    public function checkPassword()
    {
        $query = "SELECT `users`.* FROM `users` WHERE `users`.`password` = '$this->password'and`users`.`email` = '$this->email' ";
        return $this->runDQL($query);

    }

}

?>