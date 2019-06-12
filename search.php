<?php
include "includes/header.php";
include "includes/navigation.php";
if(isset($_GET['submit']))
{
$query=$_GET['search'];
$query=mysqli_real_escape_string($con,$query);
$query=htmlentities($query);

$sql="select * from main where title like '$query' or content like '$query' or title like '%$query%' or content like '%$query%' ";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
    ?>
    <!--search-->
<div class="row">
<div class="col l9 m9 s12" >
    <?php
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
    <div class="card-content truncate">
        <?php echo $row['content'];?>
    </div>
    <div class="card-action teal center">
        <a href="post.php?id=<?php echo $row['id'];?>" class="white-text">read more</a>
    </div>
    
 </div>

 <?php
    }
?>
</div>
  <!--this sidebar area-->
  <div class="col l3 m3 s12" >

<?php
include "includes/sidebar.php"
?>

</div>
</div>
<?php
}
else
{
    ?>
<h5>Sorry No Data Found....Please Try Again</h5>
    <?php
}

}

else{
    header("Location: index.php");
}

?>
