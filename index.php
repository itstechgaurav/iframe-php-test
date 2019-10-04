<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php

if(isset($_SERVER['HTTP_REFERER'])) {
    echo "<h3>IFRAME</h3>";
} else {
    echo "<h3>Normal Page</h3>";

}


?>
    <iframe width="100%" height="768px" src="/abc.php" frameborder="0"></iframe>
</body>

</html>
