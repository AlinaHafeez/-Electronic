
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
<style>
    body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
}

.banner {
    background-color: #57BA98; 
    text-align: center;
    padding: 50px 0;
    font-family: "Geogia";
}

.banner h1 {
    font-size: 36px;
    color: black;
    margin: 0;
    font-family:Fantasy;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: flex-start;
    margin-top: 20px;
}

.product-card {
    width: 280px; 
    height: 380px; 
    background-color: white; 
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 20px;
    overflow: hidden;
    position: relative;
    transition: transform 0.3s, box-shadow 0.3s;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    background-color: ##57BA98; 
}

.product-info {
    padding: 20px;
    text-align: center;
}

.product-info h2 {
    margin-top: 0;
    font-size: 24px;
}

.product-info p {
    margin-bottom: 0;
    font-size: 16px;
}

.product-image {
    width: 200px; 
    height: 200px; 
    display: block;
}

.testimonial-container {
    width: 80%;
    margin: 50px auto;
    position: relative;
    overflow: hidden;
    border: 2px solid #57BA98; 
    border-radius: 10px; 
    padding: 20px; /* Add padding */
    background-color: white; 
}

.testimonial-slide {
    display: none;
    width: 100%;
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    opacity: 0;
    transition: opacity 1s ease-in-out; 
}

.testimonial-slide.active {
    display: block;
    opacity: 1;
    background-color: white; 
}

.testimonial-slide img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 20px;
}

.testimonial-slide p {
    font-size: 14px; 
    color: #333;
    font-family: 'Open Sans', sans-serif;
    margin-bottom: 20px;
    line-height: 1.6;
}

.testimonial-slide h3 {
    font-size: 24px;
    color: #444;
    font-family: 'Roboto', sans-serif;
    margin-bottom: 10px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
}

.testimonial-slide blockquote {
    font-size: 28px;
    color: black; 
    font-family: 'Georgia', serif;
    margin: 30px 0;
    position: relative;
}

.testimonial-slide blockquote:before,
.testimonial-slide blockquote:after {
    content: '\201C'; 
    font-size: 100px;
    color: black; 
    position: absolute;
    top: -20px;
    left: -20px;
    opacity: 0.3;
}

.testimonial-slide blockquote:after {
    content: '\201D'; 
    right: -20px;
    top: auto;
    bottom: -20px;
    left: auto;
}

.testimonial-slide:hover {
    box-shadow: 0 6px 8px #57BA98 ; 
    transform: translateY(-5px); 
}

.testimonial-navigation {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    z-index: 1; 
}

.testimonial-navigation button {
    background-color: #57BA98;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    margin: 0 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.testimonial-navigation button:hover {
    background-color: #38976d;
}

@media screen and (max-width: 768px) {
    .testimonial-container {
        width: 90%;
    }
}
.logo-container {
    max-width: 80%;
    margin: 0 auto;
    padding: 20px 0;
    text-align: center;
}

.logo-slider {
    display: flex;
    overflow: hidden;
    -webkit-overflow-scrolling: touch; 
    scrollbar-width: none; 
    -ms-overflow-style: none; 
}

.logo-slide {
    flex: 0 0 auto;
    margin-right: 20px;
}

.logo-slide:last-child {
    margin-right: 0; 
}

.logo {
    max-width: 100px; 
    height: auto;
    display: block;
    margin: 0 auto;
}


.logo-slider::-webkit-scrollbar {
    display: none;
}


    </style>
<?php include "header.php"?>
 <!--Stylesheet -->
 <link href="css/style.css" rel="stylesheet">
    <!-- banner start -->
    <section class="box">
    <div class="container-fluid" id="main-banner">
  </div>
  <h1 class="text-center animate__animated animate__fadeInUp" id="precision-electrics-heading" style="color:white;"  >SRS ELECTRICS
  </h1>
  <h6 class="text-center animate__animated animate__fadeInUp" id="slogan" style="color:white;" >Empowering Reliability, One Appliance at a
    Time.</h6>
        <video src="video.MP4" autoplay muted Loop></video>
    </section>
    <!-- banner end -->


    <!-- Facts Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="fact-item rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-dark mb-4"></i>
                        <p class="mb-2">Years Experience</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">100</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="fact-item rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-dark mb-4"></i>
                        <p class="mb-2">Skilled Professionals</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">175</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="fact-item rounded text-center h-100 p-5">
                        <i class="fa fa-lightbulb fa-4x text-dark mb-4"></i>
                        <p class="mb-2">Total Products</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">135</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="fact-item rounded text-center h-100 p-5">
                        <i class="fa fa-cart-plus fa-4x text-dark mb-4"></i>
                        <p class="mb-2">Order Everyday</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">500</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded border-success" src="image/about-1.jpg" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="image/about-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <p class="text-success text-uppercase mb-2">About Us</p>
                        <h1 class="display-6 mb-4">"Empowering Innovation with Expert Electronics Services"</h1>
                        <p>Welcome to SRS Electronics—your trusted partner in the world of electronic design and manufacturing. Founded on a passion for innovation and a commitment to excellence, our company has been delivering high-quality, reliable solutions to clients across various industries for over a decade.</p>
                        <p>At SRS Electronics, we specialize in turning complex electronic challenges into practical, effective solutions. Our team comprises skilled engineers, designers, and technicians who bring a wealth of experience and expertise to every project. From initial concept through design, manufacturing, and support, we are committed to providing our clients with the highest standards of service and quality.</p>
                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-success">Expertise and Services</i>
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-success">Tested Products</i>
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-success">Client Commitment</i>
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-success">Experienced Team</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- About End -->
<br> 
<br> 
<br>
<br>
    <!-- Service Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="text-success text-uppercase mb-2">Our Services</p>
                    <h1 class="display-6 mb-4">What Do We Offer For You?</h1>
                    <p class="mb-5">Welcome to SRS Electronics, where cutting-edge technology meets unparalleled expertise. Dive into our comprehensive range of services designed to support and enhance your electronic projects. From advanced PCB design and precise electronic assembly to robust system integration and meticulous testing, we ensure each component functions seamlessly. Our dedicated team also specializes in rapid prototyping, efficient repair, and ongoing maintenance, providing customized solutions that drive innovation and success in your endeavors. Trust SRS Electronics to be your partner in navigating the complexities of modern electronics with precision and professionalism.






                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                    <i class="fa fa-star text-white"></i>
                                </div>
                                <h5 class="mb-0">System integration and testing</h5>
                            </div>
                            <span>"Seamless system integration and testing."</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                    <i class="fa fa-star text-white"></i>
                                </div>
                                <h5 class="mb-0">Prototyping services</h5>
                            </div>
                            <span>"Rapid and precise prototyping to bring your concepts to life.".</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                    <i class="fa fa-star text-white"></i>
                                </div>
                                <h5 class="mb-0">Repair and maintenance services</h5>
                            </div>
                            <span>"Efficient repair and maintenance services"</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                    <i class="fa fa-star text-white"></i>
                                </div>
                                <h5 class="mb-0">Electronic assembly services</h5>
                            </div>
                            <span>"Precision electronic assembly services."</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="image/service-1.jpg" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="image/service-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <div class="banner" style="background-color: #57BA98;" >
        <h1>Explore Our Products Showcase</h1>
    </div>
    
    <div class="container">
        <?php
       
        $products = array(
            "Fuses" => array(
                "description" => "Protect your circuits with our high-quality fuses.",
                "image" => "image/fuses.jpg"
            ),
            "Switchgears" => array(
                "description" => "Control your electrical power distribution with our reliable switchgears.",
                "image" => "image/switch gear.jpg"
            ),
            "Capacitors" => array(
                "description" => "Improve power factor and stabilize voltage with our capacitors.",
                "image" => "image/capacitors.jpg"
            ),
            "Resistors" => array(
                "description" => "Regulate current flow and reduce voltage with our resistors.",
                "image" => "image/resistors.jpg"
            )
        );

        // Generate product cards dynamically
        foreach ($products as $product => $data) {
            echo "<div class='product-card'>
                    <img src='" . $data['image'] . "' class='product-image' alt='$product'>
                    <div class='product-info'>
                        <h2>$product</h2>
                        <p>" . $data['description'] . "</p>
                    </div>
                </div>";
        }
        ?>
    </div>

    <div class="testimonial-container">
        <div class="testimonial-slide active">
            <img src="image/person1.jpg" alt="Customer 1">
            <h3>Aris Dawson, Electrical Engineer</h3>
            <blockquote>"SRS Electronics provided top-notch products and excellent customer service. Highly recommended!"</blockquote>
        </div>
        <div class="testimonial-slide">
            <img src="image/person2.jpg" alt="Customer 2">
            <h3>Jane Jacksons, Electronics Technician</h3>
            <blockquote>"I'm extremely satisfied with the products I purchased from SRS Electronics. Will definitely buy again!"</blockquote>
        </div>
        <div class="testimonial-slide">
            <img src="image/person3.jpg" alt="Customer 3">
            <h3>Jennifer Winget, Electrical Engineer</h3>
            <blockquote>"The quality of SRS Electronics' products exceeded my expectations. Great value for money!"</blockquote>
        </div>
        <div class="testimonial-slide">
            <img src="image/person4.jpg" alt="Customer 4">
            <h3>Alice Brown, Lab Asisstant</h3>
            <blockquote>"I've been a loyal customer of SRS Electronics for years. Their reliability and consistency are unmatched!"</blockquote>
        </div>
        <div class="testimonial-slide">
            <img src="image/person5.jpg" alt="Customer 5">
            <h3>David Wilson, Forensic Expert</h3>
            <blockquote>"SRS Electronics always delivers on their promises. Their products never disappoint!"</blockquote>
        </div>
        <div class="testimonial-slide">
            <img src="image/person6.jpg" alt="Customer 6">
            <h3>Sarah Davis, Electrical Engineer</h3>
            <blockquote>"I'm impressed by the professionalism and efficiency of SRS Electronics. I'll be a returning customer for sure!"</blockquote>
        </div>
    </div>
    <div class="logo-container">
        <h2>Our Partner Companies</h2>
    
        <div class="logo-slider">
            
            <div class="logo-slide"><img src="image/logo1.png" alt="Company 1" class="logo"></div>
            <div class="logo-slide"><img src="image/logo2.png" alt="Company 2" class="logo"></div>
            <div class="logo-slide"><img src="image/logo3.png" alt="Company 3" class="logo"></div>
            <div class="logo-slide"><img src="image/logo4.png" alt="Company 4" class="logo"></div>
            <div class="logo-slide"><img src="image/logo5.png" alt="Company 5" class="logo"></div>
            <div class="logo-slide"><img src="image/logo6.png" alt="Company 6" class="logo"></div>
            <div class="logo-slide"><img src="image/logo7.png" alt="Company 7" class="logo"></div>
            <div class="logo-slide"><img src="image/logo8.png" alt="Company 8" class="logo"></div>
            <div class="logo-slide"><img src="image/logo9.png" alt="Company 9" class="logo"></div>
            <div class="logo-slide"><img src="image/logo10.png" alt="Company 10" class="logo"></div>
            <div class="logo-slide"><img src="image/logo1.png" alt="Company 1" class="logo"></div>
            <div class="logo-slide"><img src="image/logo2.png" alt="Company 2" class="logo"></div>
            <div class="logo-slide"><img src="image/logo3.png" alt="Company 3" class="logo"></div>
            <div class="logo-slide"><img src="image/logo4.png" alt="Company 4" class="logo"></div>
            <div class="logo-slide"><img src="image/logo5.png" alt="Company 5" class="logo"></div>
            <div class="logo-slide"><img src="image/logo6.png" alt="Company 6" class="logo"></div>
            <div class="logo-slide"><img src="image/logo7.png" alt="Company 7" class="logo"></div>
            <div class="logo-slide"><img src="image/logo8.png" alt="Company 8" class="logo"></div>
            <div class="logo-slide"><img src="image/logo9.png" alt="Company 9" class="logo"></div>
            <div class="logo-slide"><img src="image/logo10.png" alt="Company 10" class="logo"></div>
            <div class="logo-slide"><img src="image/logo1.png" alt="Company 1" class="logo"></div>
            <div class="logo-slide"><img src="image/logo2.png" alt="Company 2" class="logo"></div>
            <div class="logo-slide"><img src="image/logo3.png" alt="Company 3" class="logo"></div>
            <div class="logo-slide"><img src="image/logo4.png" alt="Company 4" class="logo"></div>
            <div class="logo-slide"><img src="image/logo5.png" alt="Company 5" class="logo"></div>
            <div class="logo-slide"><img src="image/logo6.png" alt="Company 6" class="logo"></div>
            <div class="logo-slide"><img src="image/logo7.png" alt="Company 7" class="logo"></div>
            <div class="logo-slide"><img src="image/logo8.png" alt="Company 8" class="logo"></div>
            <div class="logo-slide"><img src="image/logo9.png" alt="Company 9" class="logo"></div>
            <div class="logo-slide"><img src="image/logo10.png" alt="Company 10" class="logo"></div>
            <div class="logo-slide"><img src="image/logo1.png" alt="Company 1" class="logo"></div>
            <div class="logo-slide"><img src="image/logo2.png" alt="Company 2" class="logo"></div>
            <div class="logo-slide"><img src="image/logo3.png" alt="Company 3" class="logo"></div>
            <div class="logo-slide"><img src="image/logo4.png" alt="Company 4" class="logo"></div>
            <div class="logo-slide"><img src="image/logo5.png" alt="Company 5" class="logo"></div>
            <div class="logo-slide"><img src="image/logo6.png" alt="Company 6" class="logo"></div>
            <div class="logo-slide"><img src="image/logo7.png" alt="Company 7" class="logo"></div>
            <div class="logo-slide"><img src="image/logo8.png" alt="Company 8" class="logo"></div>
            <div class="logo-slide"><img src="image/logo9.png" alt="Company 9" class="logo"></div>
            <div class="logo-slide"><img src="image/logo10.png" alt="Company 10" class="logo"></div>
            <div class="logo-slide"><img src="image/logo10.png" alt="Company 10" class="logo"></div>
            <div class="logo-slide"><img src="image/logo1.png" alt="Company 1" class="logo"></div>
            <div class="logo-slide"><img src="image/logo2.png" alt="Company 2" class="logo"></div>
            <div class="logo-slide"><img src="image/logo3.png" alt="Company 3" class="logo"></div>
            <div class="logo-slide"><img src="image/logo4.png" alt="Company 4" class="logo"></div>
            <div class="logo-slide"><img src="image/logo5.png" alt="Company 5" class="logo"></div>
            <div class="logo-slide"><img src="image/logo6.png" alt="Company 6" class="logo"></div>
            <div class="logo-slide"><img src="image/logo7.png" alt="Company 7" class="logo"></div>
            <div class="logo-slide"><img src="image/logo8.png" alt="Company 8" class="logo"></div>
            <div class="logo-slide"><img src="image/logo9.png" alt="Company 9" class="logo"></div>
            <div class="logo-slide"><img src="image/logo10.png" alt="Company 10" class="logo"></div>
            <div class="logo-slide"><img src="image/logo10.png" alt="Company 10" class="logo"></div>
            <div class="logo-slide"><img src="image/logo1.png" alt="Company 1" class="logo"></div>
            <div class="logo-slide"><img src="image/logo2.png" alt="Company 2" class="logo"></div>
            <div class="logo-slide"><img src="image/logo3.png" alt="Company 3" class="logo"></div>
            <div class="logo-slide"><img src="image/logo4.png" alt="Company 4" class="logo"></div>
            <div class="logo-slide"><img src="image/logo5.png" alt="Company 5" class="logo"></div>
            <div class="logo-slide"><img src="image/logo6.png" alt="Company 6" class="logo"></div>
            <div class="logo-slide"><img src="image/logo7.png" alt="Company 7" class="logo"></div>
            <div class="logo-slide"><img src="image/logo8.png" alt="Company 8" class="logo"></div>
            <div class="logo-slide"><img src="image/logo9.png" alt="Company 9" class="logo"></div>
            <div class="logo-slide"><img src="image/logo10.png" alt="Company 10" class="logo"></div>
        </div>
        </div>
    </div>
    </div>

    <script>
        const slides = document.querySelectorAll('.testimonial-slide');
        let currentSlide = 0;
        const totalSlides = slides.length;

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % totalSlides;
            slides[currentSlide].classList.add('active');
        }

        setInterval(nextSlide, 3000); // Change slide every 3 seconds

        const logoSlider = document.querySelector('.logo-slider');
        const logoSlides = document.querySelectorAll('.logo-slide');
        const logoWidth = logoSlides[0].offsetWidth + 20;
        let scrollAmount = 0;
        const scrollSpeed = 1; 

        function scrollLeft() {
            scrollAmount += scrollSpeed;
            logoSlider.scrollLeft = scrollAmount;

            if (scrollAmount >= logoWidth) {
                logoSlider.appendChild(logoSlides[0].cloneNode(true));
                scrollAmount -= logoWidth;
            }
        }

        setInterval(scrollLeft, 30);
    </script>
<?php include "footer.php"?>
 
    