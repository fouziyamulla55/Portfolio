<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <script src="js/jquery.validate.min.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="index.html" class="menu-btn">Home</a></li>
                <li><a href="about.html" class="menu-btn">About</a></li>
                <li><a href="services.html" class="menu-btn">Services</a></li>
                <li><a href="skill.html" class="menu-btn">Skills</a></li>
                <li><a href="contact.html" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>



    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head" >Name</div>
                                <div class="sub-title">Priya Rao</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">1st Main Road , Brookefield, Bangalore, Karnataka 560037</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">priyarao183@gmail.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="column left">
                    <a href="login.html">View company details</a>
              
              </div>
          </div>
              
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="con1.php" method="POST" >
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="cname" placeholder="Company Name"  required>
                            </div>
                            <div class="field email">
                                
                                <input type="email" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[gmail.-]+\.[com]{2,}$" required />
                            </div>
                        </div>
                        <div class="field">
                           
                            
                            <input type="phone" name="phone"  id="phone" placeholder="Phone Number"
           
           required
          />
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Company Description...." name="description" required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" value="submit" name="submit" >Submit
                            </button>
                             
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
 <footer>
      <style type="text/css">
          .fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}


.fa-instagram {
  background: #125688;
  color: white;
}

      </style> 

<span>
    <!-- Add font awesome icons -->
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-instagram"></a>

      </span>
       </footer>


    <script src="script.js"></script>
</body>
</html>