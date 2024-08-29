<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Choose SRS Electronics</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sofia:wght@400;700&display=swap">
    <style>
       body {
            margin: 0;
            font-family: Arial, sans-serif; /* Uniform font family */
        }

        .page-header {
            background-color: #57BA98; /* Mint green background */
            color: white; /* Ensuring text color is white */
            text-align: center;
            padding: 50px 0;
            animation: floatDown 2s ease-in-out; /* Single run animation */
        }

        @keyframes floatDown {
            0% {
                transform: translateY(-10px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .why-us-content {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .feature {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #65CCB8;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .feature:hover {
            transform: translateY(-5px);
        }

        .feature h2 {
            color: white;
        }

        .feature p {
            color: black;
        }

        .icon {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .guarantee {
            text-align: center;
            margin-top: 50px;
        }

        .guarantee img {
            width: 100px;
        }

        @media screen and (max-width: 768px) {
            .why-us-content {
                width: 90%;
            }
        }


        /*** Header ***/
    .header-carousel .owl-carousel-inner {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        background: rgba(0, 0, 0, .5);
    }

    @media (max-width: 768px) {
        .header-carousel .owl-carousel-item {
            position: relative;
            min-height: 600px;
        }

        .header-carousel .owl-carousel-item img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .header-carousel .owl-carousel-item p {
            font-size: 16px !important;
        }
    }

    .header-carousel .owl-nav {
        position: relative;
        width: 80px;
        height: 80px;
        margin: -40px auto 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .header-carousel .owl-nav::before {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: #FFFFFF;
        transform: rotate(45deg);
    }

    .header-carousel .owl-nav .owl-prev,
    .header-carousel .owl-nav .owl-next {
        position: relative;
        font-size: 40px;
        color: #FFFFFF;
        transition: .5s;
        z-index: 1;
    }

    .header-carousel .owl-nav .owl-prev:hover,
    .header-carousel .owl-nav .owl-next:hover {
        color: #65CCB8;
    }

    .page-header {
        margin-bottom: 6rem;
        background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/carousel-1.jpg) center center no-repeat;
        background-size: cover;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        color: #FFFFFF;
    }
#banner{
    background-color: #72EBC0;
}
    </style>
<?php include "header.php"?>

   <!-- Page Header Start -->
   <div class="container-fluid page-header py-6" id="banner">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">Why Choose SRS Electronics?</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-primary active" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="why-us-content">
        <div class="feature">
            <span class="icon">🔍</span>
            <h2>Wide Selection</h2>
            <p>Explore our extensive range of electronic products for every need.</p>
        </div>
        <div class="feature">
            <span class="icon">💼</span>
            <h2>Industry Experience</h2>
            <p>Benefit from our years of experience and expertise in the electronics industry.</p>
        </div>
        <div class="feature">
            <span class="icon">🛡️</span>
            <h2>Quality Assurance</h2>
            <p>Rest assured, our products undergo rigorous quality checks to ensure reliability.</p>
        </div>
        <div class="feature">
            <span class="icon">👨‍💼</span>
            <h2>Expert Support</h2>
            <p>Get assistance from our knowledgeable team of experts for all your inquiries.</p>
        </div>
        <div class="feature">
            <span class="icon">📦</span>
            <h2>Fast Shipping</h2>
            <p>Enjoy prompt delivery with our efficient shipping services.</p>
        </div>
        <div class="feature">
            <span class="icon">💰</span>
            <h2>Competitive Pricing</h2>
            <p>Get the best value for your money with our competitive pricing options.</p>
        </div>
    </div>

    <div class="guarantee">
        <h2>Satisfaction Guaranteed</h2>
        <img src="image/satisfaction1.png" alt="Satisfaction Guarantee">
        <p>Shop with confidence knowing that your satisfaction is our top priority.</p>
    </div>
    <?php include "footer.php"?>
