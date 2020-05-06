<!DOCTYPE html>
<html lang="en">
<head>
    <title>CoViD-19</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">CoViD-19</a>
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
        <a class="nav-link" href="#">World Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indialivestats.php">India Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact Us</a>
      </li>
    </ul>
    
  </div>
</nav>

<!-- ********* corona updates *******-->
<section class="updates container-fluid">
    <div class="my-5">
        <h3 class="text-uppercase text-center">Covid-19 World Updates</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
                <th>Country</th>
                <th>Total Confirmed</th>
                <th>Total Recovered</th>
                <th>Total Deaths</th>
                <th>New Confirmed</th>
                <th>New Recovered</th>
                <th>New Deaths</th>
            </tr>
            
        </table>
        
    </div>
</section>

<script>
  
function fetch(){
    $.get("https://api.covid19api.com/summary",
        function (data){
            console.log(data['Countries'].length);
            var tbval = document.getElementById('tbval');

            for(var i=1; i<(data['Countries'].length); i++){
                var x = tbval.insertRow();
                x.insertCell(0);

                tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background = '#7a4a91';
                tbval.rows[i].cells[0].style.color = '#fff';

                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background = '#4bb7d8';

                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background = '#4bb7d8';

                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background = '#4bb7d8';

                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background = '#4bb7d8';

                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background = '#4bb7d8';

                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background = '#4bb7d8';

            }
        }

    );
}




</script>






<footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
        <p>&copy Copyright | 2020 </p>
    </div>

</footer>