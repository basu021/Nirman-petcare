<?php

if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $terms = isset($_POST['terms']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Validate mobile number format
    if (!preg_match("/^\d{10}$/", $mobile)) {
        die("Invalid mobile number format");
    }

    // Validate password and confirm password match
    if ($password !== $confirm_password) {
        die("Passwords do not match");
    }

    // Hash password using PHP's password_hash() function
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into user table
    $query = "INSERT INTO user (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$hashed_password')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "User registered successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

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
                            <h1 class="page-header-title">Register</h1>
                        </div>
                        <div class="col-sm-auto">
                            <ol class="breadcrumb mb-0 justify-content-center mt-3 mt-sm-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Register</li>
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
                        <div class="col-lg-10 col-xl-7">
                            <div class="account-form-wrap">
                                <h3 class="account-form-title">Register</h3>
                                <form id="account-form" action="#">
                                    <div class="form-group mb-4">
                                        <input class="form-control" type="text" placeholder="Name">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input class="form-control" type="email" placeholder="Email">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input class="form-control" type="number" placeholder="Mobile number">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input class="form-control" type="password" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-5">
                                        <input class="form-control" type="password" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group account-info-group mb-5">
                                        <div class="rememberme-account d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">Accept to terms and conditions.</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-primary w-100" type="submit" name="submit">Register</a>
                                        <p class="register-now mt-5">Have an Account! <a href="../login/index.php">Login</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Account Area Wrapper ==-->

        </main>

        <?php include "../footer/Footer.php"; ?>