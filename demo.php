<?php
session_start();
if(!isset($_SESSION['username']))
{
  echo "You are Logged Out!";
  header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>VMark Solutions, Inc</title>
  <link rel="stylesheet" href="./demo.css">
</head>

<body>
  <div class="header">
    <div class="inner-header">
      <div class="logo">
        <img src="./logo.jpg" alt="logo" id="slide1">
        <p id="slide"> V MARK SOLUTIONS </p>
      </div>

      <div class="Home" id="hom" onmouseover="om()">
        <a href="#">Home</a>
      </div>
      <div class="Services" id="Services">
        <a href="#servicepage">Services</a>
      </div>
      <div class="About" id="About">
        <a href="#aboutpage">About Us</a>
      </div>
      <div class="Contact" id="Contact">
        <a href="#contactpage">Contact Us</a>
      </div>
      <div class="Logout" id="Logout">
        <a href="logout.php">Logout</a>
      </div>
    </div>
  </div>


  </div>

  <div class="content">
    <div class="container">
      <img src="Home.jpg" alt="Homeimage" height="800px" width="1520px">
    </div>
    <div class="innerblock">
      <p id="slide2">A complete business solution</p>
      <span id="catchy" class="cursor"></span> <br>
      <span class="catchynext">Hi ,<strong><?php echo $_SESSION['username'] ; ?></strong> <br> <br> Are you looking for IT Solutions for your business?</span> <br>
      <span class="catchynext1">We at VMark Solutions, Deliver IT solutions that enable you to work smarter.</span>
    <a href="contact.php"><button type="button" name="button" class="button" id="button" href="#servicepage">Write To Us!</button></a>
    </div>
    <div class="servicespage" id="servicepage">
      <img src="servicebg.jpg" alt="jacket" width="1520" height="800">
      <p class="sertag" id="servicetag">Our Services</p>
      <p class="sertag1" id="tagur">We make technology work for you.</p>
      <div class="card" id="card0" style="width: 18rem;">
        <img class="card-img-top" src="Appimage.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" id="card-title1">Web Application Development</h5>
          <p class="card-text" id="cardtext1">We offer end-to-end web application development services which include designing, prototyping, building, and migrating to new web architecture.</p>
          <a href="#contactpage" class="btn btn-primary" id="btn1" href="#contactpage">Know More</a>
        </div>
      </div>
      <div class="card" id="card-1" style="width: 18.1rem;">
        <img class="card-img-top" src="cloud.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" id="card-title2">Data Warehousing</h5>
          <p class="card-text">Our data management and warehousing solutions are designed to help businesses achieve their long-term goals with custom models.</p>
          <a href="#contactpage" class="btn btn-primary" id="btn2">Know More</a>
        </div>
      </div>
      <div class="card" id="card-2" style="width: 18.1rem;">
        <img class="card-img-top" src="bigdata.jpg" alt="Card image cap" id="bigdata">
        <div class="card-body">
          <h5 class="card-title" id="card-title3">Cloud & Bigdata</h5>
          <p class="card-text" id="cardtext3"> We enable organizations to conceptualize and implement a well-thought-out big data program across multiple domains and focus areas.</p>
          <a href="#contactpage" class="btn btn-primary" id="btn3"</a>Know More</a>
        </div>
      </div>
    </div>
    <div class="Aboutuspage" id="aboutpage">
      <img src="aboutimage.jpg" alt="aboutusimage" width="1520" height="1500">
      <img src="aboutlogo.png" alt="logo" class="aboutlogo" id="logoabout">
      <p class="about0" id="aboutus"> About Us </p>
      <img src="aboutimage1.png" class="aboutimage1" alt="image1" id="image">
      <p class="abouttag" id="tagabout">Why VMark Solutions?</p>
      <p class="abouttext1" id="textabout">VMark Solutions, Inc provides wide range of Information Technologies (IT) products and services with comprehensive range of IT talent. These include: Java/J2ee, Web application development, Cloud Computing,
        Big Data, Data Warehouse, Business Intelligence, Analytics, Testing, Infrastructure & Application support services. These services are offered through a unique style and innovative delivery models that helps our customers achieve rapid
        implementation, world-class quality and reduced costs. </p>
      <img src="aboutimage2.png" class="aboutimage2" alt="image2" id="image2">
      <p class="abouttext2" id="text2">VMark Solutions, with several years of experience in delivering proven solutions and strong domain knowledge, focuses on providing full lifecycle implementation of products and solutions with unparalleled
        support to its customers.</p>
      <img src="aboutimage3.png" class="aboutimage3" alt="image3" id="image3">
      <p class="abouttext3" id="text3">At VMark Solutions, we have the right people, products, and solutions to meet the needs of our customers and lead them to success!</p>
    </div>
    <div class="Contactuspage" id="contactpage">
      <img src="newyork.jpg" alt="newyork" width="1520px" class="newyork">
      <div class="box">
      </div>
      <div class="card" id="contactcard1">
        <div class="card-body">
        <button type="button" name="button" class="button" id="button1" href="#servicepage">Write To Us!</button>
        </div>
      </div>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.703903693283!2d-77.42726878467126!3d38.95359227956205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b64775f410ca99%3A0xf9f1b453070a0131!2sRegus%20-%20Virginia%2C%20Northern%20Virginia%20-%20Dulles%20Corner!5e0!3m2!1sen!2sin!4v1638037589550!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" id="frame"></iframe>
    </div>
  </div>
  <script type="text/javascript" src="demo.js">
  </script>


</body>

</html>
