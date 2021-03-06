<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>HLTHY - Homepage</title>
</head>
<body>

    <section id="header">
        <a href="index.php"> <img src="images/logos/HLTHY - White - TP.svg" class="logo" width="300px" height="150px"> </a>
        <div>
            <ul id="navbar">
                <li> <a class="active" href="index.php">Home</a> </li>
                <li> <button>Programs <i class="fa-solid fa-angle-down"></i></button>
                    <div class="dropdown-content">
                        <a href="bodybuilding.php">Bodybuilding</a>
                        <a href="powerlifting.php">Powerlifting</a>
                        <a href="calisthenics.php">Calisthenics</a>
                    </div>
                </li>
                <li> <a href="tutorials.php">Tutorials</a> </li>
                <li> <a href="about.php">About</a></li>
                <li> <a href="contact.php">Contact</a> </li>
                <li> <a href="account.php"><i class="fa-solid fa-arrow-right-to-bracket"></i></a> </li>
                <a href="#" id="close"><i class="fa-solid fa-x"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="mission-statement">
        <h4>HLTHY - Mission Statement</h4>
        <p> <strong>We aim to offer FREE, High-Quality training to everyone. <br> 
            Accessible anywhere, anytime, and however the user desires.</strong> </p>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/features/1.svg">
            <h6>100% Free</h6>
        </div>

        <div class="fe-box">
            <img src="images/features/2.svg">
            <h6>Portable</h6>
        </div>

        <div class="fe-box">
            <img src="images/features/3.svg">
            <h6>High Quality</h6>
        </div>

        <div class="fe-box">
            <img src="images/features/4.svg">
            <h6>Personalized</h6>
        </div>

        <div class="fe-box">
            <img src="images/features/5.svg">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <section id="programs" class="section-p1">
        <h2>Our Programs</h2>
        <div class="pro-container">
            <div class="pro">
                <img src="images/programs/bb.jpg">
                <div class="desc">
                    <button class="normal" id="bbb">Bodybuilding</button>
                    <p id="bbD"></p>
                </div>
            </div>
            <div class="pro">
                <img src="images/programs/pl.jpg">
                <div class="desc">
                    <button class="normal" id="plb">Powerlifting</button>
                    <p id="plD"></p>
                </div>
            </div>
            <div class="pro">
                <img src="images/programs/cl.jpeg">
                <div class="desc">
                    <button class="normal" id="clb">Calisthenics</button>
                    <p id="clD"></p>
                </div>
            </div>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up to our Newsletter</h4>
            <p>Get all updates about healthy practicies & training facts through Email</p>
        </div>
        <div class="form">
            <input type="email" placeholder="youremail@example.com">
            <button class="normal">Sign Up</button>
        </div>
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