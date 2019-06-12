<?php
include "includes/header.php";
include "includes/dbh.php";
if(isset($_POST['publish']))
{
$data=$_POST['ckeditor'];
$data=mysqli_real_escape_string($con,$data);

$title=$_POST['title'];
$title=mysqli_real_escape_string($con,$title);
$title=htmlentities($title);
$img=$_FILES['image'];
$img_name=$_FILES['image']['name'];
$img_size=$_FILES['image']['size'];
$temp_dir=$_FILES['image']['temp_name'];
$type=$_FILES['image']['type'];
if($type=="image/jpeg" || $type="image/png" || $type="image/jpg")
{
    if($img_size<=2097152)
    {
        move_uploaded_file($temp_dir,"../image/".$img_name);
        $sql="INSERT INTO `main`(`title`, `content`,`image`) VALUES ('$title','$data','$img_name')";
$res=mysqli_query($con,$sql);
if($res)
{
$_SESSION['message']="<div class='chip green white-text'>post published</div>";
header("Location:write.php");
}
else
{
$_SESSION['message']="<div class='chip red black-text'>something went wrong</div>";
header("Location:write.php");
    }
}

else{
    $_SESSION['message']="<div class='chip red black-text'>sorry, image size is grater then 2MB</div>";
header("Location:write.php");
}
}
else
{
    $_SESSION['message']="<div class='chip red black-text'>sorry, image formate not supported</div>";
header("Location:write.php");
}
}
?>