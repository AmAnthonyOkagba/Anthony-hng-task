<?php
    if(isset($_POST['submit']))
    {
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $to = "anthonyokagba35@gmail.com";
        $subject = "Anthony's HNG Task";
        $message = " \r\n
        Contact Details: \r\n
        <br>Name: ".$name."\r\n
        <br>Email: ".$email."\r\n
        <br>Message: ".$message." \r\n
        <br>Brought By: Anthony's HNG Task \r\n";
        $header = "From: $email" . PHP_EOL;
        $header .= "Reply-To: $email" . PHP_EOL;
        $header .= "MIME-Version: 1.0" . PHP_EOL;
        $header .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
        $header .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
    
        // echo $to,$subject,$message,$header;

        if(mail($to,$subject,$message,$header)){
        
            echo "
            <script>
                  alert('Message Sent');
                  window.location='index.php';
             </script>";
        }
        else 
        {
            echo "
            <script>
                  alert('Message Not Sent');
                  window.location='index.php#contact';
             </script>
             ";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Anthony Okagba | Backend Developer</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta data-react-helmet="true" name="description" content="Anthony Okagba is a Backend Developer based in Abuja, Nigeria. A Full Stack Developer, but main a backend developer(PHP/Laravel) Specialized in designing websites, applications and everything in between.">
        <meta data-react-helmet="true" name="keywords" content="Anthony Okagba, Somtochukwu, Anthony, Okagba, AmAnthonyOkagba, Software Developer, Front-end Developer, Back-end developer, Web Developer, Backend Developer, PHP Developer">
        <meta data-react-helmet="true" property="og:title" content="Anthony Okagba | Backend Developer">
        <meta data-react-helmet="true" property="og:description" content="Anthony Okagba is a Backend Developer based in Abuja, Nigeria. A Full Stack Developer, but main a backend developer(PHP/Laravel) Specialized in designing websites, applications and everything in between.">
        <meta data-react-helmet="true" property="og:type" content="website">
        <meta data-react-helmet="true" property="og:url" content="">
        <meta data-react-helmet="true" property="og:site_name" content="Anthony Okagba | Backend Developer">
        <meta data-react-helmet="true" property="og:image" content="img/logo.png">
        <meta name="author" content="Anthony Okagba">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-green navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index"><img class= "logo" src="img/logo.png" alt="" style="width: 60px;" ></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://docs.google.com/document/d/1IQOy1603CCzxy_QvkhXjnc-8HQiK1Ow3fdOMvhlv4oY/edit#" class="resume_me">Resume</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="home" class="intr" style="margin-top:0px">
            <div class="container">
                <h1 class="intrd">Hi, my name is</h1>
                <h2 class="intrd-name">Anthony Okagba.</h2>
                <h3 class="intrd-web">I'm a Backend Developer</h3>
            
                <div class="pt-5" style="transition-delay: 500ms;">
                    <a href="mailto:anthonyokagba35@gmail.com" class="bohz"> Get In Touch</a>
                    <a href="https://docs.google.com/document/d/1IQOy1603CCzxy_QvkhXjnc-8HQiK1Ow3fdOMvhlv4oY/edit#" class="bohz"> Resume</a>
                </div>
            </div>
        </section>

        <section id="contact" class="conA">
            <div class="container ">
                <div class="text-center">
                    <h1 class="intrd">What's Next?</h1>
                    <h2 class="cont">Get In Touch</h2>
                </div>

                <div class="container text-center col-md-6">
                    <?php
                        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                        {
                            echo '<div class="alert alert-info">'.$_SESSION['success'].' <a class="close" data-dismiss="alert">×</a> </div>';
                            unset($_SESSION['success']);
                        }
                        
                        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                        {
                            echo '<div class="alert alert-danger">'.$_SESSION['status'].' <a class="close" data-dismiss="alert">×</a> </div>';
                            unset($_SESSION['status']);
                        }
                    ?>
                    <div class="row border">
                        <form action="" method="POST">
                            <div class="col-md-12">
                                <label class="form-label left">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label left">Email</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" name="message" cols="10" rows="3" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="bohz" name="submit" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    






        <footer class="endfooter" style="margin-top: 130px;">
            <div class=" copyright  col-sm-12">
                <div class="social-linksk">
                    <a href="https://github.com/AmAnthonyOkagba" title="Github" target="_blank"><i class="fab fa-github"> </i></a>
                    <a href="https://twitter.com/AmAnthonyOkagba" title="Twitter" target="_blank"><i class="fab fa-twitter"> </i></a>
                    <a href="https://linkedin.com/in/AmAnthonyOkagba" title="Linkedin" target="_blank"><i class="fab fa-linkedin"> </i></a>
                    <a href="https://instagram.com/AmAnthonyOkagba" title="Instagram" target="_blank"><i class="fab fa-instagram"> </i></a>
                </div>
                <h5 class="intrd">&copy; 2021 Designed & Built by Anthony Okagba.</h5>
            </div>
        </footer>

        <style>
            #myBtn {
                width: 40px;
                height: 40px;
                text-indent: -9999px;
                opacity: 0.3;
                position: fixed;
                bottom: 20px;
                right: 40px;
                display: none;
                background-image: url(img/icon_top.png);
            }
            
            #myBtn:hover {
                /* background-color: #555; */
                opacity: 0.8;
            }
        </style>    
        
        <!-- <a href="#" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></a> -->
        <a href="#" class="scrollup" onclick="topFunction()" id="myBtn" title="Go to top"></a>
    </body>

    <script>
        // Get the button
        var mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
            } else {
            mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
        
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>