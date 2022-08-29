<?php
include "conn.php";
?>
    <div align="center" style="margin-top:150px;">
        <a style="font-size:50px;color:#FFFF00" href='login.php'>login</a>
    </div>

<?php
if(mb_strlen($_POST["username"])>20||mb_strlen($_POST["password"])>20){
    ?>
    <script>alert("your username or password is too long ,the maxlength is 20!!")</script>
    <?php
    header('refresh:0, url=login.php');
}
else if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $re_password = mysqli_real_escape_string($conn, $_POST["re_password"]);

    $sql = "select count(*) from user where username ='$username'";
    $res = mysqli_query($conn, $sql) or die('You tried to be smart, Try harder!!!! :( ');
    $row = mysqli_fetch_row($res);
    if (!$row[0] == 0) {
        ?>
        <body bgcolor="#1e90ff"></body>
        <script>alert("该账号已存在，请使用其他名字")</script>
        <?php
        header('refresh:1, url=registered.php');
    } else {
        if ($password == $re_password) {
            # Building up the query........

            $sql = "insert into user ( username, password) values(\"$username\", \"$password\")";
            $res = mysqli_query($conn, $sql) or die('Error Creating your user account,  : ' . mysqli_error());
            ?>
            <body bgcolor="#1e90ff"></body>
            <div font align="center">
                <table style="margin-top:30px;">
                    <td style="text-align:right">
                        <font size="5" color="#FFFF00">
                            <strong>If it does not redirect, click the login button on top</strong></font>
                    </td>
                </table>
            </div>
            <script>alert('Please remember your account number and password')</script>
            <?php
            header('refresh:1, url=login.php');
        }

    }
}