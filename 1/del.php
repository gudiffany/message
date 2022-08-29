<?php
include "conn.php";
session_start();
if ($_SESSION["username"]) {
    $id = $_GET['id'];
    $username = mysqli_real_escape_string($conn,$_SESSION["username"]);
    $sql = "DELETE FROM `liuyan` WHERE `liuyan`.`id` = $id and `liuyan`.`username` = $username";
$conn->query($sql);
header("Location:liuyan.php");
}