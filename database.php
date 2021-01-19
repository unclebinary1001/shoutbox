<?php
//Connect to MySQL
//$con = mysqli_connect("localhost","root",'',"shoutit");

//Remote database connection
$con = mysqli_connect("remotemysql.com","NhQd82hxIE",'8aIOzEjsKx',"NhQd82hxIE");

//Test
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
?>