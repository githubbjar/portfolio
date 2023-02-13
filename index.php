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



    
</head>

<body>

        <!--Navigation-->
        <?php include 'nav.php'; ?>
        




        <div class="container-fluid">
        
            <div class="row grid-bg">
                <div class="col-md-1 d-sm-none d-md-block d-none d-sm-block"> </div>
                <div class="col-md-10 translucent-gray-bg"> 
                
                    <div class="row design-items">

                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 descriptive-box">
                                <hr />
                                <?php if (!$org) {
                                    echo'<p><span class="dropcap">I</span>\'m an art director and web developer who has been partnering with various magazine and book publishers for 17 years. In that time I have single-handedly brought over 150 issues through the full design and production process from manuscript to layout to print to web. I also maintain the websites&#8212;one of which I designed and coded myself. Other experience includes:</p>
                                <div class="row">
                                    <div class="col">
                                        <ul>
                                        <li>Fundraising</li>
                                        <li>Direct Mail</li>
                                        <li>Online Forms</li>
                                        <li>Javascript</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                        <li>Web Graphics</li>
                                        <li>Event Management</li>
                                        <li>Client Services</li>
                                        <li>Advertising</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                        <li>ePub &amp; Kindle</li>
                                        <li>Brochure Design</li>
                                        <li>Landing Pages</li>
                                        <li>php/mysql</li>
                                        </ul>
                                    </div>
                                </div>
                                <hr /><center><p><em>Below you\'ll see the titles I\'ve worked on the most. Click through to see some samples of my work from each organization.</em></p></center>';
                                } else {
                                    echo '<img src="https://www.jerryjanquart.com/portfolio/projects/images/'.$org.'-logo.jpg" class="homepage-logo" />';
                                } 

                                ?>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                       
                        <?php

                        if (!$org) {
                            //this doesnt use array need to update
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
                <div class="col-md-1 d-sm-none d-md-block d-none d-sm-block"> </div>
            </div>  
        
        </div>

        <?php include 'footer.php'; ?>

        
        </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>