<!--The Projects-->
<?php include '../functions.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jerry Janquart Design Portfolio &#8212; <?php echo $description; ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../portfolio.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet"> 

    
</head>

<body>

        <?php 
        //Navigation
        include '../nav.php'; 
        ?>

        <div class="container-fluid">
        
            <div class="row grid-bg">
                <div class="col-md-1 d-sm-none d-md-block d-none d-sm-block"> </div>
                <div class="col-md-10 translucent-gray-bg"> 



                    
                    <!--BEGIN PROJECT NAV BUTTONS-->
                    <div class="row button-bar">
                        
                        <!--PREVIOUS BUTTON-->
                        <div class="col-sm-1 text-center">
                            <a class="btn btn-light btn-sm" href="https://www.jerryjanquart.com/portfolio/projects/?project=<?php 
                            
                                if ($project == 1) {
                                    echo '18';
                                } else {
                                    echo $backOne; 
                                };
                            
                            ?>"> &#x21e6; </a>
                        </div>

                        <!--BACK TO ORG BUTTON-->
                        <div class="col-sm-10 text-center">
                            <a class="btn btn-secondary btn-sm" href="https://www.jerryjanquart.com/portfolio/?org=<?php 
                            
                                if ($projecttype == "<em>Salvo</em> magazine") {
                                    echo 'salvo';
                                } elseif ($projecttype == "<em>Touchstone</em> magazine") {
                                    echo 'touchstone';
                                } elseif ($projecttype == "Biretta Books") {
                                    echo 'biretta';
                                }
                            
                            ?>"><?php echo $projecttype; 
                            ?>
                            </a>
                        </div>

                        <!--NEXT BUTTON-->
                        <div class="col-sm-1 text-center">
                            <a class="btn btn-light btn-sm" href="https://www.jerryjanquart.com/portfolio/projects/?project=<?php 
                            
                            if ($project == 18) {
                                echo '1';
                            } else {
                                echo $forwardOne; 
                            };
                                                        
                            ?>"> &#x21e8; </a>
                        </div>

                    </div>
                    <!--END PROJECT NAV BUTTONS-->





                    <div class="row design-items">
                        <div class="col-md-5">

                            <img src="<?php echo $imageRootFolder.$cover1; ?>" class="cover" />
                            <div class="description-box text-center">
                                <p class="project-type"><?php echo $projecttype; ?></p>
                                <p class="description"><?php echo $description; ?></p>
                                <p class="my-role">Art Director</p>
                            </div>
                            <img src="<?php echo $imageRootFolder.$cover2; ?>" class="ad" />
                        </div>
                        <div class="col-md-7">

                            

                            <?php 

                            if ($projecttype == "<em>Salvo</em> magazine") {
                                //the Salvo project layout
                                exampleModal_TwoSpreads($example1, $imageRootFolder); 
                                exampleModal_TwoSpreads($example2, $imageRootFolder); 
                                exampleModal_TwoSpreads($example3, $imageRootFolder);
                                exampleModal_OneSpread($example4, $imageRootFolder);
                            }; 
                            
                            if ($projecttype == "<em>Touchstone</em> magazine") {
                                //the Touchstone project layout
                                exampleModal_TwoSpreads($example1, $imageRootFolder); 
                                exampleModal_TwoSpreads($example2, $imageRootFolder); 
                                exampleModal_OneSpread($example3, $imageRootFolder);
                                exampleModal_OneSpread($example4, $imageRootFolder);
                            }
                            
                            if ($projecttype == "Biretta Books" && $project == 17 || $project == 18) {
                                //the Touchstone project layout
                                exampleModal_OneSpread($example1, $imageRootFolder); 
                                exampleModal_OneSpread($example2, $imageRootFolder); 
                                exampleModal_OneSpread($example3, $imageRootFolder);
                            } elseif ($projecttype == "Biretta Books") {
                                exampleModal_TwoSpreads($example1, $imageRootFolder); 
                                exampleModal_TwoSpreads($example2, $imageRootFolder); 
                                exampleModal_OneSpread($example3, $imageRootFolder);
                                exampleModal_OneSpread($example4, $imageRootFolder);
                            };
                            
                            ?>

                        </div>
                    </div>
                
                </div>
                <div class="col-md-1 d-sm-none d-md-block d-none d-sm-block"> </div>
            </div>  
        
        </div>



        <?php include '../footer.php'; ?>

        </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>