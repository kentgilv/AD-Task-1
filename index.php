<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriHealth</title>

    <!-- Roboto Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <!-- Google Font Icons Link -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <nav>
            <!-- Brand Logo and Name -->
            <div class="nav-brand">
                <a href="index.php" title="NutriHealth Logo"><img class="brand-logo"
                        src="./assets/img/nutrihealth-logo.png" height="40px" alt="NutriHealth Logo"></a>
                <a class="brand-name" href="index.php" title="Brand Name">NutriHealth</a>
            </div>

            <!-- Toggle Menu Button -->
            <div class="toggle-menu">
                <button id="toggleMenuBtn" class="toggle-menu-btn" onclick="toggleMenu()" title="Show Menu"><span
                        id="toggleIcon" class="material-icons"> menu </span></button>
            </div>

            <!-- Nav Links -->
            <div>
                <ul id="navLinks" class="nav-links">
                    <li><a class="active-link" href="index.php" title="View Homepage">Home</a></li>
                    <li><a href="./pages/services-page/index.php
                    " title="View Services">Services</a></li>
                    <li><a href="" title="View About Information">About</a></li>
                    <li><a href="" title="View Contact Information">Contact</a></li>
                    <li><a id="signUpBtn" href="" title="Create New Account">Sign Up</a></li>
                </ul>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero-section">
            <!-- Hero Text -->
            <div class="hero-text">
                <h1>Empower Your Health and Fitness</h1>
                <p>Start your journey today with expert tips on fitness, nutrition, and mindfulness.</p>
                <a id="getStartedBtn" href="./pages/services-page/index.php" title="Click Here to Get Started">Get
                    Started</a>
            </div>

            <!-- Hero Image -->
            <div class="hero-image">
                <img src="./assets/img/hero-image.png" alt="Pasta in a Bowl">
            </div>
        </section>
    </header>

    <footer>
        <p>&copy; <?php echo date(format: "Y"); ?> NutriHealth. All rights reserved</p>
    </footer>

    <script src="./assets/js/script.js"></script>
</body>

</html>