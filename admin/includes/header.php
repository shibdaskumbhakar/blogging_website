<?php
ob_start();
session_start();
include "dbh.php";


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