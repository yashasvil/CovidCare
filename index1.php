<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    <?php include 'links/link.php'; ?>
    <?php include 'CSS/style.php'; ?>
</head>
<body onload="fetch()">
    <nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">Corona Virus</a>
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
        <a class="nav-link" href="#symptomsid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventionid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact Us</a>
      </li>
      
    </ul>
    </div>
</nav>
<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="images/central image.jpg" width="300" height="300">
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>Let's stay safe and fight against Corona together</h1>
            </div>
        </div>
    </div>
</div>
<!-- ****************************getting updates******************* -->
<section class="corona_update container-fluid">
    <div class="mb-3">
        <h3 class="text-center text-uppercase">Covid-19 Updates</h3>
    </div>
    <div class="table_responsive">
        <table class="table-bordered table-striped text-center" id="tbvalue">
            <tr>
                <th>Country</th>
                <th>New Confirmed</th>
                <th>Total Confirmed</th>
                <th>New Deaths</th>
                <th>Total Deaths</th>
                <th>New Recovered</th>
                <th>Total Recovered</th>
                <th></th>
            </tr>
        </table>
    </div>
</section>
<!-- ****************************About ID********************************** -->
<div id="aboutid" class="container-fluid sub_section pt-5 pb-5">
    <div class="section-header text-center mb-5 mt-5">
        <h1>About COVID-19</h1>
    </div>
    <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
        <img src= images/about.jpg class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
        <h2></h2>
        <p>Coronavirus disease 2019 (COVID-19) is a contagious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The first known case was identified in Wuhan, China, in December 2019. The disease has since spread worldwide, leading to an ongoing pandemic.</p>
        <p>COVID-19 transmits when people breathe in air contaminated by droplets and small airborne particles. The risk of breathing these in is highest when people are in close proximity, but they can be inhaled over longer distances, particularly indoors. Transmission can also occur if splashed or sprayed with contaminated fluids, in the eyes, nose or mouth, and, rarely, via contaminated surfaces. People remain contagious for up to 20 days, and can spread the virus even if they do not develop any symptoms</p>
        </div>
    </div>
</div>
<!-- ****************************Symptoms********************** -->
<div id="symptomsid" class="container-fluid pt-5 pb-5">
    <div class="section-header text-center mb-5 mt-5">
        <h1>Coronavirus Symptoms</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=120px height=120px>
                <figcaption>Coughing</figcaption>
                </figure>               
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=120px height=120px>
                <figcaption>Runny Nose</figcaption>
                </figure>               
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=120px height=120px>
                <figcaption>Cold</figcaption>
                </figure>               
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=120px height=120px>
                <figcaption>Fever</figcaption>
                </figure>               
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=120px height=120px>
                <figcaption>Tiredness</figcaption>
                </figure>               
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=120px height=120px>
                <figcaption>Difficulty in breathing</figcaption>
                </figure>               
            </div>
        </div>
    </div>
</div>
<!-- ****************************Prevention********************** -->
<div id="preventionid" class="container-fluid sub_section pt-5 pb-5">
    <div class="section-header text-center mb-5 mt-5">
        <h1>Prevention Steps</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-4">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=90px height=90px>
                </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                <p>Washing your hands regularly for 20 seconds, with soap and water or alcohol based hand rub.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-4">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=90px height=90px>
                </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-4">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=90px height=90px>
                </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                <p>Avoid close contact with people who are unwell.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=90px height=90px>
                </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                <p>Stay home ans self isolate from others if you feel unwell.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=90px height=90px>
                </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                <p>If you have fever, cough and/ or difficulty in breathing, seek medical help.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                <img src="images/about.jpg" class= "img-fluid" width=90px height=90px>
                </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                <p>Stay informed and updated and follow the recommended steps.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ****************************Contact us********************************** -->
<div id="contactid" class="container-fluid  pt-5 pb-5">
    <div class="section-header text-center mb-5 mt-5">
        <h1>Contact Us</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
            <form action="" method="POST">
            <div class="form-group">
    <label>Name</label>
    <input type="text " class="form-control" placeholder="Name" name="username" required>
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" placeholder="name@example.com" name="email" required>
  </div>

  <div class="form-group">
    <label>Mobile Number</label>
    <input type="number " class="form-control" placeholder="mobile" name="mobile" required max-length=10>
  </div>

  <div class="form-group">
      <label>Select symptoms</label><br>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Cold" name="corcym[]">
      <label class="form-check-label" for="inlineCheckbox1">Cold</label>
      </div>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Cough" name="corcym[]">
      <label class="form-check-label" for="inlineCheckbox2">Cough</label>
      </div>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Headache" name="corcym[]">
      <label class="form-check-label" for="inlineCheckbox3">Headache</label>
      </div>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="breath" name="corcym[]">
      <label class="form-check-label" for="inlineCheckbox4">Difficulty in breathing</label>
      </div>
  <div class="form-group">
    <label>Further inquiries</label>
    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
            </div>
        </div>
    </div>
</div>
<!-- *****************************FOOTER**************************** -->
<footer class="mt-5">
<div class="footer_style text-black text-center container-fluid">
    <p>Project by Y.L.</p>
</div>
</footer>
$('.count').counterUP({
    delay: 10,
    time: 3000,
})
<script>
    function fetch(){
        $.get("https://api.covid19api.com/summary",
        function(data){
            // console.log(data['Countries'].length)
            var tbval=document.getElementById('tbval');
            for( var i=1; i<(data['Countries'].length); i++){
                var x= tbval.insertRow();
                x.insertCell(0);
                tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background='pink';
                tbval.rows[i].cells[0].style.color='white';

                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[1].style.background='pink';
            }
        }
        )
    }
</script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$symp=$_POST['corcym[]'];
$message=$_POST['message'];

$chk="";
foreach($symp as $chk1){
    $chk.= $chk1.",";
}
$insertquery=" insert into cases(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$message') ";
}
?>