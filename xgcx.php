
<?php

if(empty($_POST['bt']) || empty($_POST['xm']) || empty($_POST['nr'])){
    die('对不起，您没有输入不能提交');
}
$ly = file_get_contents ('./ly.txt');
$lyy = json_decode($ly,true);
$lyy[$_POST['id']] = $_POST;
$lyyy = json_encode($lyy);
file_put_contents('./ly.txt',$lyyy);
echo '修改成功2秒后返回';
header('refresh:2;url=./index.php');
?>
