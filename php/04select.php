 <?php
 header('Content-type:text/html;charset=utf-8');
 require('01mySql.php');


$sql="select * from mayLike";


// 读取数据
$result=mysqli_query($conn,$sql);

while($arr=mysqli_fetch_assoc($result)){
    // print_r($arr);
    // echo "<br/>";
    // 创建一个数组 并且向数组中放入数据$arr 下次再执行到 数组不会反复创建 只会再次放入新的数据
    $data[]=$arr;
}

echo json_encode_ex($data);

    mysqli_close($conn);

 ?>