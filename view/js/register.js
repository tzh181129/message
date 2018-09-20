
    function check(form2){
        if(form2.user.value==""){
            alert("请输入账号");
            form2.user.focus();
            return false;
        }
        if(form2.email.value==""){
            alert("请输入邮箱");
            form2.email.focus();
            return false;
        }
        if(form2.phone.value==""){
            alert("请输入电话号码");
            form2.phone.focus();
            return false;
        }
        if(form2.password.value==""){
            alert("请输入密码");
            form2.password.focus();
            return false;
        }
    }
