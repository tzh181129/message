
<html>
<head>
    <script type="text/javascript"  src="js/reply.js"></script>
</head>
<body>
<form action="../controller/guestbook_action.php" method="post" name=form2>
    <input type="hidden" name="action" value="reply">
<table width=600 height=200 align=center>
 <caption><h3>回复内容</h3></caption>
    <?php session_start();?>
 <tr>
 <td>用户名：</td><td><input type="text" value="<?php echo $_SESSION['username'];?>"></td></tr>
 <tr>
 <td>回复内容：</td><td><textarea cols=40 rows=10 name="recontent"></textarea></td></tr>
 <tr><td align=right><input type=submit value="提交"></td>
 <td align=center><input type=reset value="重置"></td></tr>
 </table>
 </form>
</body>
</html>
