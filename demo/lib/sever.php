<?php
include('./mysql.php');
//获取访问的方法名称
$fn=$_GET['fn'];
//add();
$fn(); //add()

//添加数据
function add(){
    $title = $_POST['title'];
    $pos = $_POST['pos'];
    $idea = $_POST['idea'];

    //拼接sql语句，执行插入
    $sql = "insert into problem values(null,'$title','$pos','$idea')";
    //打印sql，检验是否整成
    // echo $sql;
    $res = query($sql);

    if($res){
        echo 1;//成功
    }else{
        echo 2;//失败
    }

}

//删除数据
// function del()
//  {
//    $id = $_GET['id'];
//    $sql = "delete from problem where id = $id";
//    $res = query($sql);
//     if($res){
//       echo 1; // 成功
//     }else{
//       echo 2; // 失败
//     }
//  }

function del(){
  $id=$_GET['id'];
  $sql='delete from problem where id = $id';
  $res= query($sql);
  if($res){
    echo 1; // 成功
  }else{
    echo 2; //失败
  }
}

// 查询数据
function sel(){
    $sql = 'select * from problem';
    $res = select($sql);
    if($res){
        echo json_encode($res);
    }
}


?>