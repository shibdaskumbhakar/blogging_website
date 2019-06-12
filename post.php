<?php
include "includes/header.php";
?>

<?php
include "includes/navigation.php";
?>

<div class="row">
   <!--main post area-->
   <div class="col l9 m9 s12">
   <?php
   if(isset($_GET['id']))
   {
      $id=$_GET['id'];
      $id=mysqli_real_escape_string($con,$id);
      $id=htmlentities($id);
      $sql="select * from main where id=$id";
      $res=mysqli_query($con,$sql);
      if(mysqli_num_rows($res)>0)
      {
         //counting page view
         $sql2="select view from main where id=$id";
         $res2=mysqli_query($con,$sql2);
         $row2=mysqli_fetch_assoc($res2);
         $view=$row2['view'];
         $view=$view+1;
         $sql3="update main set view=$view where id=$id";
         mysqli_query($con,$sql3);


         $row=mysqli_fetch_assoc($res);
         $title=$row['title'];
         $content=$row['content'];
?>
<h5 class="center"><?php echo ucwords($title) ;?></h5>
<div class="card-panel">
<p class="flow-text"><?php echo $content ?></p>
<h5>Related Blogs</h5>
<div class="row">
<?php
$sql="select * from main order by rand() limit 5";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
    while($row=mysqli_fetch_assoc($res))
    {
?>
    
   <div class="col l3 m4 s6">
    <div class="card">
        <div class="card-image">
           <img src="image/<?php echo $row['image'];?>" alt="">
           <span class="card-title black-text truncate"><?php echo $row['title'];?></span>
        </div>
    </div>
    <div class="card-content">
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
</div>


<?php
      }
      else{
         header("Location: index.php");
      }
   }

?>
   
   
   </div>
  
   <!--sidebar area-->
   <div class="col l3 m3 s12">
      <?php
         include "includes/sidebar.php"
      ?>
   </div>

  
</div>





<?php
include "includes/footer.php";
?>