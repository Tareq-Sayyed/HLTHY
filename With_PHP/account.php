<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>HLTHY - Accounts</title>
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
                <li> <a href="contact.php">Contact</a> </li>
                <li> <a  class="active" href="account.php"><i class="fa-solid fa-arrow-right-to-bracket"></i></a> </li>
                <a href="#" id="close"><i class="fa-solid fa-x"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="mission-statement" >
        <h4></h4>
        <p> <strong></strong> </p>
    </section>

    <center>
        <form method="post" action="login.php" enctype="multipart/form-data" class="form" id="login" name="register" style="max-width: 80%">
            <h1 class="form__title">Login to HLTHY</h1>
            
            <div class="form__message form__message--error">

            </div>

            <div class="form__input-group">
                <input type="email" class="form__input" autofocus id="email" name="email" placeholder="Email" required>
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="password" class="form__input" autofocus id="password" name="password" placeholder="Password" required>
                <div class="form__input-error-message"></div>
            </div>

            <center><button class="form__button" type="submit">Login</button></center>

            <br>
            <p class="form__text">
                <a href="#" class="form__link">Reset My Password</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="" id="linkCreateAccount">Don't have an account? Sign Up</a>
            </p>
        </form>
    </center>

    <center>
        <form method="post" action="registration.php" enctype="multipart/form-data" class="form form--hidden" id="createAccount" name="register" style="max-width: 80%">
            <h1 class="form__title">Sign Up to HLTHY</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus id="name" name="name" placeholder="Name" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="email" class="form__input" autofocus id="email" name="email" placeholder="Email Address" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus id="password" name="password" placeholder="Password" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password" required>
                <div class="form__input-error-message"></div>
            </div>
            <center><button class="form__button" type="submit">Sign Up</button></center>
            <br>
            <p class="form__text">
                <a class="form__link" href="" id="linkLogin">Sign In</a>
            </p>
        </form>
    </center>

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

    <script>
        function setFormMessage(formElement, type, message) {
            const messageElement = formElement.querySelector(".form__message");
            messageElement.textContent = message;
            messageElement.classList.remove("form__message--success", "form__message--error");
            messageElement.classList.add(`form__message--${type}`);
        }

        function setInputError(inputElement, message) {
            inputElement.classList.add("form__input--error");
            inputElement.parentElement.querySelector(".form__input-error-message").textContent = message;
        }

        function clearInputError(inputElement) {
            inputElement.classList.remove("form__input--error");
            inputElement.parentElement.querySelector(".form__input-error-message").textContent = "";
        }

        document.addEventListener("DOMContentLoaded", () => {
            const loginForm = document.querySelector("#login");
            const createAccountForm = document.querySelector("#createAccount");
            document.querySelector("#linkCreateAccount").addEventListener("click", e => {
                e.preventDefault();
                loginForm.classList.add("form--hidden");
                createAccountForm.classList.remove("form--hidden");
            });
            document.querySelector("#linkLogin").addEventListener("click", e => {
                e.preventDefault();
                loginForm.classList.remove("form--hidden");
                createAccountForm.classList.add("form--hidden");
            });

            loginForm.addEventListener("submit", e => {
                e.preventDefault();
                setFormMessage(loginForm, "error", "Invalid Username/Password");
            });
        });
    </script>
    <script src="script.js"></script>
</body>
</html>
