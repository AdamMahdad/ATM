<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <title>ATM</title>
</head>

<body>
    <div class="navbar">
        <div class="begin">
            <a href="">ATM</a>
        </div>

        <div class="midden">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">contact</a></li>
                <li><a href="#">login</a></li>
                <li><a href="#">signup</a></li>

            </ul>
        </div>

        <div class="einde">
                    <button class="search">
                        <span id="search" class="material-symbols-outlined">
                            search
                        </span>
                    </button>
                    <input type="text" class="input-search" placeholder="Type to Search...">
                </div>
    </div>

    <div class="wrapper">
        <div class="form-box login">
            <h2>login</h2>
            <form action="login.php" method="post">
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="text" name="uid" required>
                    <label for="">Email or Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="password" name="pwd" required>
                    <label for="">Password</label>
                </div>
                <div class="remember-forgot">
                    <label for=""><input type="checkbox" name="" id="">remember me</label>
                    <a href="">forgot password?</a>
                </div>
                <button type="submit" name="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Dont have an account?<a href="#" class="register-ink">register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="signup.php" method="post">
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="text" name="uid" required>
                    <label for="">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="password" name="pwd" required>
                    <label for="">Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="password" name="pwdrepeat" required>
                    <label for="">Repeat Password</label>
                </div>
                <div class="remember-forgot">
                    <label for=""><input type="checkbox" name="" id="">Agree term and condition</label>
                </div>
                <button type="submit" name="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>