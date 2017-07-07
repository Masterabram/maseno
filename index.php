<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title> Maseno ICT Club </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>

  <!-- Revolution css -->
  <link rel="stylesheet" type="text/css" href="vendor/rs-plugin/css/settings.css" media="screen"/>
  <link rel="stylesheet" href="vendor/rs-plugin/css/extralayer.css">
  
  <!-- Flat icon css -->
  <link rel="stylesheet" href="vendor/flat-icon/flaticon.css">
  
  <!-- Font awesome -->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  
  <!-- Owl Carosel css -->
  <link rel="stylesheet" href="vendor/owl/css/owl.carousel.css">
  <link rel="stylesheet" href="vendor/owl/css/owl.theme.default.css">
  <link rel="stylesheet" href="vendor/owl/css/owl.theme.css">
  
  <!-- mmenu -->
  <link type="text/css" rel="stylesheet" href="vendor/mmenu/css/jquery.mmenu.css" />
  
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

  <!-- Animate css -->
  <link rel="stylesheet" href="css/animate.css">

  <!-- Custom Style css -->
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
    <!--Form validation script-->
 <script>
function validateForm(){
 var x = document.forms["joinForm"]["fullName"].value;
 var y = document.forms["joinForm"]["emailVal"].value;
 var z = document.forms["joinForm"]["passVal"].value;
 var w = document.forms["joinForm"]["repassVal"].value;
 var a = 0;
    if (x == null || x == "") {
        document.getElementById("valFull").innerHTML="Please Fill in Name";
        document.getElementById("valFull").style.color="red";
        return false;
    }
    else if(!(x==null|| x=="")){
      document.getElementById("valFull").innerHTML="Full names";
        document.getElementById("valFull").style.color="black";
    }
    if(y==null || y==""){
      document.getElementById("valEmail").innerHTML="Please Fill in email";
        document.getElementById("valEmail").style.color="red";
        return false;
    }
    else if(!(y==null || y=="")){
      document.getElementById("valEmail").innerHTML="Email";
        document.getElementById("valEmail").style.color="black";
    }
    if(z==null || z==""){
      document.getElementById("valPass").innerHTML="Please type a password";
        document.getElementById("valPass").style.color="red";
        return false;
      }
    else if(!(z==null || z=="")){
      document.getElementById("valPass").innerHTML="Password";
        document.getElementById("valPass").style.color="black";
        
    }
     if(w==null || w==""){
      document.getElementById("valRepass").innerHTML="Please retype password";
        document.getElementById("valRepass").style.color="red";
        return false;
    }
    else if(!(w==null || w=="")){
      document.getElementById("valRepass").innerHTML="Re-type password";
        document.getElementById("valRepass").style.color="black";
    if(z!=w){
      document.getElementById("valRepass").innerHTML="Passwords don't match";
        document.getElementById("valRepass").style.color="red";
        return false;
    }
    }
    
}
 </script>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')
</script>
<![endif]-->
</head>
<body>
<!-- incase the preloading stuff is boring we can remove it here or add some introduction shit here -->
  <!-- <div class="loader"></div> -->
<!-- incase the preloading stuff is boring we can remove it here or add some introduction shit here -->
  <div class="main" id="home">
  <?php include 'slider.php'; ?>
<header  class="header-part">
  <div id="home" class="wrapper">
    <!-- Fixed navbar -->
    <div class="navi navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <a href="#menu">
            <button type="button" data-effect="st-effect-1" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </a>
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="TechGut"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse pull-right hidden-xs">
          <ul class="nav navbar-nav navbar-right">
            <li ><a class="page-scroll" href="#home">Home</a></li>
            <li> <a class="page-scroll" href="#about">about us</a></li>
            <li> <a class="page-scroll" href="#services">what we do</a></li>
            <li> <a class="page-scroll" href="#product">product</a></li>
            <li> <a class="page-scroll" href="#team">team</a></li>
            <li class="dropdown"> <a class="page-scroll drop dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#blog">blog</a>
              <ul class="dropdown-menu" role="menu">
                <!-- <li><a href="blog-full-width.php">full-width Blog</a></li> -->
                <li><a href="blog-sidebar.php">sidebar blog</a></li>
              </ul>
            </li>
        
          <li><a class="page-scroll" href="#contact">Contact</a></li>
          <li><a class="page-scroll" href="#" data-toggle="modal" data-target="#LoginModal" >Login</a></li>
           <!-- Search Block -->
          <li>
            <i class="search fa fa-search search-btn"></i>
            <div class="search-open" style="display:none;" >
              <div class="input-group animated fadeInDown" >
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                  <button class="btn-u" type="button">Go</button>
                </span>
              </div>
            </div>    
          </li>
          <!-- End Search Block -->
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div><!-- End of Nav -->
</div>
</header>

<!-- WHO WE ARE -->
<section id="about" class="who-we-are section-padding">
  <div class="container">
    <div class="row">
      <div class="wow zoomIn col-xs-12 col-lg-12 text-center p-padding">
        <h1 class="section-title">who we are</h1>
        <p>Something here Something here Something here Something here Something here Something here Something here Something here Something here Something here Something here Something here </p>
      </div><!-- col-xs-12 -->
      <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3 text-center">
        <div class="icon-circle">
          <i class="fa flaticon-android2"></i>
        </div><!-- /.icon-circle -->
        <div class="who-we-are-content text-center">
          <h2>simple design</h2>
          <p>Something here Something here Something here Something here Something here Something here Something here Something </p>
        </div><!-- /.who-we-are-content -->
      </div><!-- /.col-xs-6 -->
      <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3 text-center">
        <div class="icon-circle">
          <i class="fa fa-laptop"></i>
        </div><!-- /.icon-circle -->
        <div class="who-we-are-content text-center">
          <h2>perfect for all</h2>
          <p>Something here Something here Something here Something here Something here Something here Something here Something </p>
        </div><!-- /.who-we-are-content -->
      </div><!-- /.col-xs-6 -->
      <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3 text-center">
        <div class="icon-circle">
          <i class="fa flaticon-christmas128"></i>
        </div><!-- /.icon-circle -->
        <div class="who-we-are-content text-center">
          <h2>easy to customize</h2>
          <p>Something here Something here Something here Something here Something here Something here Something here Something </p>
        </div><!-- /.who-we-are-content -->
      </div><!-- /.col-xs-6 -->
      <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3 text-center">
        <div class="icon-circle">
          <i class="fa fa-code"></i>
        </div><!-- /.icon-circle -->
        <div class="who-we-are-content text-center">
          <h2>beautifully crafted</h2>
          <p>Something here Something here Something here Something here Something here Something here Something here Something </p>
        </div><!-- /.who-we-are-content -->
      </div><!-- /.col-xs-6 -->
    </div><!--/row-->
  </div><!-- /container -->
</section><!-- /who we wre -->

<!-- OUR SERVICES -->
<section id="services" class="service section-padding">
  <div class="container">
    <div class="row">
      <div class="wow zoomIn col-xs-12 text-center p-padding">
        <h1 class="section-title">What we do</h1>
        <p>Something here Something here Something here Something here Something here Something here Something here Something. Something here Something here Something here Something here Something here Something here Something here Something</p>
      </div><!-- col-xs-12 -->
      <div class="col-xs-12 col-sm-5 col-md-5">
        <div class="left-column">
          <div class="wow zoomIn media">
            <div class="media-left media-middle">
              <a href="#">
                <i class="fa flaticon-christmas128"></i>
              </a>
            </div>
            <div class="media-body">
              <h2>campus metups</h2>
              <h3>Vero eos et accusamus et </h3>
              <span>iusto odio</span>
            </div>
          </div>
          <div class="wow zoomIn media">
            <div class="media-left media-middle">
              <a href="#">
                <i class="fa fa-database"></i>
              </a>
            </div>
            <div class="media-body">
              <h2>code unthinkable</h2>
              <h3>Vero eos et accusamus et </h3>
              <span>iusto odio</span>
            </div>
          </div>
          <div class="wow zoomIn media">
            <div class="media-left media-middle">
              <a href="#">
                <i class="fa fa-compress"></i>
              </a>
            </div>
            <div class="media-body">
              <h2>website </h2>
              <h3>Vero eos et accusamus et </h3>
              <span>iusto odio</span>
            </div>
          </div>
        </div>
      </div><!-- col-md-5 -->

      <div class="col-xs-6 col-sm-2 col-md-2 hidden-xs">
        <div class="image-box">
          <img class="img-responsive" src="img/phn.png" alt="">
        </div>
      </div><!-- /col-md-2 -->

      <div class="col-xs-12 col-sm-5 col-md-5">
        <div class="right-column">
          <div class="wow zoomIn media">
            <div class="media-left media-middle">
              <a href="#">
                <i class="fa flaticon-leaf32"></i>
              </a>
            </div><!-- media left-->
            <div class="media-body">
              <h2>MOBILE APPLICATION</h2>
              <h3>Vero eos et accusamus et </h3>
              <span>iusto odio</span>
            </div><!--/.media body-->
          </div><!-- /.media -->
          <div class="wow zoomIn media">
            <div class="media-left media-middle">
              <a href="#">
                <i class="fa fa-rocket"></i>
              </a>
            </div><!-- media left-->
            <div class="media-body">
              <h2>DYNAMIC SYSTEMS</h2>
              <h3>Vero eos et accusamus et </h3>
              <span>iusto odio</span>
            </div><!--/.media body-->
          </div><!-- /.media -->
          <div class="wow zoomIn media">
            <div class="media-left media-middle">
              <a href="#">
                <i class="fa fa-laptop"></i>
              </a>
            </div><!-- media left-->
            <div class="media-body">
              <h2>24/7 HOURS SUPPORT</h2>
              <h3>Vero eos et accusamus et </h3>
              <span>iusto odio</span>
            </div><!--/.media body-->
          </div><!-- /.media -->
        </div><!-- /.right-column -->
      </div>
    </div><!-- row-->
  </div><!-- container -->
</section><!-- /our services -->

<!-- CLEAN IDEA AND UNIQUE DESIGN -->
<section id="clean" class="clean-idea section-padding">
  <div class="container">
    <div class="row">
      <div class="wow zoomIn col-xs-12 text-center p-padding">
        <h1 class="section-title">clean idea and unique design</h1>
        <p>A designer knows he has achieved perfection not when there is nothingleft to add, but when there is nothing left to take away.</p>
        <div class="button-set">
          <button type="button" class="btn btn-danger"><i class="fa fa-link"></i>Read More</button>
          <a href="#contact" class="page-scroll contact-us"><i class="fa fa-phone"></i>Contact Us</a>
        </div><!-- /.button-set -->
      </div><!-- col-xs-12 -->
    </div><!-- row-->
  </div><!-- container -->
</section><!-- /clean idea and unique design -->

<?php include 'works.php'; ?>

<div class="more-area">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="pull-left">Want To Work With Us Then Feel Free To join us</h2>
        <button type="button" id="load" class="btn btn-success pull-right" data-toggle="modal" data-target="#JoinModal">Click here</button>
      </div>
    </div><!-- row -->
  </div><!-- container -->
</div><!-- /.more-area -->

<!-- OUR TEAM -->
<section id="team" class="our-team section-padding">
  <div class="container">
    <div class="row">
      <div class="wow zoomIn col-xs-12 text-center p-padding">
        <h1 class="section-title">meet our team</h1>
        <p>Something here Something here Something here Something here Something here Something here Something here Something. Something here Something here Something here Something here Something here Something here Something here Something</p>
      </div><!-- col-xs-12 -->
    </div><!-- row -->
    <div class="row">
      <div class="wow zoomIn col-xs-12 col-sm-12 col-md-4">
        <div class="grid">
          <figure class="effect-duke">
            <img class="img-responsive" src="img/team7.jpg" alt="img09">
            <figcaption>
              <div class="icon-holder">
                <ul >
                  <li><a href="https://web.facebook.com/abram.ogol?_rdc=1&_rdr" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/OgolAbraham" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/abraham-mcogol-b40b01bb/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </figcaption>     
          </figure>
        </div>
        <div class="team-designation">
          <p>ABRAHAM MCOGOL</p>
          <span>CHAIRMAN</span>
        </div>
      </div>
      <div class=" wow zoomIn col-xs-12 col-sm-12 col-md-4">
        <div class="grid">
          <figure class="effect-duke">
            <img class="img-responsive" src="img/team2.jpg" alt="img09">
            <figcaption>
              <div class="icon-holder">
                <ul >
                  <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </figcaption>     
          </figure>
        </div>
        <div class="team-designation">
          <p>CONSTANCE CHERONO</p>
          <span>TREASURER</span>
        </div>
      </div>
      <div class="wow zoomIn col-xs-12 col-sm-12 col-md-4">
        <div class="grid">
          <figure class="effect-duke">
            <img class="img-responsive" src="img/team8.jpg" alt="img09">
            <figcaption>
              <div class="icon-holder">
                <ul >
                  <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </figcaption>     
          </figure>
        </div>
        <div class="team-designation">
          <p>KARIM KANJI</p>
          <span>programmer</span>
        </div>
      </div>
    </div><!-- row -->
  </div><!-- container -->
</section><!-- our team -->

<!-- COUNTING -->
<section  class="counting section-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 text-center">
        <span class="count1 counter">2125</span>
        <p>project completed</p>
      </div> <!-- /.col-sm-3 -->
      <div class="col-xs-12 col-sm-12 col-md-4 text-center">
        <span class="counter count3">5065</span>
        <p>tweets</p>
      </div><!-- /.col-sm-3 -->
      <div class="col-xs-12 col-sm-12 col-md-4 text-center">
        <span class="counter count4">2154</span>
        <p>cup of cofee</p>
      </div><!-- /.col-sm-3 -->
    </div> <!-- /.row -->
  </div><!-- /.container -->
</section><!-- counting -->


<!-- TESTIMONIAL-->
<section class="wow zoomIn testimmonial section-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="testimonial-feed">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active text-center">
                <div class="image-bar" ><img src="img/testimonial.jpg" alt=""></div>
                <p>“Perfection is achieved, not when there’s nothing more to add, but when theres is nothing left to take away.Laboriosam quae qui dolorem quasi molestias illo tempore optio amet, tempora deleniti. Magnam, distinctio!”</p>
                <span class="pull-right"> Mark Robert</span>
              </div>
              <div class="item text-center">
                <div class="image-bar" ><img src="img/testimonial2.jpg" alt=""></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe hic deserunt, fugit animi doloribus. Tempore, laboriosam. Laboriosam quae qui dolorem quasi molestias illo tempore optio amet, tempora deleniti. Magnam, distinctio!</p>
                  <span class="pull-right">  Matt Route</span>
                </div><!-- item text-center -->
              </div><!-- carousel-inner -->
            </div><!-- carousel -->
          </div><!-- testimonial-feed -->
          <div class="control-arrow">
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <i class="flaticon-previous11"></i>
            </a>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <i class="flaticon-next15"></i>
            </a>
          </div><!-- /.control-arrow -->
        </div><!-- /.col-xs-12 -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- testimonial -->
  

<?php include 'blog.php'; ?>

  <!-- our partner -->
  <section class="partner-wrapper">
    <div class="container">
      <div class="row">
        <div class="wow zoomIn col-sm-12">
          <div class="owl-wrap">
            <div id="owl-example" class="owl-carousel">
              <div class="feature-image"><img class="img-responsive" src="img/partner1.jpg" alt=""></div>
              <div class="feature-image"><img class="img-responsive" src="img/partner2.jpg" alt=""></div>
              <div class="feature-image"><img class="img-responsive" src="img/partner3.jpg" alt=""></div>
            </div><!-- /.owl-carousel -->
          </div><!-- /.owl-wrap -->
        </div><!-- /.col-sm-12 -->
      </div><!-- .row -->
    </div><!-- .container -->
  </section><!-- our partner -->

  <!-- GET IN TOUCH -->
  <section id="contact" class="contact-wrapper section-padding">
    <div class="container">
      <div class="row">
        <div class="wow zoomIn col-xs-12 text-center p-padding">
          <h1 class="section-title">get in touch</h1>
          <p>Contact us today</p>
        </div><!-- col-xs-12 -->
        <div class="wow zoomIn col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
          <form name="contactForm" id='contact_form' method="post" action='php/email.php'>
            <div class="form-inline">
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="name" >
              </div>
              <div class="form-group col-sm-6">
                <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="email address">
              </div>
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" name="subject" id="exampleInputSubject" placeholder="subject" >
              </div>
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" name="company" id="exampleInputCompany" placeholder="company" >
              </div>
              <div class="form-group col-sm-12">
                <textarea class="form-control" name="message" rows="3" id="exampleInputMessage" placeholder="message" ></textarea>
              </div>
            </div>
            <div class="form-group col-xs-12">
              <div id='mail_success' class='success' style="display:none;">Your message has been sent successfully.
              </div><!-- success message -->
              <div id='mail_fail' class='error' style="display:none;"> Sorry, error occured this time sending your message.
              </div><!-- error message -->
            </div>
            <div class="form-group col-sm-12" id='submit'>
              <input type="submit" id='send_message' class="btn  btn-lg costom-btn" value="send">
            </div>
          </form>
        </div> <!-- /.col-xs-12 .col-sm-offset-2 .col-sm-8 -->
        <div class="col-xs-12">
          <div class="contact-or">
            <p>or</p>
          </div><!-- /.contact-or -->
          <div class="icon-text">
            <span>find us on</span>
          </div><!-- /.icon-text -->
          <div class="icon-holder">
            <ul >
              <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div><!-- /.icon-holder -->
        </div><!-- /.col-xs-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- get in touch -->

  <!-- Join Maseno ICT Modal -->
  <div class="modal fade" id="JoinModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Join Maseno ICT</h4>
        </div>
        <div class="modal-body">
        <form method="post" action="" onsubmit="return validateForm()" name="joinForm">
          <label id="valFull" >Full names</label>
          <input type="text" placeholder="Full Name" class="form-control" name="fullName">
          <label id="valEmail">Email</label>
          <input type="email" placeholder="Email" class="form-control" name="emailVal">
          <label id="valPass">Password</label>
          <input type="password" placeholder="Password" class="form-control" name="passVal">
          <label id="valRepass">Re-type password</label>
          <input type="password" placeholder="Re-type password" class="form-control" name="repassVal">         
        </div>
        <div class="modal-footer">
          <div style="float:left;">Already have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#LoginModal" >Sign in</a></div>
          <input type="submit" class="btn btn-default" value="Join" name="joinBtn">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<!-- Login Modal-->
<div class="modal fade" id="LoginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Log in</h4>
        </div>
        <div class="modal-body">
        <form method="post" action="" onsubmit="return validateForm2()" name="LoginForm">
          <label id="valEmail">Email</label>
          <input type="email" placeholder="Email" class="form-control" name="emailVal">
          <label id="valPass">Password</label>  
          <input type="password" placeholder="Password" class="form-control" name="passVal">      
        </div>
        <div class="modal-footer">
          <div style="float:left;">Don't have an account? <a href="#" data-toggle="modal" data-target="#joinModal">Join here</a></div>
          <input type="submit" class="btn btn-default" value="Login" name="loginBtn">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

 <?php include 'footer.php'; ?>
