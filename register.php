<?php
include "config.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Now</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
       <link rel="stylesheet" href="css1/bootstrap.min.css">
       <link rel="stylesheet" href="css1/font-awesome.min.css">
      <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
      <link rel="stylesheet" href="css1/animate.css">
      <link rel="stylesheet" href="css1/normalize.css">
      <link rel="stylesheet" href="css1/main.css">
      <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="css1/responsive.css">
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<nav class="navbar">
        <h1 class="logo">Knowledge Box</h1>
        <ul class="nav-link">
        <a href="index.php"><li class="">Home</li></a>
            <!-- <li><a href="#"></a>About us</li>
            <li><a href="#"></a>About us</li> -->
            <a href="login.php"><li class="ctn">Login</li></a>
            <div class="horizontal"></div>
            <a href="register_qmaker.php"><li class="ctn">Register as Question maker</li></a>
            <a href="register_reader.php"><li class="ctn">Register as Proof Reader maker</li></a>
        </ul>
        <img src="img/avatar-mini2.jpg" alt="" class="menu-btn">

    </nav>

	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Register Now</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="" name="form1" method="post">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>FirstName</label>
                                    <input type="text" name="firstname" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>LastName</label>
                                    <input type="text" name="lastname" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Contact</label>
                                    <input type="text" name="contact" class="form-control">
                                </div>
                              </div>
                            <div class="text-center">
                                <button type="submit" name="submit1" class="btn btn-success loginbtn">Register</button>
                            </div>

                            <div class="text-right">
                                <a href="login.php" >Already have a account?</a>
                            </div>

                            <div class="alert alert-success" id="success" style="margin-top: 10px; display: none;">
                               <strong>SUCCESS!!</strong> Account Register sucessfully
                            </div>

                            <div class="alert alert-danger" id="fail" style="margin-top: 10px; display: none;">
                                <strong>Username Already Exist!!</strong> This username is already exist
                            </div>

                            <div class="alert alert-danger" id="emailfail" style="margin-top: 10px; display: none;">
                                <strong>Email Already Exist!!</strong> This Email is already exist
                            </div>


                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>

    <?php
    if(isset($_POST['submit1']))
    {
        $count = 0;
        $res = mysqli_query($conn, "select * from registration where username='$_POST[username]'") or die(mysqli_error($conn));
        $res1 = mysqli_query($conn, "select * from registration where email='$_POST[email]'") or die(mysqli_error($conn));
        $count = mysqli_num_rows($res);
        $count1 = mysqli_num_rows($res1);

        if($count>0)
        {

            ?>

            <script type="text/javascript">
                document.getElementById("success").style.display="none";
                document.getElementById("fail").style.display="block";
                document.getElementById("emailfail").style.display="none";
            </script>

            <?php
        }elseif ($count1>0){

            ?>

            <script type="text/javascript">
                document.getElementById("emailfail").style.display="block";
                document.getElementById("success").style.display="none";
                document.getElementById("fail").style.display="none";
            </script>

            <?php

        }
        
        else{
            mysqli_query($conn, "insert into registration values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','0')")or die(mysqli_error($conn));
            ?>

            <script type="text/javascript">
                document.getElementById("success").style.display="block";
                document.getElementById("fail").style.display="none";
                document.getElementById("emailfail").style.display="none";
            </script>

            <?php
        }
    }
    ?>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlink = document.querySelector('.nav-link')

        menuBtn.addEventListener('click',()=>{
            navlink.classList.toggle('mobile-menu')
        })
    </script>


</body>

</html>