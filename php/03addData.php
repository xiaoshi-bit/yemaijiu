<?php 




    require("01mySql.php");



    $mobile=$_GET["mobile"];
    $password=$_GET["password"];




    // 把用户提交的mobile和password参数变量作为拼接成sql语句 插入到数据库中
    $sql="insert into user1(mobile,password) values('$mobile','$password')";
    // $sql="select * from user1";


    $result=mysqli_query($conn,$sql);

// print_r($result) ;
    if($result){
        echo "用户注册成功!";

    }else{
        echo "用户注册失败!";

    }


    mysqli_close($conn);

 ?>
