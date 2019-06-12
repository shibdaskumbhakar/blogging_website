<?php
include "includes/header.php";
?>

<?php
include "includes/navigation.php";
?>
  


<div class="row">
    <!--this is main contain area-->
<div class="col l9 m9 s12" >

<?php
$sql="select * from main order by id DESC";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
    while($row=mysqli_fetch_assoc($res))
    {

    
?>

    <!--blog1-->
   <div class="col l3 m4 s6">
    <div class="card">
        <div class="card-image">
           <img src="image/<?php echo $row['image'];?>" alt="">
           <span class="card-title black-text truncate"><?php echo $row['title'];?></span>
        </div>
    </div>
    <div class="card-content truncate">
        <?php echo $row['content'];?>
    </div>
    <div class="card-action teal center">
        <a href="post.php?id=<?php echo $row['id'];?>" class="white-text">read more</a>
    </div>
    
 </div>

 <?php
    }
}
?>
    


</div>
    <!--this sidebar area-->
<div class="col l3 m3 s12" >

<?php
include "includes/sidebar.php"
?>

</div>






<?php
include "includes/footer.php";
?>
  
   






 