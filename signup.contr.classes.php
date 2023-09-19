<?php

class SignupContr extends Signup {
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    public function signupUser(){
        if ($this->emptyInput()== false) {
        header("location:index.php?error=emptyinput");        
        exit();
        }

        if ($this->invalidEmail()== false) {
            header("location:index.php?error=email");        
            exit();
        }

        if ($this->pwdMatch() == false) {
            $message = "Password mismatch alert message.";
            echo '<script type="text/javascript">alert("' . $message . '");</script>';
            echo '<script type="text/javascript">setTimeout(function(){ window.location.href = "index.php?error=passwordmatch"; }, 1000);</script>';
            exit();
        }
        

        if ($this->uidTakenCheck()== false) {
            header("location:index.php?error=erroremailtaken");        
            exit();
        }

        $this-> setUser($this->uid, $this->pwd, $this->email);

    }

    private function emptyInput(){
        $result = true;
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result; // Move the return statement inside the function block
    }

    private function invalidEmail(){
        $result = true;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result; 
    }

    private function pwdMatch(){
        $result = true;
        if ($this->pwd !== $this->pwdrepeat) {
            $result = false;
        }else {
            $result = true;
        }
        return $result; 
    }

    private function uidTakenCheck(){
        $result = true;
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result; 
    }
    
}

?>
