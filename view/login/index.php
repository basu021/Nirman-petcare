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
                            <h1 class="page-header-title">Login</h1>
                        </div>
                        <div class="col-sm-auto">
                            <ol class="breadcrumb mb-0 justify-content-center mt-3 mt-sm-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End: Page Header Area Wrapper ==-->

            <!--== Start Account Area Wrapper ==-->
            <section class="account-section section section-padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="account-form-wrap">
                                <h3 class="account-form-title">Login</h3>
                                <form id="account-form" action="#">
                                    <div class="form-group mb-4">
                                        <input class="form-control" type="text" placeholder="Username">
                                    </div>
                                    <div class="form-group mb-5">
                                        <input class="form-control" type="password" placeholder="Password">
                                    </div>
                                    <div class="form-group account-info-group mb-5">
                                        <div class="rememberme-account d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">Remember me</label>
                                        </div>
                                        <a class="lost-password" href="#/">Lost your password?</a>
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-primary w-100" href="my-account.html">Login</a>
                                        <p class="register-now mt-5">Don't you have an account? <a href="account-register.html">Register</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Account Area Wrapper ==-->

            <!--== Start: Divider Section Wrapper ==-->
            <div class="divider-section divider-donation section bg-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <div class="divider-content">
                                <h4 class="sub-title">MAKE DONATION</h4>
                                <h2 class="title">You can connect with us</h2>
                                <p>It is long established fact that reader will distracted readable content of a page when looking layout used.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <a class="btn btn-primary btn-icon-right" href="contact.html"><span>Join Now</span> <i class="icofont-double-right icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="section-pattern-img section-pattern-img-style6">
                    <img src="../assets/images/shape/6.png" width="131" height="168" alt="Image">
                </div>
            </div>
            <!--== End: Divider Section Wrapper ==-->
        </main>

        <?php include "../footer/Footer.php"; ?>
