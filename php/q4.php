<?php
if(isset($_COOKIE['lastvisit']))
echo 'Last Visit: '.$_COOKIE['lastvisit'];
else
echo 'First Visit';

setcookie('lastvisit',date('Y-m-d H:i:s'),time()+3600);
?>