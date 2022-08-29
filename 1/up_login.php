<?php
session_start();
include "conn.php";
function login($conn)
{
    if (isset($_POST['mysubmit'])) {
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        $sql = "select count(*) from user where username ='$username'and password='$password'";
        $res = mysqli_query($conn, $sql) or die('You tried to be smart, Try harder!!!! :( ');
        $row = mysqli_fetch_row($res);
        if (!$row[0] == 0) {
            return $row[0];
        } else {
            return 0;
        }
    }
}
$login = login($conn);
if (!$login == 0) {
    $_SESSION["username"] = $_POST["username"];
    setcookie("Auth", 1, time() + 3600);
    header('Location: liuyan.php');
} else {

    ?>
    <script>alert("error")</script>
    <?php
    header('refresh:0, url=login.php');
}
