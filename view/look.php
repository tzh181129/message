
<head>
    <link rel="stylesheet" href="css/look.css" type="text/css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
        function deleteMessage(id) {
            $("#id").val(id);
            $("#form1").submit();
        }
        </script>

</head>
<body>
<?php session_start(); ?>
<div float='left' >欢迎<?php echo $_SESSION['username']; ?>登录留言板</div>
<table border=1 width=700px  align=center>
<h3 align=center>查看留言</h3>
    <tr><td width="50px" align="center">用户编号</td>
        <td width="350px" align="center">留言内容</td>
        <td width="200px" align="center">发表时间</td>
        <td width="50px"  align="center">回复</td>
        <td width="50px" align="center">删除</td>
    </tr>
    <?php
    include_once '../includes/guestbook.php';
    $dbhelper=new Guestbook();
    $users=$dbhelper->select();
    if(!empty($users)) {
        ?>
        <?php
        foreach($users as $user){
            ?>
            <tr>
                <?php $_SESSION['no']=$user['id'];?>
                <td><?php  echo $user['user_id'];?></td>
                <td><a href=../view/allreply.php?reply_id=<?php echo $user['id'];?>><?php  echo $user['content']; ?></a></td>
                <td><?php echo $user['createtime']; ?></td>
                <td><a href="../view/reply.php">回复</a></td>
                <td><a href=../controller/guestbook_action.php?id=<?php echo $user['id'];?>>删除</a></td>
            </tr>
        <?php } ?>
    <?php }else{
        echo "暂无留言";
    }
    ?>
	</table>

</body>
