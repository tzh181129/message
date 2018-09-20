<?php
include_once '../database/mysql_helper.php';
class User
{
    private $username;
    private $userpwd;
    private $email;
    private $phone;
    private $sex;
    private $regtime;
    public $dname;

    public function _construct($username,$userpwd,$email,$phone,$sex,$regtime,$dname)
    {
        $this->username=$username;
        $this->userpwd=$userpwd;
        $this->email=$email;
        $this->phone=$phone;
        $this->sex=$sex;
        $this->regtime=$regtime;
        $this->dname=$dname;
    }

    public function insert($username, $userpwd, $email, $phone, $sex, $regtime)
    {
         $conn=new DBHelper();
        $sql = "insert into user(username,userpwd,email,phone,sex,regtime) values('$username','$userpwd','$email','$phone','$sex','$regtime')";
        $result = $conn->all($sql);
        if ($result === FALSE) {
            return FALSE;
        } else {
            return $result;
        }
    }

    public function getUserByName($dname)
    {
        $conn=new DBHelper();
        $sql = "select username,id from user where username='$dname'";
        $result=$conn->select($sql);
        if($result===FALSE){
            return FALSE;
        }else{
          session_start();
          foreach($result as $result){
          $_SESSION['username']=$result['username'];
          $_SESSION['id']=$result['id'];
          }
            return $result;
        }
    }

}
