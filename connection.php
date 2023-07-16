<?php
$servername="localhost";
$username="root";
$password='';
$dbase='query';
$conn= mysqli_connect($servername,$username,$password,$dbase) or die("unable to connect");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $suggest=$_POST['suggestion'];
    $sql="insert into suggestion(full_name,suggestion) values('$name','$suggest')";
    if(mysqli_query($conn,$sql))
    {
        echo"<script>alert('new record entered')</script>";
        echo"<script>window.open('index.html','_self')</script>";
    }
    else
    {
        echo"error".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>