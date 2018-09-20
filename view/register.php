
<html>
<head>
<link rel="stylesheet" href="css/register.css" type="text/css">
   <script type="text/javascript"  src="js/register.js"></script>
</head>
  <body >
      <form action="../controller/user_action.php" method="post" name="form2" onSubmit="return check(this)">
	    <table border=0 align=center height=300 >
		  <caption>欢迎注册留言板</caption>
		  <tr >
		    <td width=100px>账号：</td><td><input type=text name=username></td>
		  </tr>
		  <tr >
		    <td width=100px>邮箱：</td><td><input type=email name=email ></td>
		  </tr>
		  <tr>
		    <td width=100px >手机号码：</td><td><input type=text name=phone ></td>
		  </tr>
		  <tr>
		    <td width=100px >密码：</td><td><input type=password name=userpwd>请输入6位数字</td>
		  </tr>
            <input type="hidden" name="action" value="register">‪
		  <tr>
		    <td colspan=2 align=center>
			<input type=submit value="立即注册" >&nbsp;&nbsp;&nbsp;&nbsp;<a href="../view/login.php">返回登录</a></td>
		  </tr>
		</table>
	  </form>
  </body>
</html>