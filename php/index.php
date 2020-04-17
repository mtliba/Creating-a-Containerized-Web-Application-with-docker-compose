<?php
$host = 'db';
$user = 'maroine';
$password = 'maroine';
$db = 'cdweb';
$conn = new mysqli($host,$user,$password,$db);
if($con->connect_error){
    echo '!!!! faild !!!!!' . $conn->connect_error;

}
echo ' it s great all is done you have containerized your web app !!! ';
?>