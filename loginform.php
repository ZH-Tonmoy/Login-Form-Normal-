<?php
$conn=new mysqli("localhost","root","","login");
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $pass= $_POST['pass'];
    mysqli_query($conn,"insert into login (Name,Password) values('$name','$pass')");
    mysqli_close($conn);
}?>