<?php
//   1.连接数据库
//   2.设置sql语句
//   3.执行sql语句
//    4.断开连接    
header("Content-type: text/html; charset=utf-8");
// 设置跨域
//    1.
define('HOME', '127.0.0.1');
define('UNAME', 'root');
define('PWD', 'root');
define('BANK', 'blogs');

// 执行语句

function  my_exe($sql)
{

    //    1.
    $link =  mysqli_connect(HOME, UNAME, PWD, BANK);
    //   3.执行sql语句
    $r =  mysqli_query($link, $sql);
    if ($r) {
        return [['msg' => '操作成功', 'status' => '200']];
    }
    mysqli_close($link);
}

// $sql = "insert into admin (username,password) values ('admin',123456)";

// my_exe($sql);


// 查询语句

function my_query($sql)
{
    // 1.连接数据库
    $link =  mysqli_connect(HOME, UNAME, PWD, BANK);

    // 2.执行语句
    $r = mysqli_query($link, $sql);

    // 获取结果集的行数
    $num = mysqli_num_rows($r);

    // 判断是否有数据

    if (!$r || $num == 0) {
        mysqli_close($link);
        return false;
    }

    $data = [];
    // 循环取数据
    for ($i = 0; $i < $num; $i++) {
        $data[] = mysqli_fetch_assoc($r);
    }
    // 断开连接
    mysqli_close($link);
    return  $data;
}



// echo '<pre>';
// print_r(my_query($sql));
// echo '</pre>';
