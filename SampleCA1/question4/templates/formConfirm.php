<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Success!</title>
</head>
<body>
    Data Recived:
    <br>
    <br>
    Name: <?=$userName ?>
    <br>
    Age: <?=$userAge ?>
    <br>
    User Type:
    <?php
    if (is_null($isLect)) echo '(not known)';
    else echo 'lecturer';
    ?>
</body>
</html>