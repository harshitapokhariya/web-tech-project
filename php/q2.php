<?php
setcookie('username','Harshita',time()+3600);
?>

<h1>Cookie Example</h1>

<?php
if(isset($_COOKIE['username'])){
echo 'Welcome '.$_COOKIE['username'];
}
?>