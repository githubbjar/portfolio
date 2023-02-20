<!--The Projects-->
<?php 

    //get data
    include 'data.php';

    //get functions 
    include 'functions.php'; 

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jerry Janquart Design Portfolio</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="portfolio.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Lora&family=Neucha&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding:wght@400;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@700&family=Nanum+Gothic+Coding:wght@400;700&display=swap" rel="stylesheet"> 
    
    <link rel="preload" href="form.jpg" as="image">
    <link rel="preload" href="cart.jpg" as="image">
    <link rel="preload" href="login.jpg" as="image">
    <link rel="preload" href="video.jpg" as="image">
    <link rel="preload" href="backend.jpg" as="image">
    <link rel="preload" href="epub.jpg" as="image">
    <link rel="preload" href="social.jpg" as="image">
    <link rel="preload" href="cms.jpg" as="image">
    <link rel="preload" href="javascript.jpg" as="image">
    <link rel="preload" href="eblast.jpg" as="image">

    <style> 
        
        
        #online-item {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            height:500px;
            text-align: center;
            background-image: url(computer.jpg);
        }


    </style>

    <script>

        


        function bgImageSwapForm() {
            document.getElementById("online-item").style.backgroundImage = "url(form.jpg)";
        }; 
        function bgImageSwapCart() {
            document.getElementById("online-item").style.backgroundImage = "url(cart.jpg)";
        }; 
        function bgImageSwapLogin() {
            document.getElementById("online-item").style.backgroundImage = "url(login.jpg)";
        }; 
        function bgImageSwapVideo() {
            document.getElementById("online-item").style.backgroundImage = "url(video.jpg)";
        };
        function bgImageSwapBackend() {
            document.getElementById("online-item").style.backgroundImage = "url(backend.jpg)";
        }; 
        function bgImageSwapEpub() {
            document.getElementById("online-item").style.backgroundImage = "url(epub.jpg)";
        };
        function bgImageSwapSocial() {
            document.getElementById("online-item").style.backgroundImage = "url(social.jpg)";
        }; 
        function bgImageSwapCms() {
            document.getElementById("online-item").style.backgroundImage = "url(cms.jpg)";
        };
        function bgImageSwapJavascript() {
            document.getElementById("online-item").style.backgroundImage = "url(javascript.jpg)";
        }; 
        function bgImageSwapEblast() {
            document.getElementById("online-item").style.backgroundImage = "url(eblast.jpg)";
        }; 
    </script>
    
</head>

<body>

        <!--Navigation-->
        <?php include 'nav.php'; ?>
        




        <div class="container-fluid">
        
                    <div class="row grid-bg">
                        <div class="row">
                            <div class="col descriptive-box">
                                <?php if (!$org) {
                                    echo'
                                    <h1>Art Director & Web Developer </p>
                                    <h2>who has been partnering with magazine and book publishers for 17 years. In that time I have single-handedly brought over 150 issues through the full design and production process from manuscript to layout to print to web.</h2>';
                                } elseif ($org == "salvo") {
                                    echo '  <h1><em>Salvo</em> magazine</h1>
                                            <h2>A quarterly, 64 page color magazine aimed at young adults. I have designed every issue since the beginning&#8212;the summer of 2007. This includes website updates, eblast announcements, direct mail brochures, fundraising letters, and advertisements.</h2>';
                                } elseif ($org == "touchstone") {
                                        echo '  <h1><em>Touchstone</em> magazine</h1>
                                                <h2>A bi-monthly, 56 page two-color magazine aimed at readers with an intellectual bent. I have designed every issue since December of 2004. This includes fully re-designing and coding the website, eblast announcements, direct mail brochures, fundraising letters, and advertisements.</h2>';
                                } elseif ($org == "biretta") {
                                        echo '  <h1>Biretta Books</h1>
                                                <h2>A Chicago-based Catholic book publisher who has brought me on for some lengthy book and special projects.';
                                };
                                
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row content-container">
                        <p class="symbol">	&#9660; </p>
                        <p class="section-heading">
                        <?php if (!$org) {
                                    echo'In Print';
                                } else {
                                    echo 'Print Projects';
                                };
                                ?>
                        </p>
                        <div class="row thumbnails-bg">
                            <?php

                            if (!$org) {
                                //this uses array
                                thumbnailHomepage($allProjects[1]); 
                                thumbnailHomepage($allProjects[12]);  
                                thumbnailHomepage($allProjects[19]);
                            } else {
                                //this uses array 
                                outputThumbnails($allProjects,$org);
                            };


                            ?>

                        
                        </div>
                    </div>
                     <div class="row content-container">
                                        <div class="col">
                                        <p class="symbol">	&#9660; <a name="online"></a></p>
                                        <p class="section-heading">Online</div>
                                    </div>

                                    

                                    <div class="row computer"  id="online-item">
                                        <div class="col">
                                        
                                            <p class="online-item"><span onclick="bgImageSwapForm()">Dontation Forms</span></p>
                                            
                                            <p class="online-item"><span onclick="bgImageSwapCart()">Shopping Cart</span></p>
                                            
                                            <p class="online-item"><span onclick="bgImageSwapLogin()">Custom Login</span></p>
                                            
                                            <p class="online-item"><span onclick="bgImageSwapVideo()">Video</a></p>

                                            <p class="online-item"><span onclick="bgImageSwapEblast()">eblasts</a></p>
                                        
                                        </div>
                                        <div class="col"></div>
                                        <div class="col">
                                        
                                            <p class="online-item"><span onclick="bgImageSwapBackend()">Custom Backend</span></p>

                                            <p class="online-item"><span onclick="bgImageSwapEpub()">ePubs</span></p>
                                            
                                            <p class="online-item"><span onclick="bgImageSwapSocial()">Social Media</span></p>
                                            
                                            <p class="online-item"><span onclick="bgImageSwapCms()">October CMS, Wordpress</a></p>

                                            <p class="online-item"><span onclick="bgImageSwapJavascript()">Javascript</a></p>
                                        
                                        </div>        
                                    </div>
                            
               
        
        </div>

        <?php include 'footer.php'; ?>

        
        </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>