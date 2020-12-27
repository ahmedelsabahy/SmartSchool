<?php
ob_start();
session_start();
if (isset($_SESSION["id"])) {
  include_once "headerafter.php";
} else {
  include_once "headerbefor.php";
}
?>
<title>Simple Google Map</title>
    
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  
  <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">



<div class="super_container">


  <div class="home">
    <div class="home_background_container prlx_parent">
      <div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
    </div>
    <div class="home_content">
      <h1> Contact smart school </h1>
    </div>
  </div>

  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">

          <div class="contact_form">
            <div class="contact_title">send in school</div>
            <div class="contact_form_container">
              <form action="https://preview.colorlib.com/theme/course/post">
                <input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                <input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                <textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                <button id="contact_send_btn" type="button" class="contact_send_btn trans_200" value="Submit">send message</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="about">
            <div class="about_title">smart school & Courses</div>
            <p class="about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus.</p>
            <div class="contact_info">
              <ul>
                <li class="contact_info_item">
                  <div class="contact_info_icon">
                    <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                  </div>
                  banha, ahmed elsabahy
                </li>
                <li class="contact_info_item">
                  <div class="contact_info_icon">
                    <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                  </div>
                  01007484400
                </li>
                <li class="contact_info_item">
                  <div class="contact_info_icon">
                    <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                  </div><a href="https://www.facebook.com/madaelsapa7e/" class="__cf_email__" data-cfemail="ahmed.elsaphy202010@gmail.com">[email&#160;protected]</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> </br>

       
      
      </div>
    </div>
  </div> </br>

  <div id="map"style="width: 900px; height: 500px;"></div>
    <script>


function initMap() {
    var uluru = { lat: 30.474048, lng: 31.200163 };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,center: uluru
    });
    var pos = {
        lat: 30.479540066650966,
        lng: 31.17952303252899
    };
    var marker = new google.maps.Marker({
        position: pos,map: map
    });
    var content = "<p style='margin:10px 0'><b>Simple Abdallah Info</b></p>" +
        "<a href='https://www.facebook.com/abdallahsamirelsayed/' target='_blank'><b>MY FACEBOOK</b></a>" +
        "<p style='margin:10px 0'><b>Mobile Phone :  (010)97456260</b></p>" +
        "<p style='margin:10px 0'><a href='http://www.fci.bu.edu.eg/fci' target='_blank'><b>Website : http://www.fci.bu.edu.eg/fci </b></a></p>";
    var info = new google.maps.InfoWindow({
        content: content
    });
    setInterval(function () {
        marker.setAnimation(google.maps.Animation.BOUNCE);
    }, 1000);
    marker.addListener("click", function () {
        info.open(map, marker);
    });}
    </script> </br>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPRHlz0U09KfAzHJto32cCxWcSM150AKc&callback=initMap"></script>


 
  <script src="styles/bootstrap4/bootstrap.min.js"></script>
  <script src="plugins/greensock/TweenMax.min.js"></script>
  <script src="plugins/greensock/TimelineMax.min.js"></script>
  <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="plugins/greensock/animation.gsap.min.js"></script>
  <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
  <script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
  <script src="plugins/easing/easing.js"></script>
  <script src="js/contact_custom.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

  <?php include_once "footer.php" ?>