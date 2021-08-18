 <?php

// 引入其他php
require('01mySql.php');


  // 创建sql语句
    
  $sql="create table user1(id int(5) primary key auto_increment,mobile varchar(20),password varchar(20))";



// 执行sql
  $result=mysqli_query($conn,$sql);

    if($result){
        echo "数据表创建成功!";

    }else{
        echo "数据表创建失败!";

    }



// 关闭资源
    mysqli_close($conn);








 ?>