<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar | MakanYuk!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <!-- <form class="login100-form validate-form"> -->
                <form action="register_a.php" method="post" enctype="multipart/form-data" class="login100-form validate-form">
                    <span class="login100-form-title p-b-34">
                        Daftar Akun
                    </span>

                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20">
                        <!-- <input id="first-name" class="input100" type="text" name="username" placeholder="User name"> -->
                        <input type="text" name="first_name" class="form-control" placeholder="Masukkan Nama Depan" required="required">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20">
                        <!-- <input id="first-name" class="input100" type="text" name="username" placeholder="User name"> -->
                        <input type="text" name="last_name" class="form-control" placeholder="Masukkan Nama Belakang" required="required">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20">
                        <!-- <input id="first-name" class="input100" type="text" name="username" placeholder="User name"> -->
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20">
                        <!-- <input class="input100" type="password" name="pass" placeholder="Password"> -->
                        <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20">
                        <!-- <input class="input100" type="password" name="pass" placeholder="Password"> -->
                        <input type="password" class="form-control" name="cpass" placeholder="Konfirmasi Password" required="required">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="form-group">
                        <input type="file" name="file" required>
                        <!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
                    </div>

                    <div class="form-group">
                        <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
                        <!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Daftar
                        </button>
                    </div>

                    <div class="w-full text-center p-t-27 p-b-239">
                        <span class="txt1">
                            Sudah punya akun? Silahkan
                        </span>

                        <a href="login.php" class="txt2">
                            Masuk
                        </a>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>