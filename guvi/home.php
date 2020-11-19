<?php
session_start();
if(!isset ($_SESSION ['username'])) {
    header('location:index.html');
}
?>
<html>
    <head>
        <title> home page</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <a href="logout.php" style="float:right">LOG OUT</a>
    <div class="container">
  <div class="row">
    <div class="col"><?php  echo $_SESSION ['name']; ?></div>
    <div class="col"><?php  echo $_SESSION ['age']; ?></div>
    <div class="col"><?php  echo $_SESSION ['username']; ?></div>
  </div>
</div>

</body>
</html>
