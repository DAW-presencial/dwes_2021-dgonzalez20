<?php
$host="localhost";
$db_name="php_beginner_crud_level_1";
$username="root";
$password="";
try {
    $conn=new PDO("mysql:host={$host};dname={$db_name}",$username,$password);

} catch (PDOException $exception) {
    echo "Connection error:" . $exception->getMessage();
}
?>