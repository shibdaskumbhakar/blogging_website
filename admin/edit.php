<?php
include "includes/navbar.php";
if(isset($_GET['id']))
{
$id=$_GET['id'];
$id=mysqli_real_escape_string($con,$id);
$id=htmlentities($id);

$sql="select * from main where id=$id";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
    $row=mysqli_fetch_assoc($res);
?>
<div class="main">


<form action="edit_check.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
<div class="card-panel">
<?php
if(isset($_SESSION['message']))
{
echo $_SESSION['message'];
unset( $_SESSION['message']);
}
?>

<h5 class="teal center">Title For Post</h5>
<textarea type ="text" name="title" id="" class="materialize-textarea" placeholder="Title For Post">
<?php
echo $row['title'];
?>
</textarea>

<h5 class="teal center">Post Content</h5>
<textarea type="text" name="ckeditor" id="ckeditor"  class="materialize ckeditor">
<?php
echo $row['content'];
?>
</textarea>

</div>
<div class="center"><input type="submit" value="Update" name="publish" class="btn white-text"></div>
</div>

</form>
</div>
<script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>

<?php

include "includes/footer.php";

?>

<?php
}
else
{
    redirect("Location: dashbord.php");
}
}


?>