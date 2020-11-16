<?php
session_start();
if(!isset ($_SESSION ['username'])) {
    header('location:index.html');
}
?>
<html>
    <head>
        <title> home page</title>
</head>
<body>
    <a href="logout.php" style="float:right">LOG OUT</a>

    <h1> welcome <?php  echo $_SESSION ['username']; ?> </h1>
</body>
</html>