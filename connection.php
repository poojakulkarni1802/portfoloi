<?php
$name=$_POST['name'];
$sug=$_POST['suggestion'];
$conn=new mysqli('localhost','root','','query');
if($conn->connect_error)
{
    die('Connection Failed:'.$conn->connect_error);
}
else{
    $stm=$conn->prepare('insert the sugg(name,suggestion)
    values(?,?,?)');
    $stm->bind_param("hello",$name,$sug);
    $stm->execute();
    $stm->close();
    $conn->close();
}
?>