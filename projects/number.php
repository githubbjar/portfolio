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


                    <?php
                    //Project Navigation
                    include '../projectnav.php';
                    ?>
                    
                    <div class="row design-items">
                        <div class="col-md-5">
                            <img src="<?php echo $getImageRootFolder.$getCover1; ?>" class="cover" />
                                <div class="description-box text-center">
                                    <p class="project-type"><?php echo $getProjectType; ?></p>
                                    <p class="description"><?php echo $getDescription; ?></p>
                                    <p class="my-role">Art Director</p>
                                </div>
                                <img src="<?php echo $getImageRootFolder.$getCover2; ?>" class="ad" />
                            </div>
                        <div class="col-md-7">

                            <?php 

                                displayExample($getExample1PageCount,$getExample1,$getImageRootFolder);
                                displayExample($getExample2PageCount,$getExample2,$getImageRootFolder);
                                displayExample($getExample3PageCount,$getExample3,$getImageRootFolder);
                                displayExample($getExample4PageCount,$getExample4,$getImageRootFolder);
                            
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