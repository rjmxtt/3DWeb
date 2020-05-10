<?php 
  $json = json_decode($data);
?>
<!DOCTYPE html>
<html lang="em">
<head>
  <title>3D App</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../assignment/application/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assignment/application/css/x3dom.css">
  <link rel="stylesheet" type="text/css" href="../assignment/application/css/custom.css">
  <script src="../assignment/application/js/x3dom.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../assignment/application/js/home.js"></script>
  <script src="../assignment/application/js/interactions.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
</head>

<body>

<div class="all">
<!-- Nav Bar -->
<nav class="navbar fixed-top navbar-expand-sm navbar_top">

  <a class="navbar-brand" href="#">OMNI</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="navbar-toggler-icon"></span>
  </button> 

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto" id="navbar-change">
      <li class="nav-item active">
        <a class="nav-link" onclick="modelToggle(4)">HOME</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbardropdown" data-toggle="dropdown">MUSEUM</a>
        <div class="dropdown-menu">
          <?php
            for ($i=0; $i < count($json); $i++)
               echo '<a class="dropdown-item" onclick="modelToggle('.$i.')">' . $json[$i]->title . '</a>';
          ?>
        </div> 
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="modelToggle(4)">GALLERY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="modelToggle(4)">ABOUT</a>
      </li>
    </ul>

  </div>
</nav>

<!-- Main --> 
<div id="home">
  <div class="container-fluid">
    <!-- Hero -->
    <div class="container-lg main_contents" id="splash-placeholder">
      <div id="hero" style="display: block;">
      <div id="main3dImg">
        <div class="centered" id="main_text">
          <h3>VIRTUAL | WORLDWIDE | RARE</h3>
          <h1>OMNI</h1>
          <h2>COLLECTION OF 2020</h2>
        </div>
        </div>
      </div>
    </div>

    <!-- Models -->
    <div class="model3D" id="modelZero" style="display: none;"> 
      <x3d>
          <scene>
            <inline nameSpaceName="model0" mapDEFToID="true" url="../assignment/application/assets/x3d/eye.x3d"></inline>
          </scene>
      </x3d>
    </div>
    <div class="model3D" id="modelOne" style="display: none;"> 
      <x3d>
          <scene>
            <inline nameSpaceName="model1" mapDEFToID="true" url="../assignment/application/assets/x3d/ear.x3d"></inline>
          </scene>
      </x3d>
    </div>
    <div class="model3D" id="modelTwo" style="display: none;"> 
      <x3d>
          <scene>
            <inline nameSpaceName="model2" mapDEFToID="true" url="../assignment/application/assets/x3d/nose.x3d"></inline>
          </scene>
      </x3d>
    </div>
    <div class="model3D" id="modelThree" style="display: none;"> 
      <x3d>
          <scene>
            <inline nameSpaceName="model" mapDEFToID="true" url="../assignment/application/assets/x3d/ruby.x3d"></inline>
          </scene>
      </x3d>
    </div>

    <!-- Cards -->
    <div class="card-group" id="card-placeholder">

      <div class="row"> 
        <div class="card text-center">
        <div class="card-body">
          <h4>About Onmi</h4>
          <p>
            Omni Gallery is a virtual gallery that brings you photorealistic models of artifacts recovered from space exploration. 
            Several missions scoping out habitable earth like planets retured with evidence of long lost civilisations. 
            This museum is the online crusible of these deep space mysteries.
          </p>
        </div>
        </div>
      </div>

      <?php 
      $n=0;
      for ($i=0; $i<2; $i++) {
        echo '<div class="row">';
        for ($j=0; $j<2; $j++) {
          echo '<div class="col-sm-6">';
          echo '<div class="card text-center">';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">' . $json[$n]->title . '</h5>';
          echo '<p class="card-text">' . $json[$n]->description . '</p>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          $n++;
        }
        echo '</div>';
      }
      ?>
    </div>
  </div>
</div>


<!-- Footer -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="footer">
    <div class="navbar-text float-left copyright">
      <h5><span class="align-baseline">&copy RJM 2020</span></h5>
    </div>
    <div class="navbar-text float-right links">
      <a href="#"><i class="fab linkButton"></i></a>
      <a href="#"><i class="fab linkButton"></i></a>
      <a href="#"><i class="fab linkButton"></i></a>
    </div>
  </div>
</nav>

</div>
</body>
</html>
