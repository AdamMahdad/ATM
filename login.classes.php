<?php

class Login extends Dbh {

    protected function getUser($uid, $pwd){
        $stmt = $this->connect()->prepare('SELECT users_pdw FROM users WHERE users_uid = ? OR users_email = ?;');

        if (!$stmt->execute(array($uid, $uid))) {
            $stmt = null;
            header("location:index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pdw"]);

        if ($checkPwd == false) {
            $stmt = null;
            header("location: index.php?error=wrongpassword");
            exit();
        } elseif ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_pdw = ?;');

            if (!$stmt->execute(array($uid, $uid, $pwdHashed[0]["users_pdw"]))) {
                $stmt = null;
                header("location:index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["users_id"] = $user[0]["users_id"];
            $_SESSION["users_uid"] = $user[0]["users_uid"];

            $stmt = null;
        }
    }
}



?>
