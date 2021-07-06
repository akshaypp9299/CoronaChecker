<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiveCoronaChecker</title>
    <?php  include "links.php" ?> 
    <?php include "style.php" ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light  p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid ">Contact</a>
      </li>
    </ul>
    
  </div>
</nav>

<div class="main_header container">
  <div class="row">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-1">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-item-center m-20" >
        <img src="community1.jpg" alt="" width="300" height="300">
      </div>
    </div>

    <div class="col-lg-7 col-md-7 col-12 oder-lg-2 order-2 pt-5">
      <div class="rightside w-100 h-100 d-flex justify-content-center align-item-center ">
        <h1>Let's Stay & Fight Together Against Corona</h1>
      </div>
    </div>
  </div>

</div>

<!-- *********** Corona Latest Updates ************* -->

<section class="corona_update">
  <div class="mb-3">
      <h3 class="text-uppercase text-center " >COVID-19 UPDATES</h3>
  </div>

  <div class="d-flex justify-content-around align-items-center pt-5">
    <div>
      <h1 class="count">1,524,266</h1>
      <p>Passengers screened at airport</p>
    </div>
    <div>
      <h1 class="count">512</h1>
      <p>Active COVID-19 cases</p>
    </div>
    <div>
      <h1 class="count">40</h1>
      <p>Discharged Cases</p>
    </div>
    <div>
      <h1 class="count">9</h1>
      <p>Death Cases</p>
    </div>
  </div>
</section>

<!-- ********About****** -->

<div class="container-fluid sub_section pt-5 pb-5 "id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>About Covid-19</h1>
  </div>

  <div class="row pt-5 ">
      <div class=" col-lg-6 col-md-6 col-12 "> 
        <img src="About.jpg"  class="img-fluid"alt="">
      </div>
  
      <div class="col-lg-6 col-md-6 col-12">
        <h2>What is COVID-19?</h2>
        <p>COVID-19 is a disease caused by a new strain of coronavirus. ‘CO’ stands for corona, ‘VI’ for virus, and
        ‘D’ for disease. Formerly, this disease was referred to as ‘2019 novel coronavirus’ or ‘2019-nCoV.’
        The COVID-19 virus is a new virus linked to the same family of viruses as Severe Acute Respiratory
        Syndrome (SARS) and some types of common cold</p>
        <p>The virus is transmitted through direct contact with respiratory droplets of an infected person (generated
        through coughing and sneezing). Individuals can also be infected from and touching surfaces
        contaminated with the virus and touching their face (e.g., eyes, nose, mouth). The COVID-19 virus may
        survive on surfaces for several hours, but simple disinfectants can kill it.
        </p>
      </div>
   </div>   
</div>

<!-- ******Symptoms******* -->
<div class="container-fluid  pt-5 pb-5 "id="sympid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Coronavirus Symptoms</h1>
  </div>

  <div class="container">
    <div class="row"> 
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="asthma.png" class="img-fluid" width="120" height="120"alt="">
        <figcaption>Shortness Of breath</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="cough.png" class="img-fluid" width="120" height="120"alt="">
        <figcaption>Cough</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="fever.png" class="img-fluid" width="120" height="120"alt="">
        <figcaption>Fever</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="cold.png" class="img-fluid" width="120" height="120"alt="">
        <figcaption>Feeling Cold</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="worktable.png" class="img-fluid" width="120" height="120"alt="">
        <figcaption>Fatigue</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="safety-suit.png" class="img-fluid" width="120" height="120"alt="">
        <figcaption>PPE kit</figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>
 
 <!-- *********prevention********* -->
 <div class="container-fluid sub_section  pt-5 pb-5 "id="preventid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>Steps for prevention</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="Avoid.png" class="img-fluid" width="120" height="120"alt="">
               
              </figure>
            </div>

            <div class="col-lg-8 col-md-8 col-12">
              <p>The virus is transmitted through direct contact with respiratory droplets of an infected person (generated
              through coughing and sneezing). </p>
            </div>

          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="news.png" class="img-fluid" width="120" height="120"alt="">
               
              </figure>
            </div>

            <div class="col-lg-8 col-md-8 col-12">
              <p>The virus is transmitted through direct contact with respiratory droplets of an infected person (generated
              through coughing and sneezing). </p>
            </div>

          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="medical-mask.png" class="img-fluid" width="120" height="120"alt="">
               
              </figure>
            </div>

            <div class="col-lg-8 col-md-8 col-12">
              <p>The virus is transmitted through direct contact with respiratory droplets of an infected person (generated
              through coughing and sneezing). </p>
            </div>

          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="stay-at-home.png" class="img-fluid" width="120" height="120"alt="">
               
              </figure>
            </div>

            <div class="col-lg-8 col-md-8 col-12">
              <p>The virus is transmitted through direct contact with respiratory droplets of an infected person (generated
              through coughing and sneezing). </p>
            </div>

          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="soap.png" class="img-fluid" width="120" height="120"alt="">
               
              </figure>
            </div>

            <div class="col-lg-8 col-md-8 col-12">
              <p>The virus is transmitted through direct contact with respiratory droplets of an infected person (generated
              through coughing and sneezing).</p>
            </div>

          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="sick.png" class="img-fluid" width="120" height="120"alt="">
               
              </figure>
            </div>

            <div class="col-lg-8 col-md-8 col-12">
              <p>The virus is transmitted through direct contact with respiratory droplets of an infected person (generated
              through coughing and sneezing). </p>
            </div>

          </div>
        </div>
      </div>
    </div>
</div>

<!-- ***********Contact form********* -->

<div class="container-fluid   pt-5 pb-5 "id="contactid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>Contact Form</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
        <form action="" method="POST">

        <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter username" required>
  </div>

  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
  </div>

  <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="Enter mobile No." required>
  </div>


  <div class="form-group">
    <label for="">Select Symptoms</label><br>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="Cold">
      <label for="customcheckbox1" class="custom-control-label">Cold</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="Fever">
      <label for="customcheckbox2" class="custom-control-label">Fever</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="Difficulty In Breathing">
      <label for="customcheckbox3" class="custom-control-label">Difficulty In Breathing</label>
    </div>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="Feeling weak">
      <label for="customcheckbox4" class="custom-control-label">fEELING weak</label>
    </div>

  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>


</form>
        </div>
      </div>
    </div> 
</div>



<!-- ***********Footer******** -->

<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Copyright By Akshay Polshettiwar</p> 
  </div>
</footer>

</body>
</html>

<!-- ******PHP code******** -->


<?php

  include 'dbcon.php';

  if(isset($_POST['submit']))
  {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $mssg = $_POST['msg'];


    $chk = "";

    foreach($symp as $chk1)
    {
      $chk .= $chk1.","; 
    }


    $insertquery = "insert into coronacase(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$mssg')";

    $query = mysqli_query($con,$insertquery);

      if($con)
      {
      ?>
      <script>
          alert("Inserted Successfully!!!");
      </script>
      <?php
      }
      else
      {
      ?>
      <script>
          alert("Insertion Fail!!!");
      </script>
      <?php
      }
  
  }




?>
