<?php include "../header/Header.php"; ?>

    <!--== Start: Wrapper ==-->
    <div class="wrapper">
    <?php include "../header/TopHeader.php";?>
    <?php include "../header/HeaderMenus.php";?>
        <main class="main-content">
            <!--== Start: Page Header Area Wrapper ==-->
            <div class="section page-header-area" data-bg-img="../assets/images/photos/bg3.jpg">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-auto text-center text-sm-start">
                            <h1 class="page-header-title">Contact</h1>
                        </div>
                        <div class="col-sm-auto">
                            <ol class="breadcrumb mb-0 justify-content-center mt-3 mt-sm-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End: Page Header Area Wrapper ==-->
            <div class="contact-info section section-padding">
                <div class="container">
                    <div class="contact-details-info-wrap">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-details-info-item">
                                    <h3 class="title">Head Quarter:</h3>
                                    <ul class="contact-details-info">
                                        <li>
                                            <i class="icofont-ui-call"></i>
                                            <a href="tel://5123602763">+917798789898</a>
                                        </li>
                                        <li>
                                            <i class="icofont-envelope-open"></i>
                                            <a href="mailto://support@gamil.com">contact@petcare.com</a>
                                        </li>
                                        <li>
                                            <i class="icofont-location-pin"></i>
                                            <p>Jaydev Vihar, Lane Number 3, Jayadev Vihar, Bhubaneswar, Odisha</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-details-info-item">
                                    <h3 class="title">Branch Office:</h3>
                                    <ul class="contact-details-info">
                                        <li>
                                            <i class="icofont-ui-call"></i>
                                            <a href="tel://+917798789897">+917798789897</a>
                                        </li>
                                        <li>
                                            <i class="icofont-envelope-open"></i>
                                            <a href="mailto://contact@petcare.com">contact@petcare.com</a>
                                        </li>
                                        <li>
                                            <i class="icofont-location-pin"></i>
                                            <p>Technology Corridor, Infocity, Chandrasekharpur, Bhubaneswar, Odisha 751024</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--== Start: Contact Section Wrapper ==-->
            <div class="contact-section section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--== Start: Section Title ==-->
                            <div class="section-title contact-section-title mt-n3 mb-8 mb-xl-10 pb-4">
                                <h2 class="title">Get In Touch With Us</h2>
                                
                            </div>
                            <!--== End: Section Title ==-->

                            <!--== Start Contact Form ==-->
                            <div class="contact-form">
                                <form id="contact-form" action="contact.php" method="POST">
                                    <div class="form-group mb-3 mb-xl-4">
                                        <input class="form-control" type="text" name="con_name" placeholder="Name:">
                                    </div>
                                    <div class="form-group mb-3 mb-xl-4">
                                        <input class="form-control" type="text" name="con_phone" placeholder="Phone:">
                                    </div>
                                    <div class="form-group mb-3 mb-xl-4">
                                        <input class="form-control" type="email" name="con_email" placeholder="Email:">
                                    </div>
                                    <div class="form-group mb-5 mb-xl-10">
                                        <textarea class="form-control" name="con_message" placeholder="Message:"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="contact-form-btn btn btn-primary btn-icon-right" type="submit" name="submit"><span>Submit</span> <i class="icofont-double-right icon"></i></button>
                                    </div>
                                </form>

                                <!--== Message Notification ==-->
                                <div class="form-message"></div>
                            </div>
                            <!--== End Contact Form ==-->
                        </div>
                    </div>
                </div>

                <div class="contact-form-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.028025203342!2d85.80609431492121!3d20.34046088637531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a190902b2a59ce5%3A0xdfb554a4e0bafffb!2sTrident%20Academy%20of%20Technology!5e0!3m2!1sen!2sin!4v1676570918019!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!--== End: Contact Section Wrapper ==-->
        </main>
        <?php include "../footer/Footer.php"; ?>

        

            

        