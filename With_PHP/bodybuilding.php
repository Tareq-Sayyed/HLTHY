<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>HLTHY - Bodybuilding</title>
</head>
<body>

    <section id="header">
        <a href="index.php"> <img src="images/logos/HLTHY - White - TP.svg" class="logo" width="300px" height="150px"> </a>
        <div>
            <ul id="navbar">
                <li> <a href="index.php">Home</a> </li>
                <li> <button>Programs <i class="fa-solid fa-angle-down"></i></button>
                    <div class="dropdown-content">
                        <a class="active" href="bodybuilding.php">Bodybuilding</a>
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
            <img src="images/bodybuilding/arnold.webp">
            <h6>Arnold Schwarzenegger</h6>
        </div>

        <div class="fe-box">
            <img src="images/bodybuilding/ronnie.webp">
            <h6>Ronnie Coleman</h6>
        </div>

        <div class="fe-box">
            <img src="images/bodybuilding/samir.webp">
            <h6>Samir Bannout</h6>
        </div>

        <div class="fe-box">
            <img src="images/bodybuilding/cbum.webp">
            <h6>Chris Bumstead</h6>
        </div>

        <div class="fe-box">
            <img src="images/bodybuilding/zyzz.jpg">
            <h6>Aziz Sergeyevich Shavershian</h6>
        </div>
    </section>

    <section id="programs" class="section-p1">
        <h2>4-Day Split - Push/Pull/Legs/Full</h2>
        <div class="pro-container">

            <div class="pro">
                <img src="images/programs/bb.jpg">
                <div class="desc">
                    <button class="normal" id="bbT1">Day 1</button>
                    <p id="bbP1"></p>
                </div>
            </div>

            <div class="pro">
                <img src="images/programs/bb.jpg">
                <div class="desc">
                    <button class="normal" id="bbT2">Day 2</button>
                    <p id="bbP2"></p>
                </div>
            </div>

            <div class="pro">
                <img src="images/programs/bb.jpg">
                <div class="desc">
                    <button class="normal" id="bbT3">Day 3</button>
                    <p id="bbP3"></p>
                </div>
            </div>

            <div class="pro">
                <img src="images/programs/bb.jpg">
                <div class="desc">
                    <button class="normal" id="bbT4">Day 4</button>
                    <p id="bbP4"></p>
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