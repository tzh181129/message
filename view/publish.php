
<html>
<head>
    <link rel="stylesheet" href="css/publish.css" type="text/css" />
    <script type="text/javascript"  src="js/publish.js"></script>

</head>
<body>
<?php session_start(); ?>
<div float='left' >欢迎<?php echo $_SESSION['username'];?>登录留言板</div>
<form action="../controller/guestbook_action.php" method="post" name=form1>
    <input type="hidden" name="action" value="publish">
<table width=600 height=390 align=center>
 <caption><h3>发表留言</h3></caption>
 <tr>
 <td>用户名：</td><td><input type="text" name="name" maxlength=15 value="<?php echo $_SESSION['username'];?>"></td></tr>
 <tr>
 <td>留言内容：</td><td><textarea cols=50 rows=10 name="content"></textarea></td></tr>
 <tr><td align=right><input type=submit value="提交" onClick="check()"></td>
 <td align=center><input type=reset value="重置"></td></tr>
 </table>
 </form>
</body>
</html>
 