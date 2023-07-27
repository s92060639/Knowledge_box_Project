<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Box</title>
    <!-- connect css -->
    <link rel="stylesheet" href="css/style.css">
</head> 
<body>
    <nav class="navbar">
        <h1 class="logo">Knowledge Box</h1>
        <ul class="nav-link">
        <a href="index.php"><li class="">Home</li></a>
            <!-- <li><a href="#"></a>About us</li>
            <li><a href="#"></a>About us</li> -->
            <a href="login.php"><li class="ctn">Login</li></a>
            <a href="register.php"><li class="ctn">Register</li></a>
            <div class="horizontal"></div>
            <a href="register_qmaker.php"><li class="ctn">Register as Question maker</li></a>
            <a href="register_reader.php"><li class="ctn">Register as Proof Reader maker</li></a>
        </ul>
        <img src="img/menu_avatar.png" alt="" class="menu-btn">

    </nav>
    <header>
        <div class="header-content">
            <h2>Titile</h2>
            <div class="line"></div>
            <h1>A wonter titlr</h1>
        </div>
    </header>
    <!-- introduction -->
    <section>
        <div class="introduction">
            <div class="row">
                <div class="col content-col">
                    <h1 class="title">introduction about our system</h1>
                    <div class="line"></div>
                    <p>Digitizing education to complement the traditional education system is the perfect
                        solution to enhance literacy and education in the world. As the world becomes a
                        global village together interconnected with each nations, the corona pandemic has not
                        stopped at the national borders. It has so badly effect affected on international trading,
                        occupations, education, traveling and health as well as for the day to day normal
                        lifestyle.
                    </p>
                </div>
                <div class="col image-col">
                    <div class="image-gallery">
                        <img src="./img/imggalary1.webp" alt="imgGallery1">
                        <img src="./img/imggalary1.webp" alt="imgGallery1">
                        <img src="./img/imggalary1.webp" alt="imgGallery1">
                        <img src="./img/imggalary1.webp" alt="imgGallery1">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About us -->
    <section>
        <div class="About_Us">
            <div class="row">
                <div class="col image-col">
                    <div class="image-gallery">
                        <img src="./img/imggalary1.webp" alt="imgGallery1">
                    </div>
                </div>
                <div class="col content-col">
                    <h1 class="title">About us</h1>
                    <div class="line"></div>
                    <p>Adsasadsad adsad sad sa
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Roll Section -->
    <section class="rolls">
        <div class="title">
            <h1>Login & Register as rolls</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
            <a href="register_reader.php"><img src="./img/student_reg.png" alt=""></a>
                <h4>Register as Student</h4>
                <a href="register.php" class="ctn-rolls">Register</a>
            </div>

            <div class="col">
            <a href="register_reader.php"><img src="./img/student_login.png" alt=""></a>
                <h4>Login as Student</h4>
                <a href="login.php" class="ctn-rolls">Login</a>
            </div>

        </div>

        <div class="row">
            <div class="col">
            <a href="register_reader.php"><img src="./img/teacher_register.png" alt=""></a>
                <h4>Register as Question Maker</h4>
                <a href="register_qmaker.php" class="ctn-rolls">Register</a>
            </div>

            <div class="col">
            <a href="register_reader.php"><img src="./img/teacher_login.png" alt=""></a>
                <h4>Login as Question Maker</h4>
                <a href="./qmaker/index.php" class="ctn-rolls">Login</a>
            </div>

        </div>

        <div class="row">
            <div class="col">
            <a href="register_reader.php"> <img src="./img/reader_register.png" alt=""></a>
                <h4>Register as Proof Reader</h4>
                <a href="register_reader.php" class="ctn-rolls">Register</a>
            </div>

            <div class="col">
            <a href="register_reader.php"><img src="./img/reader_login.png" alt=""></a>
                <h4>Login as Proof Reader</h4>
                <a href="./reader/index.php" class="ctn-rolls">Login</a>
            </div>

        </div>
        
    </section>
   
    
    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlink = document.querySelector('.nav-link')

        menuBtn.addEventListener('click',()=>{
            navlink.classList.toggle('mobile-menu')
        })
    </script>
</body>
</html>
