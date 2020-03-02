<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error!</title>
</head>
<body>
    Data received - errors:
    <br>
    <br>
    <?php
    foreach ($errorList as $err){
        print "- $err <br>";
    }
    ?>
</body>
</html>