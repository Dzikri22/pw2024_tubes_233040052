<?php

require 'functions.php';

if (isset($_POST["login"])) {
    $login = login($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
</head>
<body>
 

    <h1>Halaman Login</h1>

    <formaction="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login" value="login"></button>
            </li>
        </ul>

    </form>
    
</body>
</html>