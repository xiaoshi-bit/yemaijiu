 <?php
 header('Content-type:text/html;charset=utf-8');

// 数据库地址
$db_locations ="localhost";
// 用户名
$db_accounts ="root";
// 密码
$db_passwords ="";
// 名称
$db_dataBase_name ="webSeven";
// 端口
$db_port='3306';


// 创建连接
$conn=mysqli_connect($db_locations,$db_accounts,$db_passwords,$db_dataBase_name,$db_port);



// 检测连接
if(!$conn){
    die('连接失败'.mysqli_connect_error());
}


// 设置当前mysqli操作数据库的编码
mysqli_query($conn,"set names 'utf8mb4'");

//此方法适用于php5.4以下版本 json中文不转以的使用
function json_encode_ex($array) {
    if (version_compare(PHP_VERSION,'5.4.0','<')) {
        $str = json_encode($array);
        $str = preg_replace_callback (
                "#\\\u([0-9a-f]{4})#i",
                function($matchs) {
                    return iconv('UCS-2BE', 'UTF-8',  pack('H4',  $matchs[1]));
                },
                $str
            );
        return $str;
    } else {
        return json_encode($array, JSON_UNESCAPED_UNICODE);
    }
}




 ?>