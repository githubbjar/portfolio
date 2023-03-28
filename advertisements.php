<?php header("Location: https://www.jerryjanquart.com/portfolio/misc.php?category=printads"); ?>

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
    <title>Jerry Janquart Design Portfolio &#8212; Advertisements</title>
    
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
                                <?php //homepageGreeting($org); ?>
                                <!--Page Greeting-->
                                <h1>Advertisements</h1>
                                <h2>A selection of magazine ads and posters that I made for Publishing Management Associates, Biretta Books, and The Fellowship of St. James.</h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row content-container">
                        <p class="symbol">	&#9660; </p>
                        <p class="section-heading">
                            Ads &amp; Posters
                        </p>

                        <div class="row thumbnails-bg">
                                <div class="col">
                                <a href="https://www.jerryjanquart.com/portfolio/projects/images/misc/B-Broken.jpg" target="_blank" ><img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/B-Broken.jpg" class="basic" /> </a>
                                </div>
                                <div class="col">
                                <a href="https://www.jerryjanquart.com/portfolio/projects/images/misc/B-Inside-the-Light.jpg" target="_blank" ><img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/B-Inside-the-Light.jpg" class="basic" /></a>
                                </div>
                        </div>
                        
                        <div class="row thumbnails-bg">
                                <div class="col">
                                    <a href="https://www.jerryjanquart.com/portfolio/projects/images/misc/FT-Josh-Mitchell.jpg" target="_blank" ><img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/FT-Josh-Mitchell.jpg" class="basic" /></a>
                                </div>
                                <div class="col">
                                <a href="https://www.jerryjanquart.com/portfolio/projects/images/misc/FT-On-Freedom.jpg" target="_blank" ><img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/FT-On-Freedom.jpg" class="basic" /></a>
                                </div>
                        </div>
                        
                        <div class="row thumbnails-bg">    
                            <div class="col">
                            <a href="https://www.jerryjanquart.com/portfolio/projects/images/ts334/share-ts.jpg" target="_blank" ><img src="https://www.jerryjanquart.com/portfolio/projects/images/ts334/share-ts.jpg" class="basic" /></a>
                                    </div>                            
                                    
                                    <div class="col">
                                    <a href="https://www.jerryjanquart.com/portfolio/projects/images/misc/PMA-People-of-the-Land.jpg" target="_blank" ><img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/PMA-People-of-the-Land.jpg" class="basic" /></a>
                                    </div>
                        </div>
                        
                        <div class="row thumbnails-bg">        
                                <div class="col">
                                <a href="https://www.jerryjanquart.com/portfolio/projects/images/sv49/mag-ad.jpg" target="_blank" ><img src="https://www.jerryjanquart.com/portfolio/projects/images/sv49/mag-ad.jpg" class="basic" /> </a>
                                </div>
                                <div class="col">    
                                <a href="https://www.jerryjanquart.com/portfolio/projects/images/ts354/conf-ad.jpg" target="_blank" ><img src="https://www.jerryjanquart.com/portfolio/projects/images/ts354/conf-ad.jpg" class="basic" /> </a>
                                </div>
                        </div>

                        <div class="row thumbnails-bg">        
                                <div class="col">
                                <a href="https://www.jerryjanquart.com/portfolio/projects/images/ts346/cal-ad.jpg" target="_blank" ><img src="https://www.jerryjanquart.com/portfolio/projects/images/ts346/cal-ad.jpg" class="basic" /> </a>
                                </div>
                                <div class="col">
                                <a href="https://www.jerryjanquart.com/portfolio/projects/images/misc/FT-Store.jpg" target="_blank" ><img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/FT-Store.jpg" class="basic" /></a>
                                </div>
                        </div>        
                        
                    </div>

                     <div class="row content-container">
                        <div class="col">
                        <p class="symbol">	&#9660; <a name="online"></a></p>
                        <p class="section-heading">Online</div>
                    </div>

                    <div class="row computer"  id="online-item">
                        <div class="col disappear">
                        
                            <p class="online-item"><span onclick="bgImageSwapForm()">Dontation Form</span></p>
                            
                            <p class="online-item"><span onclick="bgImageSwapCart()">Shopping Cart</span></p>
                            
                            <p class="online-item"><span onclick="bgImageSwapLogin()">API Login</span></p>
                            
                            <p class="online-item"><span onclick="bgImageSwapVideo()">Video</a></p>

                            <p class="online-item"><span onclick="bgImageSwapEblast()">eblast</a></p>
                        
                        </div>
                        <div class="col"></div>
                        <div class="col disappear">
                        
                            <p class="online-item"><span onclick="bgImageSwapBackend()">php/mysql Backend</span></p>

                            <p class="online-item"><span onclick="bgImageSwapEpub()">.epub / .mobi</span></p>
                            
                            <p class="online-item"><span onclick="bgImageSwapSocial()">Social Media</span></p>
                            
                            <p class="online-item"><span onclick="bgImageSwapCms()">October CMS; Wordpress</a></p>

                            <p class="online-item"><span onclick="bgImageSwapJavascript()">Javascript</a></p>
                        
                        </div>        
                    </div>

                    <div class="row content-container">
                        <div class="col">
                        <p class="symbol">	&#9660; <a name="online"></a></p>
                        <p class="section-heading">Contact</div>
                    </div>

                    <div class="row contact">
                        <div class="col-md-1"></div>
                        <div class="col-md-4 resume-box">
                            <a href="https://www.jerryjanquart.com/portfolio/Janquart_Resume.pdf" target="_blank"><img src="https://www.jerryjanquart.com/portfolio/projects/images/resume-graphic.jpg" class="resume" /></a>
                        </div>
                        <div class="col-md-7 disappear">
                            <p class="closing_text">View My Resume. Let's Talk!</p>
                        </div>
                    </div>
                    
            

        
        </div>

        <?php include 'footer.php'; ?>

        
        </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="functions.js"></script> 
  </body>
</html>