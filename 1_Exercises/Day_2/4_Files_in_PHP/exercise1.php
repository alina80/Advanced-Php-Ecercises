<?php
    if (isset($_FILES['upload'])){
        $tmpName = $_FILES['upload']['tmp_name'];
        $name = basename($_FILES['upload']['name']);
        $mainDir = __DIR__ . "/" . date('Y-m-d',time());
        $hash = md5($name);

        $firstSubDir = $mainDir . "/" . substr($hash,0,2);
        $secondSubDir = $firstSubDir . "/" . substr($hash,-2,2);

        if (!is_dir($mainDir)){
            mkdir($mainDir);
        }

        if (!is_dir($firstSubDir)){
            mkdir($firstSubDir);
        }

        if (!is_dir($secondSubDir)){
            mkdir($secondSubDir);
        }

        move_uploaded_file($tmpName, $secondSubDir . '/' . $name);
    }
?>
<html lang="en">
    <head>
        <title>File</title>
    </head>
    <body>
        <form action="./exercise1.php" method="post" enctype="multipart/form-data">
            <label>File:
                <input type="file" name="upload">
            </label>
            <input type="submit" value="Upload">
        </form>
    </body>
</html>
