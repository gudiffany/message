<?php
session_start();
include "conn.php";
if (!isset($_COOKIE["Auth"])) {
    if (!isset($_SESSION["username"])) {
        header('Location: login.php');
    }
    header('Location: login.php');
}
?>
<form name="login_out" method="POST" action="login_out.php">
<div align="right">
    <table>
        <p><input name="submit1" id="submit1" type="submit" value="退出账号"></p>
    </table>
</div>
</form>
<body bgcolor="#1e90ff"></body>
<div align="center"
<table style="margin-top: 20px;">
    <h1><font size="6">我的留言板</font></h1>
    <form name="add" method="POST" action="add.php">
        <textarea name="text" id="text" cols="60" rows="10" placeholder="限制字数200"
                  οnkeydοwn='countChar("text","counter");' οnkeyup='countChar("text","counter");'
                  maxlength="200"></textarea>
        <p><input name="submit" type="submit" value="发表留言"></p>
    </form>
</table>
</div>

<div align="center">
    <h2>留言列表</h2>
    <ul>
        <?php
        $sql = "SELECT * FROM `liuyan` ORDER BY `liuyan`.`id` DESC";
        // ORDER BY `liuyan`.`id` DESC 加上这个是降序排列
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <li>
                    <p align="left"><?php echo $row["id"]; ?>楼</p>
                    <p>留言内容：<?php echo htmlentities($row["text"]); ?></p>
                    <p>留言人：<?php echo htmlentities($row["username"]); ?></p>
                    <p>留言时间：<?php echo $row["time"]; ?></p>
                    <p>
                        <a href="del.php?id=<?php echo $row['id'];?>">删除</a>
                    </p>
                </li>
                <?php
            }
        } else {
            echo "暂无留言";
        }
        ?>
    </ul>
</div>

<script language="javascript">
    function countChar(textareaName, spanName) {
        document.getElementById(spanName).innerHTML = document.getElementById(textareaName).value.length;
    }
</script>
