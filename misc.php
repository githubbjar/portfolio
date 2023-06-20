<!--The Projects-->
<?php 

    //get data
    include 'data.php';

    //get functions 
    include 'functions.php'; 

    function geth1($var) {
        if ($var == 'blasts') {echo 'Email Marketing';};
        if ($var == 'printads') {echo 'Print Advertisements';};
        if ($var == 'webads') {echo 'Online Advertisements';};
    }
    function geth2($var) {
        if ($var == 'blasts') {echo 'A selection of email marketing pieces that went out for Publishing Management Associates, <em>Touchstone</em>, <em>Salvo</em>, and Douglas Shaw & Associates.';};
        if ($var == 'printads') {echo 'A selection of print ads and posters that I created for Publishing Management Associates, Biretta Books, and The Fellowship of St. James publications.';};
        if ($var == 'webads') {echo 'A selection of web ads and gifs that I created for Publishing Management Associates and Douglas Shaw &amp; Associates.';};
    }

    function getTitle($var) {
        if ($var == 'blasts') {echo 'Email Marketing';};
        if ($var == 'printads') {echo 'Print Advertisements';};
        if ($var == 'webads') {echo 'Online Advertisements';};
    }

    function getArrowHeading($var) {
        if ($var == 'blasts') {echo 'eBlasts';};
        if ($var == 'printads') {echo 'Ads &amp; Posters';};
        if ($var == 'webads') {echo 'Web Ads &amp; Graphics';};
    }



    //for creating the objects
    //imgsrc, url, target, caption
    class MiscItem {

        // the properties
        public $category; 
        public $imgsrc;
        public $url;
        public $caption;
        public $layout2;
        
        // the constructor
        function __construct($category, $imgsrc, $url, $caption, $layout2) {
        $this->category = $category;
        $this->imgsrc = $imgsrc;
        $this->url = $url;
        $this->caption = $caption;
        $this->layout2 = $layout2;
        }

        // the methods
        function get_category() {
        return $this->category;
        }
        function get_imgsrc() {
        return $this->imgsrc;
        }
        function get_url() {
        return $this->url;
        }
        function get_caption() {
            return $this->caption;
        }
        function get_layout2() {
            return $this->layout2;
        }
    }

  
    //initialize the array
    $allMiscItems = array();
    
    //the misc items
    $allMiscItems[] = new MiscItem('blasts','https://www.jerryjanquart.com/portfolio/projects/images/misc/TS-blast.jpg', 'https://myemail.constantcontact.com/Touchstone--The-Online-Reader---On-the-Meaning-of-Christ-s-Prayer---His-Obedience-in-the-Garden.html?soid=1133865901875&aid=7X502Ma8LMU', '<em>Touchstone</em>', false);

    $allMiscItems[] = new MiscItem('blasts', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/Cal-blast.jpg', 'https://myemail.constantcontact.com/Order-the-St--James-calendar-for-the-new-year-.html?soid=1133865901875&aid=W_kzyTja5I4', 'St. James Calendar', false);

    $allMiscItems[] = new MiscItem('blasts', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/SV-blast.jpg', 'https://myemail.constantcontact.com/The-SALVO-Spring-2023-Issue-Is-Now-Online-.html?soid=1133865901875&aid=NE9VZ1iZXIQ', '<em>Salvo</em>', false);

    $allMiscItems[] = new MiscItem('blasts', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/TN-blast.jpg', 'https://myemail.constantcontact.com/Touchstone-Is-Back-in-Tennessee--FREE.html?soid=1133865901875&aid=U4IfxZpBoY0', '<em>Touchstone</em>', false);
    
    $allMiscItems[] = new MiscItem('blasts', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/Moody-blast-thumbnail.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/Moody-blast.jpg', 'Douglas Shaw &amp; Assoc.', true);

    $allMiscItems[] = new MiscItem('blasts', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/cfd-blast-thumbnail.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/cfd-blast.jpg', 'Douglas Shaw &amp; Assoc.', true);

    $allMiscItems[] = new MiscItem('blasts', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/scott-mission-thumbnail.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/scott-mission.jpg', 'Douglas Shaw &amp; Assoc.', true);

    $allMiscItems[] = new MiscItem('blasts', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/cfd-blast2-thumbnail.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/cfd-blast2.jpg', 'Douglas Shaw &amp; Assoc.', true);

    $allMiscItems[] = new MiscItem('blasts', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/TS-Blast2-Thumbnail.jpg', 'https://myemail.constantcontact.com/The-March-April-2023-Issue-of-Touchstone.html?soid=1133865901875&aid=R06bbgjs-9Q', '<em>Touchstone</em>', false);

    $allMiscItems[] = new MiscItem('blasts', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/CCII-Blast-Thumbnail.jpg', 'https://myemail.constantcontact.com/Creed---Culture-II-----Now-Availalble-.html?soid=1133865901875&aid=B4qpYQGJSLs', '<em>Creed &amp; Culture II</em>', false);

    $allMiscItems[] = new MiscItem('printads', "https://www.jerryjanquart.com/portfolio/projects/images/misc/B-Broken.jpg", "https://www.jerryjanquart.com/portfolio/projects/images/misc/B-Broken.jpg", "Biretta Books", false);

    $allMiscItems[] = new MiscItem('printads', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/B-Inside-the-Light.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/B-Inside-the-Light.jpg', "Biretta Books", false);

    $allMiscItems[] = new MiscItem('printads', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/PMA-People-of-the-Land.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/PMA-People-of-the-Land.jpg', 'PMA', false);

    $allMiscItems[] = new MiscItem('printads', 'https://www.jerryjanquart.com/portfolio/projects/images/sv49/mag-ad.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/sv49/mag-ad.jpg', '<em>Salvo</em>',false);

    $allMiscItems[] = new MiscItem('printads', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/FT-Josh-Mitchell.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/FT-Josh-Mitchell.jpg', 'PMA', false);

    $allMiscItems[] = new MiscItem('printads', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/FT-On-Freedom.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/FT-On-Freedom.jpg', 'PMA', false);

    $allMiscItems[] = new MiscItem('printads', 'https://www.jerryjanquart.com/portfolio/projects/images/ts334/share-ts.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/ts334/share-ts.jpg', '<em>Touchstone</em>', false); 

    $allMiscItems[] = new MiscItem('printads', 'https://www.jerryjanquart.com/portfolio/projects/images/ts346/cal-ad.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/ts346/cal-ad.jpg', 'FSJ', false);

    $allMiscItems[] = new MiscItem('printads', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/fakead-xombie.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/fakead-xombie.jpg', '<em>Salvo</em> Fake Ad', false);

    $allMiscItems[] = new MiscItem('printads', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/ft-spring-fundraiser.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/ft-spring-fundraiser.jpg', 'PMA', false);

    $allMiscItems[] = new MiscItem('printads', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/fakead-datebot.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/fakead-datebot.jpg', '<em>Salvo</em> Fake Ad', false);

    $allMiscItems[] = new MiscItem('printads', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/fakead-vrpr.jpg', 'https://www.jerryjanquart.com/portfolio/projects/images/misc/fakead-vrpr.jpg', '<em>Salvo</em> Fake Ad', false);


    


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jerry Janquart Design Portfolio &#8212; <?php getTitle($category); ?></title>
    
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
                   
                        <?php
                        //Project Navigation
                        include 'miscnav.php';
                        ?>
                        <div class="row">
                            <div class="col descriptive-box-misc">
                                <?php //homepageGreeting($org); ?>
                                <!--Page Greeting-->
                                <h1><?php geth1($category); ?></h1>
                                <h2><?php geth2($category); ?></h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row content-container">
                        <p class="symbol">	&#9660; </p>
                        <p class="section-heading">
                            <?php getArrowHeading($category); ?> 
                        </p>

                        <div class="row thumbnails-bg">
                                <!--Each object needs 
                                imgsrc, url, target, caption
                                -->

                                <?php 

                                    //IF BLASTS NORMAL LAYOUT
                                    for ($i = 0; $i <= sizeof($allMiscItems)-1; $i++) {
                                        if ($allMiscItems[$i]->get_category() == 'blasts' && $category == 'blasts' && $allMiscItems[$i]->get_layout2() == false) {
                                        echo    '<div class="col-sm-6">
                                                    <a href="'. $allMiscItems[$i]->get_url() .'" target="_blank" >
                                                        <img src="'. $allMiscItems[$i]->get_imgsrc() .'" class="coverhomepage basic img-thumbnail" />
                                                    </a>
                                                    <p class="misc_description">'. $allMiscItems[$i]->get_caption() .'</p>
                                                </div>';
                                        } elseif ($allMiscItems[$i]->get_category() == 'blasts' && $category == 'blasts' && $allMiscItems[$i]->get_layout2() == true) { //IF BLASTS SECONDARY LAYOUT
                                                echo '<!-- Button trigger modal -->
                                                <div class="col-sm-6">
                                                <img src="'. $allMiscItems[$i]->get_imgsrc() .'" class="basic coverhomepage img-thumbnail" data-bs-toggle="modal" data-bs-target="#'. $allMiscItems[$i]->get_imgsrc() .'"/>
                                                <p class="misc_description">'. $allMiscItems[$i]->get_caption() .'</p>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal modal-lg fade" id="'. $allMiscItems[$i]->get_imgsrc() .'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                       <img src="'. $allMiscItems[$i]->get_url() .'" width="100%" data-bs-dismiss="modal" />
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Understood</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>';
                                        }; 
                                        
                                        if ($allMiscItems[$i]->get_category() == 'printads' && $category == 'printads') {
                                            
                                            //IF PRINTADS
                                            echo    '
                                            
                                            <!-- Button trigger modal -->
                                                <div class="col-sm-6">
                                                <img src="'. $allMiscItems[$i]->get_imgsrc() .'" class="basic coverhomepage img-thumbnail" data-bs-toggle="modal" data-bs-target="#'. $allMiscItems[$i]->get_imgsrc() .'"/>
                                                <p class="misc_description">'. $allMiscItems[$i]->get_caption() .'</p>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal modal-lg fade" id="'. $allMiscItems[$i]->get_imgsrc() .'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                       <img src="'. $allMiscItems[$i]->get_url() .'" width="100%" data-bs-dismiss="modal" />
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Understood</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>';
                                            } 
                                            };
                                //IF WEB ADS
                                            if ($category == 'webads') {
                                                echo '
                                                
                                                <div class="row">

                                                <img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/web-wycliffe.gif" width="100%" class="basic img-thumbnail">
                                                    <p class="misc_description">Douglas Shaw &amp; Associates</p>

                                                </div>


                                                <div class="row">

                                                <img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/web-cambridge-banner.jpg" width="100%" class="basic img-thumbnail">
                                                    <p class="misc_description">PMA</p>

                                                </div>

                                                <div class="row">

                                                <img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/web-moody-banner.jpg" width="100%" class="basic img-thumbnail">
                                                    <p class="misc_description">Douglas Shaw &amp; Assoc.</p>

                                                </div>

                                                <div class="row">

                                                <img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/web-wycliffe.jpg" width="100%" class="basic img-thumbnail">
                                                    <p class="misc_description">Douglas Shaw &amp; Assoc.</p>

                                                </div>

                                                <div class="row">

                                                <img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/webCCII.jpg" width="100%" class="basic img-thumbnail">
                                                    <p class="misc_description"><em>Touchstone</em></p>

                                                </div>

                                                <div class="row">

                                                <img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/web-providence-banner.jpg" width="100%" class="basic img-thumbnail">
                                                    <p class="misc_description">PMA</p><p><br /></p>

                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3"><img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/web-ligouri.jpg" width="100%" class="basic img-thumbnail">
                                                    <p class="misc_description">PMA</p></div>
                                                    <div class="col-sm-3"><img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/web-bradley-tall.jpg" width="100%" class="basic img-thumbnail">
                                                    <p class="misc_description">PMA</p></div>
                                                    <div class="col-sm-3"><img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/web-reno.png" width="100%" class="basic img-thumbnail">
                                                    <p class="misc_description">PMA</p></div>
                                                    <div class="col-sm-3"><img src="https://www.jerryjanquart.com/portfolio/projects/images/misc/web-ft-shop-tall.jpg" width="100%" class="basic img-thumbnail">
                                                    <p class="misc_description">PMA</p></div>
                                                    
                                                </div>
                                                
                                                ';
                                            }
                                
                                   
                                
                                        
                                ?>
                                
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