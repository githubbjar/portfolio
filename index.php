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
    
    <!--Preload computer images-->
    <link rel="preload" href="computer_images/form.jpg" as="image">
    <link rel="preload" href="computer_images/cart.jpg" as="image">
    <link rel="preload" href="computer_images/login.jpg" as="image">
    <link rel="preload" href="computer_images/video.jpg" as="image">
    <link rel="preload" href="computer_images/backend.jpg" as="image">
    <link rel="preload" href="computer_images/epub.jpg" as="image">
    <link rel="preload" href="computer_images/social.jpg" as="image">
    <link rel="preload" href="computer_images/cms.jpg" as="image">
    <link rel="preload" href="computer_images/javascript.jpg" as="image">
    <link rel="preload" href="computer_images/eblast.jpg" as="image">

    
</head>

<body>

        <!--Navigation-->
        <?php include 'nav.php'; ?>
        
        <div class="container-fluid">
        
                    <div class="row grid-bg">
                        <div class="row">
                            <div class="col descriptive-box">
                                <?php homepageGreeting($org); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row content-container">
                        <p class="symbol">	&#9660; </p>
                        <p class="section-heading">
                            <?php mainSectionHeading($org); ?>
                        </p>
                        <div class="row thumbnails-bg">
                            <?php fetchHomepageThumbnails($org,$allProjects); ?>
                        </div>
                    </div>

                     <div class="row content-container">
                        <div class="col">
                        <p class="symbol">	&#9660; <a name="online"></a></p>
                        <p class="section-heading">Online</div>
                    </div>

                    <div class="row computer"  id="online-item">
                        <div class="col">
                        
                            <p class="online-item"><span onclick="bgImageSwapForm()">Dontation Form</span></p>
                            
                            <p class="online-item"><span onclick="bgImageSwapCart()">Shopping Cart</span></p>
                            
                            <p class="online-item"><span onclick="bgImageSwapLogin()">API Login</span></p>
                            
                            <p class="online-item"><span onclick="bgImageSwapVideo()">Video</a></p>

                            <p class="online-item"><span onclick="bgImageSwapEblast()">eblast</a></p>
                        
                        </div>
                        <div class="col"></div>
                        <div class="col">
                        
                            <p class="online-item"><span onclick="bgImageSwapBackend()">php/mysql Backend</span></p>

                            <p class="online-item"><span onclick="bgImageSwapEpub()">.epub / .mobi</span></p>
                            
                            <p class="online-item"><span onclick="bgImageSwapSocial()">Social Media</span></p>
                            
                            <p class="online-item"><span onclick="bgImageSwapCms()">October CMS; Wordpress</a></p>

                            <p class="online-item"><span onclick="bgImageSwapJavascript()">Javascript</a></p>
                        
                        </div>        
                    </div>
<!--
                    <div class="row content-container">
                        <div class="col">
                        <p class="symbol">	&#9660; <a name="online"></a></p>
                        <p class="section-heading">Contact</div>
                    </div>

                    <div class="row contact">
                        <div class="col">
                            <img src="https://www.jerryjanquart.com/portfolio/projects/images/resume-graphic.jpg" width="100%" />
                        </div>
                        <div class="col">
                        </div>
                        <div class="col">
                        </div>
                    </div>
-->                    
            

        
        </div>

        <?php include 'footer.php'; ?>

        
        </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="functions.js"></script> 
  </body>
</html>