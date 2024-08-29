

<style>
    body {
        background-color: #57BA98;
    }

    h4,
    h5,
    h6,
    .h4,
    .h5,
    .h6 {
        font-weight: 600 !important;
    }

    .py-6 {
        padding-top: 6rem;
        padding-bottom: 6rem;
    }

    .my-6 {
        margin-top: 6rem;
        margin-bottom: 6rem;
    }

    .back-to-top {
        position: fixed;
        display: none;
        right: 30px;
        bottom: 30px;
        z-index: 99;
    }


    /*** Spinner ***/
    #spinner {
        opacity: 0;
        visibility: hidden;
        transition: opacity .5s ease-out, visibility 0s linear .5s;
        z-index: 99999;
    }

    #spinner.show {
        transition: opacity .5s ease-out, visibility 0s linear 0s;
        visibility: visible;
        opacity: 1;
    }


    /*** Button ***/
    .btn {
        font-weight: 500;
        transition: .5s;
        color: #57BA98;
    }

    .btn.btn-primary {
        color: #57BA98;
        background-color: #FFFFFF;
        border-color: #57BA98;
    }

    .btn-square {
        width: 38px;
        height: 38px;
    }

    .btn-sm-square {
        width: 32px;
        height: 32px;
    }

    .btn-lg-square {
        width: 48px;
        height: 48px;
    }

    .btn-square,
    .btn-sm-square,
    .btn-lg-square {
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: normal;
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

    /*** Facts ***/
    .fact-item {
        transition: .5s;
    }

    .fact-item:hover {
        margin-top: -10px;
        background: #FFFFFF !important;
        box-shadow: #65CCB8;
    }


    /*** About ***/
    .img-twice::before {
        position: absolute;
        content: "";
        width: 60%;
        height: 80%;
        top: 10%;
        left: 20%;
        background: #57BA98;
        border: 25px solid #FFFFFF;
        border-radius: 6px;
        z-index: -1;
    }





    /*** Team ***/
    .team-item .team-text {
        position: relative;
        height: 100px;
        overflow: hidden;
    }

    .team-item .team-title {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: #FFFFFF;
        transition: .5s;
    }

    .team-item:hover .team-title {
        top: -100px;
    }

    .team-item .team-social {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 100px;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #57BA98;
        transition: .5s;
    }

    .team-item .team-social .btn {
        margin: 0 3px;
    }

    .team-item:hover .team-social {
        top: 0;
    }




    /*** Footer ***/
    .footer .btn.btn-link {
        display: block;
        margin-bottom: 5px;
        padding: 0;
        text-align: left;
        color: #57BA98;
        font-weight: normal;
        text-transform: capitalize;
        transition: .3s;
    }

    .footer .btn.btn-link::before {
        position: relative;
        content: "\f105";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        color: white;
        margin-right: 10px;
    }

    .footer .btn.btn-link:hover {
        color: white;
        letter-spacing: 1px;
        box-shadow: none;
    }

    .footer .btn.btn-link:hover {
        color: white;
        letter-spacing: 1px;
        box-shadow: none;
    }

    .back-to-top {
        position: fixed;
        display: none;
        right: 30px;
        bottom: 30px;
        z-index: 99;
    }

    .back-to-top .btn {
        font-size: 24px;
        color: #fff;
        background-color: #65CCB8;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        transition: all 0.3s ease-in-out;
    }

    .back-to-top .btn:hover {
        background-color: #57BA98;
        color: #fff;
    }

</style>
<?php include "header.php"?>


<?php
include('connection.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
 

    $select ="select email from contactus where email='$email'";
    $check_mail =mysqli_query($connect,$select);
    if(mysqli_num_rows($check_mail)>0)
    {
        echo"<script> alert('Email Already Exists')</script>";
    }
    else
    {
        $sql="insert into contactus (name, email, subject, message)
        values ('$name', '$email', '$subject', '$message')";
        mysqli_query($connect,$sql);
        echo"<script> alert('your form is submit')</script>";
        // header('location:contactus.php');
    }
 
}
?>
<body>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6" id="banner">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-primary active" aria-current="page"></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-6 mb-4">If You Have Any Query, Please Contact Us</h1>
            </div>
            <form method="post" class="php-email-form">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                            <label for="name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                            <label for="email">Your Email</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Google Map Start -->
    <div class="container-xxl py-6 px-0">
        <iframe class="w-100 mb-n2" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->

    <?php include "footer.php"?>