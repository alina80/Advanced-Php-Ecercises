<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pass = isset($_POST['password']) ? $_POST['password'] : null;


    function checkComplexity(string $pass): bool
    {
        $conditions = ["/^.{6,}$/", "/.*[a-z]/", "/.*[A-Z]/"];

        foreach ($conditions as $regex) {
            if (!preg_match($regex, $pass)) {
                throw new Exception('Invalid password');
            }
        }
        return true;
    }

    $isValid = true;

    try {
        checkComplexity($pass);
    } catch (Exception $e) {
        $isValid = false;
        echo 'Message: ' . $e->getMessage();
    }
    if ($isValid){
        echo 'Password is valid';
    }
}
?>
<html lang="en">
    <head>
        <title>Check Password</title>
    </head>
    <body>
        <form action="./exercise1.php" method="post">
            <label>Check Password:
                <input type="text" name="password">
            </label>
            <input type="submit" value="Check">
        </form>
    </body>
</html>
