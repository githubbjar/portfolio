<?php

    // set URL variable
    $raw_url = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    
    // Use parse_url() function to parse the URL 
    $url_components = parse_url($raw_url);
    
    // Use parse_str() function to parse the string passed via URL
    parse_str($url_components['query'], $params);
    
    // set variables based on url
    if (!$params['project']) {
        $project = 1;
    } else {
        $project = $params['project'];
    };
    $spot = $params['project']-1;
    $org = $params['org'];
    $backOne = $project-1;
    $forwardOne = $project+1;


    



    //for creating the objects
    class FullProject {

        // the properties
        public $description;
        public $projecttype;
        public $imagerootfolder;
        public $cover1;
        public $cover2;
        public $example1;
        public $example1pagecount;
        public $example2;
        public $example2pagecount;
        public $example3;
        public $example3pagecount;
        public $example4;
        public $example4pagecount;
        public $projectnumber;
    
        // the constructor
        function __construct($description, $projecttype, $imagerootfolder, $cover1, $cover2, $example1, $example1pagecount, $example2, $example2pagecount, $example3, $example3pagecount, $example4, $example4pagecount) {
        $this->description = $description;
        $this->projecttype = $projecttype;
        $this->imagerootfolder = $imagerootfolder;
        $this->cover1 = $cover1;
        $this->cover2 = $cover2;
        $this->example1 = $example1;
        $this->example1pagecount = $example1pagecount;
        $this->example2 = $example2;
        $this->example2pagecount = $example2pagecount;
        $this->example3 = $example3;
        $this->example3pagecount = $example3pagecount;
        $this->example4 = $example4;
        $this->example4pagecount = $example4pagecount;
        }

        // the methods
        function get_description() {
        return $this->description;
        }
        function get_projecttype() {
        return $this->projecttype;
        }
        function get_imagerootfolder() {
            return $this->imagerootfolder;
        }
        function get_cover1() {
            return $this->cover1;
        }
        function get_cover2() {
            return $this->cover2;
        }
        function get_example1() {
            return $this->example1;
        }
        function get_example1pagecount() {
            return $this->example1pagecount;
        }
        function get_example2() {
            return $this->example2;
        }
        function get_example2pagecount() {
            return $this->example2pagecount;
        }
        function get_example3() {
            return $this->example3;
        }
        function get_example3pagecount() {
            return $this->example3pagecount;
        }
        function get_example4() {
            return $this->example4;
        }
        function get_example4pagecount() {
            return $this->example4pagecount;
        }
        function get_projectnumber() {
            return $this->projectnumber;
        }
    }

  
    //initialize the array
    $allProjects = array();
    
    //add the projects
    //SALVO
    $allProjects[] = new FullProject("#60 / Spring '22 / 64 pages", "<em>Salvo</em> magazine", "images/sv60/", "cover.jpg", "blog-ad.jpg", "what-the-wartortle", 5, "sun-in-a-million", 4, "i-ramona", 4, "i-porn", 2);
    $allProjects[] = new FullProject("#59 / Winter '21 / 64 pages", "<em>Salvo</em> magazine", "images/sv59/", "cover.jpg", "mag-ad.jpg", "the-red-sky-paradox", 4, "crt-doublespeak", 6, "after-tragedy", 5, "no-place-like-home", 2);
    $allProjects[] = new FullProject("#56 / Spring '21 / 64 pages", "<em>Salvo</em> magazine", "images/sv56/", "cover.jpg", "mag-ad.jpg", "our-search-for-meaninglessness", 4, "scientific-conversations", 4, "in-defense-of-the-ancients", 4, "retaking-delight", 2);
    $allProjects[] = new FullProject("#47 / Winter '18 / 64 pages", "<em>Salvo</em> magazine", "images/sv47/", "cover.jpg", "blog-ad.jpg", "todays-teen-girls", 5, "seeing-stars", 4, "dreadful-and-designed", 4,  "moral-law-argument-2", 4);
    $allProjects[] = new FullProject("#54 / Fall '20 / 64 pages", "<em>Salvo</em> magazine", "images/sv54/", "cover.jpg", "mag-ad.jpg", "the-grandest-program", 4, "set-for-life", 4, "families-and-the-economy", 6, "psycho-babble", 2);
    $allProjects[] = new FullProject("#49 / Summer '19 / 64 pages", "<em>Salvo</em> magazine", "images/sv49/", "cover.jpg", "mag-ad.jpg", "far-and-away-above-average", 5, "dramatic-direction", 4, "overprotected", 4, "what-the-bleep", 4);

    //TOUCHSTONE
    $allProjects[] = new FullProject("Nov/Dec '22 / 64 pages", "<em>Touchstone</em> magazine", "images/ts356/", "cover.jpg", "cal-ad.jpg", "of-sages-and-prophets", 6, "old-school-beauty", 5, "a-thousand-words", 2, "commonplaces", 2);
    $allProjects[] = new FullProject("Jul/Aug '22 / 56 pages", "<em>Touchstone</em> magazine", "images/ts354/", "cover.jpg", "conf-ad.jpg", "the-sacred-cosmos", 6, "dominion", 4, "a-thousand-words", 2, "commonplaces", 2);
    $allProjects[] = new FullProject("Nov/Dec '22 / 56 pages", "<em>Touchstone</em> magazine", "images/ts346/", "cover.jpg", "cal-ad.jpg", "st-nicholas", 7, "john-paul-the-scribe", 5, "a-thousand-words", 2, "commonplaces", 2);
    $allProjects[] = new FullProject("Jul/Aug '20 / 56 pages", "<em>Touchstone</em> magazine", "images/ts334/", "cover.jpg", "share-ts.jpg", "no-option", 11, "book-reviews", 4, "a-thousand-words", 2, "commonplaces", 2);
    $allProjects[] = new FullProject("2022 Conference print/web", "<em>Touchstone</em> magazine", "images/tsconf/", "cover.jpg", "website.jpg", "program", 4, "postcard", 4, "slide", 2, "video", 2);
    $allProjects[] = new FullProject("Sept/Oct '19 / 56 pages", "<em>Touchstone</em> magazine", "images/ts325/", "cover.jpg", "share-ts.jpg", "looking-for-jacobs", 4, "make-men-pious-again", 4, "book-review", 2, "commonplaces", 2);

    //BIRETTA
    $allProjects[] = new FullProject("5 Masses / sheet music", "Biretta Books", "images/bmass/", "cover.jpg", "mass-ad.jpg", "missa-yellow", 4, "miss-green", 4, "missa-brown", 2, "missa-light-green", 2);
    $allProjects[] = new FullProject("Schedule '23 / 16 pages", "Biretta Books", "images/bmusic23/", "cover.jpg", "back-cover.jpg", "first-group", 4, "second-group", 4, "third-group", 2, "fourth-group", 2);
    $allProjects[] = new FullProject("Ordo '23 book / 144 pages", "Biretta Books", "images/bordo23/", "cover.jpg", "back-cover.jpg", "first-group", 4, "second-group", 4, "third-group", 2, "fourth-group", 2);
    $allProjects[] = new FullProject("Newsletter / 16 pages", "Biretta Books", "images/bviasacra/", "cover.jpg", "back-cover.jpg", "first-group", 4, "second-group", 4, "third-group", 2, "fourth-group", 2);
    $allProjects[] = new FullProject("Program / 8 pages", "Biretta Books", "images/bmozart/", "cover.jpg", "back-cover.jpg", "first-group", 4, "second-group", 4, "third-group", 2, "fourth-group", 0);
    $allProjects[] = new FullProject("Ordo '22 book / 152 pages", "Biretta Books", "images/bordo22/", "cover.jpg", "back-cover.jpg", "first-group", 4, "second-group", 4, "third-group", 2, "fourth-group", 2);

    
    

    
    //project numbers assigned after the fact to each object in the $allProjects array
    $numOfProjects = count($allProjects);
    for ($i = 0; $i <= $numOfProjects; $i++) {
        $allProjects[$i]->projectnumber = $i+1;
      } 





    //create thumbnails for homepage if no organization declared
    function thumbnailHomepage($aProject) {
        //create necessary variables from project object
        //number for url 
        $projectNumber = $aProject->get_projectnumber();
        $imageRootFolder = $aProject->get_imagerootfolder();
        $cover1 = $aProject->get_cover1();
        $projectType = $aProject->get_projecttype();
        $description = $aProject->get_description();
    
        if ($projectNumber == 1) {
            $org = 'salvo';        
        } elseif ($projectNumber == 7) {
            $org = 'touchstone';
        } elseif ($projectNumber == 13) {
            $org = 'biretta';
        };
    
        echo '<div class="col-md-4">
                <a href="https://www.jerryjanquart.com/portfolio/?org='.$org.'"><img src="projects/'.$imageRootFolder.$cover1.'" class="coverhomepage" /></a>
                <div class="description-box text-center">
                
                    <img src="https://www.jerryjanquart.com/portfolio/projects/images/'.$org.'-logo.jpg" width="93%"/>
    
                </div>
             </div>';
       }




    //create homepage thumbnails if organization is declared
    function outputThumbnails($projects, $organization) {

        //get organization
        if ($organization == "salvo") {
            $type = "<em>Salvo</em> magazine";
        } elseif ($organization == "touchstone") {
            $type = "<em>Touchstone</em> magazine";
        } elseif ($organization == "biretta") {
            $type = "Biretta Books";
        };

        //output thumbnails and links for each organization
        foreach ($projects as $project)  {
            if ($project->get_projecttype() == $type) {
                echo '<div class="col-md-4">
                    <a href="https://www.jerryjanquart.com/portfolio/projects/number.php?project='.$project->get_projectnumber().'"><img src="projects/'.$project->get_imagerootfolder().$project->get_cover1().'" class="coverhomepage" /></a>
                    <div class="description-box text-center">
                    
                        <p class="project-type">'.$project->get_projecttype().'</p>
                        <p class="description">'.$project->get_description().'</p>
                        <p class="my-role">Art Director</p>

                    </div>
                </div>';
            }
        };
    };

    

    




   // for individual project pages---counts pages of example to load correct modal   
   function displayExample($pageCount,$exampleNumber,$root) {
        if ($pageCount == 11) {
            exampleModal_FiveSpreadsPlus1($exampleNumber,$root); 
        } elseif ($pageCount == 7) {
            exampleModal_ThreeSpreadsPlus1($exampleNumber,$root); 
        } elseif ($pageCount == 6) {
            exampleModal_ThreeSpreads($exampleNumber,$root); 
        } elseif ($pageCount == 5) {
            exampleModal_TwoSpreadsPlus1($exampleNumber,$root);
        } elseif ($pageCount == 4) {
            exampleModal_TwoSpreads($exampleNumber,$root);
        } elseif ($pageCount == 2) {
            exampleModal_OneSpread($exampleNumber,$root);
        } else {
            echo "<center><br />[ not displayed---no function for this page count. ]<br /><br /><br /></center>";
        };
    }



   
    //the modals
    function exampleModal_OneSpread($examplenumber, $path) {
        echo '
        
                <img src="'.$path.$examplenumber.'.jpg" class="spread" data-bs-toggle="modal" data-bs-target="#'.$examplenumber.'"/>
                <!-- Spread1 -->
                <div class="modal fade" id="'.$examplenumber.'" aria-hidden="true" aria-labelledby="'.$examplenumber.'" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                        <div class="modal-body">
                            <a data-bs-dismiss="modal"><img src="'.$path.$examplenumber.'.jpg" width="100%"/></a>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

        ';
    }

    function exampleModal_TwoSpreads($examplenumber, $path) {
        echo '
        
                <img src="'.$path.$examplenumber.'.png" class="spread" data-bs-toggle="modal" data-bs-target="#'.$examplenumber.'"/>
        
                <div class="modal fade" id="'.$examplenumber.'" aria-hidden="true" aria-labelledby="'.$examplenumber.'" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'1.jpg" width="100%" data-bs-target="#'.$examplenumber.'2" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="'.$examplenumber.'2" aria-hidden="true" aria-labelledby="'.$examplenumber.'2" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                        <div class="modal-body">
                        <a data-bs-dismiss="modal"><img src="'.$path.$examplenumber.'2.jpg" width="100%" /></a>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>';
    } 



    function exampleModal_TwoSpreadsPlus1($examplenumber, $path) {
        echo '
        
                <img src="'.$path.$examplenumber.'.png" class="spread" data-bs-toggle="modal" data-bs-target="#'.$examplenumber.'"/>

                <div class="modal fade" id="'.$examplenumber.'" aria-hidden="true" aria-labelledby="'.$examplenumber.'" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'1.jpg" width="100%" data-bs-target="#'.$examplenumber.'2" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="'.$examplenumber.'2" aria-hidden="true" aria-labelledby="'.$examplenumber.'2" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'2.jpg" width="100%" data-bs-target="#'.$examplenumber.'3" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="'.$examplenumber.'3" aria-hidden="true" aria-labelledby="'.$examplenumber.'3" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                        <div class="modal-body">
                        <a data-bs-dismiss="modal"><img src="'.$path.$examplenumber.'3.jpg" width="50%" /></a>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>';
    } 



    function exampleModal_ThreeSpreads($examplenumber, $path) {
        echo '
        
                <img src="'.$path.$examplenumber.'.png" class="spread" data-bs-toggle="modal" data-bs-target="#'.$examplenumber.'"/>

                <div class="modal fade" id="'.$examplenumber.'" aria-hidden="true" aria-labelledby="'.$examplenumber.'" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'1.jpg" width="100%" data-bs-target="#'.$examplenumber.'2" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="'.$examplenumber.'2" aria-hidden="true" aria-labelledby="'.$examplenumber.'2" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'2.jpg" width="100%" data-bs-target="#'.$examplenumber.'3" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="'.$examplenumber.'3" aria-hidden="true" aria-labelledby="'.$examplenumber.'3" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                        <div class="modal-body">
                        <a data-bs-dismiss="modal"><img src="'.$path.$examplenumber.'3.jpg" width="100%" /></a>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>';
    } 




    function exampleModal_ThreeSpreadsPlus1($examplenumber, $path) {
        echo '
        
                <img src="'.$path.$examplenumber.'.png" class="spread" data-bs-toggle="modal" data-bs-target="#'.$examplenumber.'"/>

                <div class="modal fade" id="'.$examplenumber.'" aria-hidden="true" aria-labelledby="'.$examplenumber.'" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'1.jpg" width="100%" data-bs-target="#'.$examplenumber.'2" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="'.$examplenumber.'2" aria-hidden="true" aria-labelledby="'.$examplenumber.'2" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'2.jpg" width="100%" data-bs-target="#'.$examplenumber.'3" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="'.$examplenumber.'3" aria-hidden="true" aria-labelledby="'.$examplenumber.'3" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'3.jpg" width="100%" data-bs-target="#'.$examplenumber.'4" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>
                
                <div class="modal fade" id="'.$examplenumber.'4" aria-hidden="true" aria-labelledby="'.$examplenumber.'4" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                        <div class="modal-body">
                        <a data-bs-dismiss="modal"><img src="'.$path.$examplenumber.'4.jpg" width="50%" /></a>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>';
    }
    
    

    function exampleModal_FiveSpreadsPlus1($examplenumber, $path) {
        echo '
        
                <img src="'.$path.$examplenumber.'.png" class="spread" data-bs-toggle="modal" data-bs-target="#'.$examplenumber.'"/>

                <div class="modal fade" id="'.$examplenumber.'" aria-hidden="true" aria-labelledby="'.$examplenumber.'" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'1.jpg" width="100%" data-bs-target="#'.$examplenumber.'2" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="'.$examplenumber.'2" aria-hidden="true" aria-labelledby="'.$examplenumber.'2" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'2.jpg" width="100%" data-bs-target="#'.$examplenumber.'3" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="'.$examplenumber.'3" aria-hidden="true" aria-labelledby="'.$examplenumber.'3" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'3.jpg" width="100%" data-bs-target="#'.$examplenumber.'4" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="'.$examplenumber.'4" aria-hidden="true" aria-labelledby="'.$examplenumber.'4" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'4.jpg" width="100%" data-bs-target="#'.$examplenumber.'5" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="'.$examplenumber.'5" aria-hidden="true" aria-labelledby="'.$examplenumber.'5" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <img src="'.$path.$examplenumber.'5.jpg" width="100%" data-bs-target="#'.$examplenumber.'6" data-bs-toggle="modal" data-bs-dismiss="modal"/>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>
                
                <div class="modal fade" id="'.$examplenumber.'6" aria-hidden="true" aria-labelledby="'.$examplenumber.'6" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                        <div class="modal-body">
                        <a data-bs-dismiss="modal"><img src="'.$path.$examplenumber.'6.jpg" width="50%" /></a>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>';
    }




               
                


?>