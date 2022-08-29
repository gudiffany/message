<?php
include "conn.php";
session_start();
if(mb_strlen($_POST["text"])>200){
    ?>
    <script>alert("your text is too long ,the maxlength is 200!!")</script>
    <?php
    header('refresh:0, url=liuyan.php');
}
else if (isset($_POST['submit'])) {
    $username=mysqli_real_escape_string($conn,$_SESSION["username"]);
    $text = mysqli_real_escape_string($conn, $_POST["text"]);
    $time = date("Y-m-d H:i:s",time());
    $sql = "insert into liuyan (username,text,time) values(\"$username\",\"$text\",\"$time\")";
    $conn->query($sql);
    header("Location:liuyan.php");
}

