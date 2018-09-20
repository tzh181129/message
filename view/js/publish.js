
    function check(){
        if(form1.name.value==""){
            alert("请输入用户名");
            form1.name.focus();
            return false;
        }
        if(form1.text.value==""){
            alert("请输入留言内容");
            form1.text.focus();
            return false;
        }
    }
