<?php
include "includes/header.php";
if(isset($_POST['publish']))
{
$id=$_GET['id'];
$id=mysqli_real_escape_string($con,$id);
$id=htmlentities($id);
$data=$_POST['ckeditor'];
$data=mysqli_real_escape_string($con,$data);
$data=htmlentities($data);
$title=$_POST['title'];
$title=mysqli_real_escape_string($con,$title);
$title=htmlentities($title);

$sql="update main set title='$title', content='$data' where id='$id'";
$res=mysqli_query($con,$sql);
if($res)
{
$_SESSION['message']="<div class='chip green white-text'>post is updated</div>";
header("Location:edit.php?id=".$id);
}
else
{
$_SESSION['message']="<div class='chip red black-text'>something went wrong</div>";
header("Location:edit.php?id=".$id);
}

}
?>