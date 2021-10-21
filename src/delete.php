<?php 
//connect
$conn = mysqli_connect('localhost', 'root', '', 'quanlyduocpham','3306');
if(!$conn){
    die("Kết nối không thành công");
}

//lấy id

$id = $_GET['id'];

$sql = "delete from `drugs` where id = $id ";
$result = mysqli_query($conn, $sql);

if($result>0){
    header("Location: index.php");
}
else
echo $sql;

?>