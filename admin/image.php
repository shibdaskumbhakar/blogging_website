<?php
include "includes/navbar.php";
$dir="../image/";
$files=scandir($dir);
if($files)
{
    ?>
    <div class="main">
    <div class="row">


    <?php
    foreach($files as $file)
    {
        if(strlen($file)>2)
        {

    
?>
<div class="col l2 m3 s4">
<div class="card">
<div class="card-image">
<img src="../image/<?php echo $file;?>" alt="" style="">
</div>
</div>
</div>

<?php
        }
}
}
?>
</div>
</div>