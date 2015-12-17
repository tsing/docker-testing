<?php
 $mysql = new mysqli('db', 'root', $_ENV['MYSQL_ROOT_PASSWORD']);
 echo 'Connected to mysql: '.$mysql->host_info;
?>
