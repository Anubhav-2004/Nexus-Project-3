<html>
    <head>
        <title>Software Website for Techy Software</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"  ></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&family=Protest+Revolution&display=swap" rel="stylesheet">

</head>
<body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><b class="b1">ANUBHAV</b></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">SERVICES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">TESTIMONIALS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">CONTACTS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">FEEDBACK</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
    <!------------banner section--------------->
    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="promo-title">This Is A Project / Prototype Website</p>
            <p>I'm thrilled to share a sneak peek of my latest project.
               <br>A prototype website that I've poured my heart and soul into!</p>
               <a href="#"><img src="play.png" class="play-btn">Click Here</a>
            </div>
          <div class="col-md-6 text-center">
            <img src="vr.png" class="img-fluid">
          </div>
        </div>
      </div>
      <img src="images/wave1.png" class="bottom-img">
    </section>
    <!------------Feedback section--------------->
    <form action="userfeedback.php">
    <div class="x">
        <p class="p1">Register/Sign up</p>
        <table class="z">
            <tr>
                <td><label for="username">Name:</label></td>
                <td><input type="text" id="username" class="t3" placeholder="Enter Username" name="t33"></td>
            </tr>
            <tr>
                <td><label for="mobile">Mobile No.:</label></td>
                <td><input type="text" id="mobile" class="t3" placeholder="Your Mobile No." name="t44"></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" id="email" class="t1" placeholder="Your Email address" name="t11"></td>
            </tr>
            <tr>
                <td><label for="password">Your Feedback:</label></td>
                <td><input type="text-area" id="password" class="t2" placeholder="Your Feedback" name="t22"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit" class="b2">
    </div>
</form>
    

                <!------------footer section--------------->

                <section id="footer">
                  <img src="images/wave2.png" class="footer-img">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4 footer-box">
                        <a class="navbar-brand" href="#"><b class="b1">ANUBHAV</b></a>
                        <p>Thank you for exploring our prototype website. 
                          At ANUBHAV, we are dedicated to providing innovative solutions and staying at the forefront of technology.</p>
                      </div>
                      <div class="col-md-4 footer-box">
                        <p><b>CONTACT US</b></p>
                        <p><i class="fa fa-map-marker"></i>Area/House no./Street/City - Pincode/State</p>
                        <p><i class="fa fa-phone"></i>+91 1234567890</p>
                        <p><i class="fa fa-envelope-o"></i>xyz@gmail.com</p>
                      </div>
                      <div class="col-md-4 footer-box">
                        <p><b>My GitHub/Linkedin</b></p>
                        <p><a href="https://github.com/Anubhav-2004"><img src="images/Github.png"></a>Anubhav-2004</p>
                        <p><a href="https://www.linkedin.com/in/anubhav-choubey-653680150/"><img src="images/Link.png"></a>Anubhav Choubey</p>
                      </div>
                    </div>
                  </div>
                </section>
</body>
</html>
