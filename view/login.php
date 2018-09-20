<html>
<head>
    <link rel="stylesheet" href="css/login.css" type="text/css" />
    <script type="text/javascript"  src="js/login.js"></script>
</head>
<body>
<form action="../controller/user_action.php" method="post" name="form1" onSubmit="return check(this)"> ‪
<input type="hidden" name="action" value="login">
   <table border="0" width="300px " height="300px" align="center" >
       <caption>用户登录</caption>
        <tr>
            <td width="100px">用户名：</td><td ><input type="text" name="dname"  maxlength="15"></td>
        </tr>
        <tr>
            <td width="100px">密&nbsp;&nbsp;码：</td><td><input type="password" name="dpassword" maxlength="6"></td>
        </tr>
        <tr>
            <td width="100px" colspan="2" align="center"><input type="submit" name="submit" value="登录">&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="../view/register.php">立即注册</a></td>

        </tr>
   </table>
</form>
</body>
</html>