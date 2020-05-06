<!DOCTYPE html>
<html lang="en">
<head>
    <title>CoViD-19</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">CoViD-19 Updates</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Preventions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="worldlivestats.php">World Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">India Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact Us</a>
      </li>
    </ul>
    
  </div>
</nav>


<section class="updates container-fluid">
    <div class="my-5 ">
        <h3 class="text-uppercase text-center">Covid-19 India Updates</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <tr>
                <th>Updated Date & Time</th>
                <th>States</th>
                <th>Confirmed</th>
                <th>Active</th>
                <th>Recovered</th>
                <th>Deaths</th>
            </tr>

<?php
   
  $data = file_get_contents('https://api.covid19india.org/data.json');
  $coronalive = json_decode($data, true);

 // echo "<pre>";
  //print_r($coronalive);

  $statescount = count($coronalive['statewise']);

  $i=1;
  while($i <$statescount ){

    ?>

    <tr>
      <td> <?php echo $coronalive['statewise'][$i]['lastupdatedtime']  ?> </td>
      <td> <?php echo $coronalive['statewise'][$i]['state']  ?> </td>
      <td> <?php echo $coronalive['statewise'][$i]['confirmed']  ?> </td>
      <td> <?php echo $coronalive['statewise'][$i]['active']  ?> </td>
      <td> <?php echo $coronalive['statewise'][$i]['recovered']  ?> </td>
      <td> <?php echo $coronalive['statewise'][$i]['deaths']  ?> </td>
    </tr>

 <!-- echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>";
  echo $coronalive['statewise'][$i]['state'] . "<br>";
  echo $coronalive['statewise'][$i]['confirmed'] . "<br>";
  echo $coronalive['statewise'][$i]['active'] . "<br>";
  echo $coronalive['statewise'][$i]['recovered'] . "<br>";
  echo $coronalive['statewise'][$i]['deaths'] . "<br>";   -->

  <?php

  $i++;
}



?>
        </table>
        
    </div>
</section>



<footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
        <p>&copy Copyright | 2020 </p>
    </div>

</footer>