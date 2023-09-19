<?php

class LoginContr extends Login {
    private $uid;
    private $pwd;


    public function __construct($uid, $pwd){
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser(){
        if ($this->emptyInput()== false) {
        header("location:index.php?error=emptyinput");  
        $message = "This is an alert message.";
        echo '<script type="text/javascript">alert("' . $message . '");</script>';      
        exit();
        }

        $this-> getUser($this->uid, $this->pwd);

    }

    private function emptyInput(){
        echo "UID: " . $this->uid . "<br>";
        echo "Password: " . $this->pwd . "<br>";
    
        $result = true;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result; // Move the return statement inside the function block
    }
    
}

?>
