<?php
//connection object
include "includes/header.php";
if(isset($_SESSION['username']))
{
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
    <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <style>
  footer,header,.main{
    padding-left:300px;
  }
  @media(max-width:992px)
  {
    footer,header,.main{
      padding-left:0px;
    }
  }
  </style>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav class="teal">
            <div class="nav-wrapper">
                <div class="container">
                <a href="" class="brand-logo center">Myblog</a>
                <a href="" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons">menu</i></a>
                
                </div>
            
            </div>
        </nav>
       <ul class="side-nav fixed" id="sidenav">
       <li>
       <div class="user-view">
       <div class="background">
       <img src="../image/image1.jpg" alt="" class="responsive-img">
       </div>
       <a href=""><img src="../image/image2.jpg" alt="" class="circle"></a>
       <!--- showing username who login--->
       <span class="name red-text"><?php echo $_SESSION['username'];?></span>
       <span class="email red-text">
       <?php
       //showing email who login...
        $user=$_SESSION['username'];
        $sql="select email from users where username='$user'";
        $res=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($res);
        echo $row['email'];


       ?>
       
       
       </span>
       </div>
       </li>
       <li>
       <a href="dashbord.php">dashbord</a>
       </li>
       <li>
       <a href="post.php">post</a>
       </li>
       <li>
       <a href="image.php">images</a>
       </li>
       <li>
       <a href="">comments</a>
       </li>
       <li>
       <a href="">settings</a>
       </li>
       <div class="divider"></div>
       <li><a href="logout.php">logout</a></li>
       </ul>


<?php
}
else{
  header ("Location: ../login.php");
}
?>