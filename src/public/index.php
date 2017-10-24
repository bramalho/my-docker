<?php
$phpVersion = phpversion();

$mysqli = new mysqli('mysql', 'dev', 'dev');
if (mysqli_connect_errno()) {
    echo 'Connect failed: ' . mysqli_connect_error();
    exit;
}
$mysqlVersion = $mysqli->server_info;
$mysqli->close();
?>

<html>
<head>
    <title>My Docker</title>
</head>
<body>
<h2>It Works!</h2>
<p>
    <?php echo 'PHP v' . $phpVersion; ?>
    <br>
    <?php echo 'MySQL v' . $mysqlVersion; ?>
</p>
</body>
</html>
