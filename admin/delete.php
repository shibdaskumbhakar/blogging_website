<?php
include "includes/header.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($con,$id);
    $id=htmlentities($id);
    $sql="delete from main where id=$id";
    $res=mysqli_query($con,$sql);
    if ($res)
    {
        echo "deleted succesfully";
    }
    else
    {
        echo "something weint wrong";
    }
}

?>