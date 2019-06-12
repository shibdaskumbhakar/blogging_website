<?php

include "includes/navbar.php";
if(isset($_SESSION['username']))
{
?>

<div class="main">


<form action="write_check.php" method="POST" enctype="multipart/form-data">
<div class="card-panel">
<?php
if(isset($_SESSION['message']))
{
echo $_SESSION['message'];
unset( $_SESSION['message']);
}
?>

<h5 class="teal center">Title For Post</h5>
<textarea type ="text" name="title" id="" class="materialize-textarea" placeholder="Title For Post"></textarea>
<h5>Featured image</h5>
<div class="input-field file-field">
<div class="btn">
upload image
<input type="file" name="image">
</div>
<div class="file-path-wrapper">
<input type="text" class="file-path">
</div>
</div>
<h5 class="teal center">Post Content</h5>
<textarea type="text" name="ckeditor" id="ckeditor"  class="materialize ckeditor"></textarea>
</div>
<div class="center"><input type="submit" value="publish" name="publish" class="btn white-text"></div>
</div>

</form>
</div>
<script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>

<?php

include "includes/footer.php";
}
else{
    header ("Location: login.php");
}
?>