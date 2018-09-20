
 <head>
     <link rel="stylesheet" href="css/allreply.css" type="text/css" />
</head>
<body>
	<table border=1 width=700px height=100px align="center">
        <h3 align="center">全部回复内容</h3>
        <tr><td width="50px" align="center">回复编号</td>
            <td width="350px" align="center">回复内容</td>
            <td width="200px" align="center">回复时间</td>

        </tr>
        <?php
        include_once '../includes/guestbook.php';
        $reply_id=$_GET['reply_id'];
        $reply=new Guestbook();
        $users=$reply->re_select($reply_id);
        if(!empty($users)) {
            ?>
            <?php
            foreach($users as $user){
                ?>
                <tr>
                    <td><?php  echo $user['reply_id'];?></td>
                    <td><?php  echo $user['recontent']; ?></td>
                    <td><?php echo $user['retime']; ?></td>
                </tr>
            <?php } ?>
        <?php }else{
            echo "暂无回复";
        }
        ?>
 </body>
 