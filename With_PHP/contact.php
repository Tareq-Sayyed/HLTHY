<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>HLTHY - About Us</title>
</head>
<body>

    <section id="header">
        <a href="index.php"> <img src="images/logos/HLTHY - White - TP.svg" class="logo" width="300px" height="150px"> </a>
        <div>
            <ul id="navbar">
                <li> <a href="index.php">Home</a> </li>
                <li> <button>Programs <i class="fa-solid fa-angle-down"></i></button>
                    <div class="dropdown-content">
                        <a href="bodybuilding.php">Bodybuilding</a>
                        <a href="powerlifting.php">Powerlifting</a>
                        <a href="calisthenics.php">Calisthenics</a>
                    </div>
                </li>
                <li> <a href="tutorials.php">Tutorials</a> </li>
                <li> <a href="about.php">About</a></li>
                <li> <a class="active" href="contact.php">Contact</a> </li>
                <li> <a href="account.php"><i class="fa-solid fa-arrow-right-to-bracket"></i></a> </li>
                <a href="#" id="close"><i class="fa-solid fa-x"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="calisthenics" >
        <h4>Contact the HLTHY team.</h4>
        <p> <strong>We are here to provide you woth 24/7 assistance.</strong> </p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH WITH US</span>
            <h2>Visit us at our HQ or leave a mesage down below.</h2>
            <div>
                <ul>
                    <li>
                        <i class="fa-solid fa-map-location"></i> 
                        <p>Beirut, Lebanon</p>
                    </li>
                    
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <p>HLTHY@support.ae</p>
                    </li>
                    
                    <li>
                        <i class="fa-solid fa-mobile-screen"></i>
                        <p>+961 70 123 456</p>
                    </li>
                    
                </ul>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3121.3366412315277!2d35.50266419697257!3d33.8969614943816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f16e6eb99ec5b%3A0xd1a171aa15c025a7!2sLebanese%20Parliament!5e0!3m2!1sen!2slb!4v1651663825812!5m2!1sen!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>Leave a message</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="youremail@example.com" required>
            <input type="text" placeholder="Subject" required>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <button class="normal">Submit</button>
        </form>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img src="images/logos/HLTHY - Black.svg" class="logo">
        </div>
        <div class="col">
            <h4>Contact Us</h4>
            <p><strong>Address:</strong> Beirut, Lebanon.</p>
            <p><strong>Phone:</strong> +96170123456.</p>
            <p><strong>Opening Hours:</strong> 08:30-17:30 Mon-Sat</p>
            <div class="follow">
                <h4>Follow Us: </h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook-square"></i>
                    <i class="fa-brands fa-twitter-square"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="about.php">About Us</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Blogs</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">Tutorials</a>
        </div>
        <div class="copyright">
            <p><i class="fa-regular fa-copyright"></i> HLTHY-STUDIOS. All Rights Reserved</p>
        </div>
    </footer>


    <script src="script.js"></script>
</body>
</html>