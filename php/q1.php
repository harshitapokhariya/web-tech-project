<?php
session_start();
$_SESSION['user']='Harshita';
?>

<h1>Session Started</h1>
<p>Welcome <?php echo $_SESSION['user']; ?></p>