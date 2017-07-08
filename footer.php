 <!-- footer -->
  <footer >
    <div class="footer-wrapper section-padding">
      <div class="container">
        <div class="row">
          <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
            <a href="index.php"><img src="img/logol.png" alt="Maseno ICT"></a>
            <p class="footer-content">Lorem ipsum dolor sit amet, consect tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven.</p>
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
          <div class="wow zoomIn col-xs-12 col-sm-3 col-md-3">
            <p class="footer-heading">link</p>
            <ul class="footermenu">
              <li><a data-scroll data-options='{ "easing": "easeInQuad" }'  href="#about">about us</a></li>
              <li><a data-scroll data-options='{ "easing": "easeInQuad" }'  href="#services">services</a></li>
              <li><a data-scroll data-options='{ "easing": "easeInQuad" }'  href="#product">product</a></li>
              <li><a data-scroll data-options='{ "easing": "easeInQuad" }'  href="#team">team</a></li>
              <li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#blog">blog</a></li>
            </ul>
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
          <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
            <p class="footer-heading">find us</p>
            <ul class="footercontact">
              <li><i class="flaticon-mainpage"></i><span>address:</span> One TECHGUT loop, 54100</li>
              <li><i class="flaticon-phone16"></i><span>phone:</span><a href="tel:88 02 8714612"> +88 02 8714612</a></li>
              <li><i class="flaticon-email21"></i><span>e-mail:</span><a href="mailto:support@themerole.com"> support@themerole.com</a></li>
              <li><i class="flaticon-world91"></i><span>web:</span><a href="http://themerole.com"> www.themerole.com</a></li>
            </ul>
            <i class="flaticon-home78"></i>
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
          <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
            <p class="footer-heading">recent posts</p>
            <ul class="footerblog">
              <li><a href="blog-sidebar.php">The Green Fields of Spring</a> <p>13th Jun 2014</p></li>
              <li><a href="blog-sidebar.php">This is a Video Post</a> <p>18th Nov 2014</p></li>
              <li><a href="blog-sidebar.php">Satisfaction Lies in the Effort</a> <p>13th Jun 2014</p></li>
            </ul>
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="wow zoomIn col-xs-12">
            <p>© 2017 All rights reserved. <span>Maseno ICT club</span> theme by <a href="http://mcogol.gear.host" target="_blank">Abraham Mcogol</a></p>
            <div class="backtop  pull-right">
              <i class="fa fa-angle-up back-to-top"></i>
            </div><!-- /.backtop -->
          </div><!-- /.col-xs-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.creditwrapper -->
  </footer><!-- /Footer -->


<!-- MMENU --> 
<nav id="menu">
  <ul>
    <li><a href="#">home</a></li>
    <li><a href="#about">about us</a></li>
    <li><a href="#services">services</a></li>
    <li><a href="#product">product</a></li>
    <li><a href="#team">team</a></li>
    <li><a href="#blog">blog</a>
      <ul>
        <li><a href="blog-full-width.php">full width blog</a></li>
        <li><a href="blog-sidebar.php">sidebar blog</a></li>
      </ul>
    </li>
    <li><a href="#contact">contact</a></li>
  </ul>
</nav><!-- /#menu -->

</div><!-- /.main -->


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


<!-- jQuery JS -->
<script src="js/jquery-1.11.1.js"></script>

<!-- Modernizr JS --> 
<script src="js/modernizr-2.6.2.min.js"></script>

<!--Bootatrap JS-->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- REVOLUTION Slider  -->
<script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>

<!-- Shuffle JS -->
<script src="js/jquery.shuffle.min.js"></script>

<!-- mmenu -->
<script type="text/javascript" src="vendor/mmenu/js/jquery.mmenu.min.js"></script>

<!-- Owl Carosel -->
<script src="vendor/owl/js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>

<!-- waypoints JS-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

<!-- Counterup JS -->
<script src="js/jquery.counterup.min.js"></script>

<!-- Easing JS -->
<script src="js/jquery.easing.min.js"></script>

<!-- Smooth Scroll JS -->
<script src="js/scrolling-nav.js"></script>
<script src="js/smoothscroll.min.js"></script>

<!-- Custom Script JS -->
<script src="js/script.js"></script>

<!-- Email JS -->
<script src="js/email.js"></script>

<script>
$(window).on('scroll', function(){
  if( $(window).scrollTop()>670 ){
    $('.navbar-default').addClass('navbar-fixed-top');
  } else {
    $('.navbar-default').removeClass('navbar-fixed-top');
  }
});

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

</body>
</html>