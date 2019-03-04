<?php include("menu.php"); ?>
<?php


$pagename = $_SERVER["SCRIPT_NAME"];
$pagetitle = explode("/",$pagename);

$pagetitle2 = explode(".",$pagetitle["2"]);

$title = strtoupper($pagetitle2[0]);


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="TOBSTERA PHP SYSTEM 2.0">
  <meta name="author" content="TOBSTERA">
  <title>TOBSTERA || <?php echo $title; ?></title>


  <!-- Custom styles for this template -->
  <link href="bootstrap-mdb/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="bootstrap-mdb/css/mdb.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-center">TOBSTERA</div>

      <div class="list-group list-group-flush">
        <?php

        foreach($menu as $key=>$val){
        ?>
        <a class="list-group-item list-group-item-action bg-light text-center" href="<?= $val["url"] ?>">  <i class="<?=  $val["icon"] ?>"></i> <?= $val["title"]; ?></a>
       
        <?php
        }
        ?>
 
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">MENU</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="https://www.youtube.com/TOBSTERA">YOUTUBE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/TOBSTERA">GITHUB</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/bgtarikbg">FACEBOOK PROFILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/pridesquadbg">FACEBOOK PAGE</a>
            </li>
          </ul>
        </div>
      </nav>
      
      
