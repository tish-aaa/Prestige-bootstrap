<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
  <body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   <div class="container-fluid"> 

   <!-- added logo -->

    <div class="logo" ><img src="img/prestige_logo.jpeg" alt="LOGO" align:left></div>
   <!--<a class="navbar-brand" href="#"><span class="text-warning">Prestige</span>City</a>  -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#about">About Prestige</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#amenities">Amenities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="sitevisit" href="#">Book Site Visit</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide carousel-fade">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10">
      <img src="img/1.jpg" class="d-block w-100" alt="..." style="width: 100%;height: 100vh;object-fit: cover;object-position: 30% 70%;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bellanza</h5>
        <p>Featuring Luxurious 2 and 3 bed Residences</p>
        <p> <a href="#" class="btn btn-warning mt-3">Learn More</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Siesta</h5>
        <p>Featuring Luxurious 2 and 3 bed Residences</p>
        <p> <a href="#" class="btn btn-warning mt-3">Learn More</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bellanza</h5>
        <p>Featuring Luxurious 2 and 3 bed Residences</p>
        <p> <a href="#" class="btn btn-warning mt-3">Learn More</a></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="my-5">
  <div id="about" class="py-5">
    <h3 class="text-center">About Us</h3>
  </div>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="img/ok.jpg" alt="PRESTIGE: Bangalore based company" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12 abouttext">
    <h2 class="display-4 my-3"> The Falcon Has Landed In Mumbai!</h2>
    <p class="py-2">One of India's most trusted and respected names in Real Estate - The Prestige Group is synonymous with innovation and luxurious living. Since 1986, Prestige has helped build the face of Modern Urban India in its glorious globalized avatar by consistently introducing and creating state-of-the-art transformative real estate concepts, technologies, and innovations. The Prestige Group is the only CRISIL DA1 rated developer in India and has left a mark in every sector that one can think of - Residential communities, high-tech commercial spaces, retail, entertainment, leisure, and hospitality.</p>
  <a href="about.php" class="btn btn-success">Learn More</a>    
  </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div id="amenities" class="py-5">
    <h3 class="text-center">Amenities</h3>
  </div>
<div class="container-fluid ">
  <div class="row">

  <div class="col-lg-4 col-md-4 col-12 my-3">
    
    <div class="card" style="width: auto;">
  <img src="img/cy.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Cycling Track</p>
  </div>
</div>


    </div>

    <div class="col-lg-4 col-md-4 col-12 my-3">
    
    <div class="card" style="width: auto;">
  <img src="img/bas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Basketball Court</p>
  </div>
</div>


    </div>

    <div class="col-lg-4 col-md-4 col-12 my-3">
    
    <div class="card" style="width: auto;">
  <img src="img/swim.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Swimming Pool</p>
  </div>
</div>


    </div>

</div>
</div>

</section>

<section class="my-5">
  <div id="gallery" class="py-5">
    <h3 class="text-center">Gallery</h3>
  </div>

  <div class="container-fluid">
     <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="img/gallery.JPG" class="img-fluid pb-4" alt="preview">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="img/gallery.JPG" class="img-fluid pb-4" alt="preview">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="img/gallery.JPG" class="img-fluid pb-4" alt="preview">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="img/gallery.JPG" class="img-fluid pb-4" alt="preview">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="img/gallery.JPG" class="img-fluid pb-4" alt="preview">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="img/gallery.JPG" class="img-fluid pb-4" alt="preview">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="img/gallery.JPG" class="img-fluid pb-4" alt="preview">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="img/gallery.JPG" class="img-fluid pb-4" alt="preview">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="img/gallery.JPG" class="img-fluid pb-4" alt="preview">
      </div>
     
     </div>
  </div>


</section>

<section class="my-5">
  <div id="contact" class="py-5">
    <h3 class="text-center" id="contact">Contact Us</h3>
  </div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel" style="text-align:center;">Book A Site Visit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
    <div class="form-group">
      <label>Full Name</label>
      <input type="text" name="site_user" id="site_user" autocomplete="off" class="form-control">
    </div><br>
    <div class="form-group">
      <label>Email ID</label>
      <input type="email" name="site_email" id="site_email" autocomplete="off" class="form-control">
    </div><br>
    <div class="form-group">
      <label>Mobile Number</label>
      <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" id="site_mobile" name="mobile"  autocomplete="off" class="form-control">
    </div><br>
    <div class="form-group">
      <label>Visit Date</label>
<input type="date" name="date" class="form-control" id="site_date">    </div><br>
    <button type="submit" class="btn btn-success" id="submitSite">Submit</button>
  </form>
      </div>
      
    </div>
  </div>
</div>
<div class="w-75 m-auto ">
  <form action="" method="post">
    <div class="form-group">
      <label>Full Name</label>
      <input type="text" name="user" id="username" autocomplete="off" class="form-control">
    </div><br>
    <div class="form-group">
      <label>Email ID</label>
      <input type="email" name="email" id="useremail" autocomplete="off" class="form-control">
    </div><br>
    <div class="form-group">
      <label>Mobile Number</label>
      <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" id="mobile" name="mobile"  autocomplete="off" class="form-control">
    </div><br>
    <div class="form-group">
      <label>Comments</label>
      <textarea name="comments"  id="comments" class="form-control" ></textarea>
    </div><br>
    <button type="submit" id="submit" class="btn btn-success">Submit</button>
  </form>
</div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">web-dev: tisha sharma</p>
</footer>


<script>
$('#sitevisit').on('click',function(){
  $('#staticBackdrop').modal("show");
})
$('#submit').on('click',function(e){
  e.preventDefault();
  $username = $('#username').val();
$useremail = $('#useremail').val();
$mobile = $('#mobile').val();
$comments = $('#comments').val();
console.log($comments);

if($username!=="")
{
  if($useremail!=="")
  {
    if($mobile!=="")
    {
      if($mobile.length===10){
        
          $.ajax({
              type: 'POST',
              url: 'userinfo.php',
              data: {username : $username,useremail:$useremail, usermobile:$mobile, usercomments:$comments},
              success: function(data) {
                  if(data==1){
                    alert("We'll contact you shortly!");
                    $('#username').val("");
                      $('#useremail').val("");
                      $('#mobile').val("");
                      $('#comments').val("");
                  }else{
                    alert("Something went wrong.. Try filling your details again!");
                  }
              },
              error: function() {
                  console.log(response.status);
              },
          })
        
      }else{
        alert("Please provide a valid phone number");
      }
    }else{
      alert("Please provide your phone number");
    }
  }else{
    alert("Please provide your email");
  }

}else{
  alert("Please provide your name");
}
})
$('#submitSite').on('click',function(e){
  e.preventDefault();
$username = $('#site_user').val();
$useremail = $('#site_email').val();
$mobile = $('#site_mobile').val();
$date = $('#site_date').val();
console.log($username);
console.log($useremail);
console.log($mobile);
console.log($date);
if($username!=="")
{
  if($useremail!=="")
  {
    if($mobile!=="")
    {
      if($mobile.length===10){
        if($date!=="")
        {
          $.ajax({
              type: 'POST',
              url: 'userinfo.php',
              data: {site_user_name : $username,site_user_email:$useremail, site_user_mobile:$mobile, site_user_visit:$date},
              success: function(data) {
                  if(data==1){
                   alert("Your slot has been booked!");
                   $('#site_user').val("");             
                    $('#site_email').val("");
                   $('#site_mobile').val(""); 
                   $('#site_date').val("");
                   $('#staticBackdrop').modal("hide");
                  }else{
                    alert("Something went wrong..");
                  }
              },
              error: function() {
                  console.log(response.status);
              },
          })
        }else{
          alert("Please provide visit date");
        }
      }else{
        alert("Please provide a valid Phone number");
      }
    }else{
      alert("Please provide your phone number");
    }
  }else{
    alert("Please provide your email");
  }

}else{
  alert("Please provide your name");
}

})
/*
*/
</script>
  </body>
</html>