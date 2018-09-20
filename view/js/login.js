
    function check(form1){
        if(form1.dname.value==""){
            alert("请输入用户名");
            form1.dname.focus();
            return false;
        }
        if(form1.dpassword.value==""){
            alert("请输入密码");
            form1 .dpassword.focus();
            return false;
        }
    }
