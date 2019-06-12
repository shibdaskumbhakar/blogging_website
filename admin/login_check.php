<?php
include "includes/header.php";

if(isset($_POST['login']))
{

    $username=$_POST['username'];
    $password=$_POST['password'];
    $username=mysqli_real_escape_string($con,$username);
    $password=mysqli_real_escape_string($con,$password);
    $username=htmlentities($username);
    $password=htmlentities($password);

    $sql="select password from users where username='$username'";
    $res=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($res);
    $pass=$row['password'];
    if(password_verify($password,$pass))
    {
        $_SESSION['username']=$username;
        header("Location: dashbord.php");
    }
    else{
        header("Location:login.php");
        $_SESSION['message']="Sorry, redentials Dont't Match";
    }
}

?>