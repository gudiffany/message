<?php
?>

<!DOCTYPE html>
<html lang="zh-CN">
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title><?php echo "register you username"; ?> </title>
<form name="mylogin" method="POST" action="up_registered.php">
    <body bgcolor="#1e90ff">
    <div align="center">
        <table style="margin-top:300px;">
            <tr>
                <td style="text-align:right">
                    <font size="5" color="#FFFF00">
                        <strong>Username:</strong></font>
                </td>
                <td style="text-align:left">
                    <input type="text" id="username" name="username" οnkeydοwn='countChar("username","counter");'
                           οnkeyup='countChar("username","counter");'
                           maxlength="20">
                </td>
            </tr>
            <tr>
                <td style="text-align:right">
                    <font size="5" color="#FFFF00">
                        <strong>Password:</strong>
                    </font>
                </td>
                <td style="text-align:left">
                    <input type="password" id="password" name="password" οnkeydοwn='countChar("password","counter");'
                           οnkeyup='countChar("password","counter");'
                           maxlength="20">
                </td>
            </tr>

            <tr>
                <td style="text-align:right">
                    <font size="5" color="#FFFF00">
                        <strong>Retype Password:</strong>
                    </font>
                </td>
                <td style="text-align:left">
                    <input name="re_password" id="re_password" type="password" value=""
                           οnkeydοwn='countChar("re_password","counter");' οnkeyup='countChar("re_password","counter");'
                           maxlength="20"/>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align:right">
                    <input name="submit" id="submit" type="submit" value="Register"/><br/><br/>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right">
                    <a style="font-size:1em;color:#FFFF00" href="login.php">come to login</a>
                </td>
            </tr>

        </table>
    </div>
    </body>
</form>
</html>
<script language="javascript">
    function countChar(textareaName, spanName) {
        document.getElementById(spanName).innerHTML = document.getElementById(textareaName).value.length;
    }
</script>