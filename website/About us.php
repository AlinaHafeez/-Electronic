<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
    margin: 0;
    padding: 0;
    background-color: #57BA98; /* Mint green background */
    font-family: 'Sofia', sans-serif;
}



.card-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 20px;
}

.card {
    background: white;
    border-radius: 10px;
    margin: 10px;
    width: calc(33.333% - 20px);
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
}

.card img {
    width: 100%;
    transition: transform 0.5s ease;
    height: 200px;
    object-fit: cover;
}

.card:hover img {
    transform: scale(1.1);
}

.card-content {
    padding: 15px;
    text-align: center;
}

.social-icons {
    text-align: center;
    padding: 20px;
}

.social-icons a {
    color: #333;
    margin: 0 10px;
    font-size: 24px;
    transition: color 0.3s;
}

.social-icons a:hover {
    color: #57BA98;
}

@media (max-width: 768px) {
    .card {
        width: calc(50% - 20px);
    }
}

@media (max-width: 480px) {
    .card {
        width: 100%;
    }
}
.heading-container {
    display: inline-block;
     text-align: center; /* Center text alignment */

}

h1, h2 {
    margin: 0;
    padding: 0;
    font-size: 2rem;
    animation: floatIn 1.5s ease-out;
}

h2 {
    font-size: 1.5rem;
    color: #d0f0c0; /* Lighter shade for the subheading */
}

/* Keyframes for the floating text animation */
@keyframes floatIn {
    0% {
        transform: translateY(20px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .heading-container {
        text-align: center;
    }

    h1, h2 {
        font-size: 1.5rem;
        animation: none;
    }
}

@media (max-width: 480px) {
    .heading-container {
        display: block;
    }

    h1, h2 {
        font-size: 1.2rem;
    }
}

/*** Header ***/
.container-fluid.page-header {
    background-color: #72EBC0;
}


/* Simple floating animation for the 'About Us' heading */
@keyframes floatIn {
    0% {
        transform: translateY(20px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

#about-us-heading.animated {
    animation: floatIn 1.5s ease-out;
}







    </style>
</head>
<body>
    <?php include "header.php" ?>

    <!-- Banner Section -->
    <div class="container-fluid page-header py-6" style="background-color: background-color: #72EBC0;">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3" id="about-us-heading">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item text-primary active" aria-current="page"></li>
            </ol>
        </nav>
    </div>
</div>

    <!-- Card Section -->
    <div class="card-container">
        <div class="card">
            <img src="image/img.jpeg" alt="Our Mission">
            <div class="card-content">
                <h3>Our Mission</h3>
                <p>We aim to provide the best electrical solutions that are innovative and sustainable.</p>
            </div>
        </div>
        <div class="card">
            <img src="image/about1.png" alt="Our Vision">
            <div class="card-content">
                <h3>Our Vision</h3>
                <p>Our vision is to be a world leader in the electrical sector, pushing forward with new technologies and smart solutions.</p>
            </div>
        </div>
        <div class="card">
            <img src="image/about2.png" alt="Our Values">
            <div class="card-content">
                <h3>Our Values</h3>
                <p>Commitment, Sustainability, and Innovation define our approach to reshaping the industry.</p>
            </div>
        </div>
    </div>

    <!-- Social Icons -->
    <div class="social-icons">
        <a href="https://twitter.com/yourusername"><i class="fab fa-twitter"></i></a>
        <a href="https://instagram.com/yourusername"><i class="fab fa-instagram"></i></a>
        <a href="https://facebook.com/yourusername"><i class="fab fa-facebook-f"></i></a>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
