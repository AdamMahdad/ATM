<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welkom op onze pagina!!</h1>
    <?
        if (isset($_SESSION["userid"])) {
            ?>
            <li><a href="#">
                <?php echo $_SESSION["users_uid"]; ?>
            </a></li>
            <?
        }
        ?>

        <li><a href="logout.php">logout</a></li>

</body>
</html>