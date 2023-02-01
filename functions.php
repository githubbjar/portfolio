<?php






    //**********THUMBS UP**********\\
    // set URL variable
    $raw_url = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    // Use parse_url() function to parse the URL 
    // and return an associative array which
    // contains its various components
    $url_components = parse_url($raw_url);
    // Use parse_str() function to parse the
    // string passed via URL
    parse_str($url_components['query'], $params);
    // set variable based on url
    if (!$params['project']) {
        $project = 1;
    } else {
        $project = $params['project'];
    };

    $spot = $params['project']-1;
    $org = $params['org'];
    $backOne = $project-1;
    $forwardOne = $project+1;


    /*SIZES OF IMAGES

    spread jpg 1900 x 1254
    png comp 1524 x 1025
     

    */




    //**********THUMBS UP**********\\
    //Project Class
    class Project {
    
        
        public $description;
        public $projecttype;
        public $imagerootfolder;
        public $cover1;
        public $cover2;
        public $example1;
        public $example2;
        public $example3;
        public $example4;
        public $projectnumber;
    
        
    
        function __construct($description, $projecttype, $imagerootfolder, $cover1, $cover2, $example1, $example2, $example3, $example4, $projectnumber) {
        $this->description = $description;
        $this->projecttype = $projecttype;
        $this->imagerootfolder = $imagerootfolder;
        $this->cover1 = $cover1;
        $this->cover2 = $cover2;
        $this->example1 = $example1;
        $this->example2 = $example2;
        $this->example3 = $example3;
        $this->example4 = $example4;
        $this->projectnumber = $projectnumber;
        }
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
        function get_example2() {
            return $this->example2;
        }
        function get_example3() {
            return $this->example3;
        }
        function get_example4() {
            return $this->example4;
        }
        function get_projectnumber() {
            return $this->projectnumber;
        }
    }




    

    //UPDATE THIS
    //The Objects (The projects)
    
    $project1 = new Project("#60 / Spring '22 / 64 pages", "<em>Salvo</em> magazine", "images/sv60/", "cover.jpg", "blog-ad.jpg", "what-the-wartortle", "sun-in-a-million", "i-ramona", "i-porn", "1");

    $project2 = new Project("#59 / Winter '21 / 64 pages", "<em>Salvo</em> magazine", "images/sv59/", "cover.jpg", "mag-ad.jpg", "the-red-sky-paradox", "crt-doublespeak", "after-tragedy", "no-place-like-home", "2");

    $project3 = new Project("#56 / Spring '21 / 64 pages", "<em>Salvo</em> magazine", "images/sv56/", "cover.jpg", "mag-ad.jpg", "our-search-for-meaninglessness", "scientific-conversations", "in-defense-of-the-ancients", "retaking-delight", "3");

    $project4 = new Project("#47 / Winter '18 / 64 pages", "<em>Salvo</em> magazine", "images/sv47/", "cover.jpg", "blog-ad.jpg", "todays-teen-girls", "seeing-stars", "dreadful-and-designed", "moral-law-argument-2", "4");
    
    $project5 = new Project("#54 / Fall '20 / 64 pages", "<em>Salvo</em> magazine", "images/sv54/", "cover.jpg", "mag-ad.jpg", "the-grandest-program", "set-for-life", "families-and-the-economy", "psycho-babble", "5");

    $project6 = new Project("#49 / Summer '19 / 64 pages", "<em>Salvo</em> magazine", "images/sv49/", "cover.jpg", "mag-ad.jpg", "far-and-away-above-average", "dramatic-direction", "overprotected", "what-the-bleep", "6");

    $project7 = new Project("Nov/Dec '22 / 64 pages", "<em>Touchstone</em> magazine", "images/ts356/", "cover.jpg", "cal-ad.jpg", "of-sages-and-prophets", "old-school-beauty", "a-thousand-words", "commonplaces", "7");

    $project8 = new Project("Jul/Aug '22 / 56 pages", "<em>Touchstone</em> magazine", "images/ts354/", "cover.jpg", "conf-ad.jpg", "the-sacred-cosmos", "dominion", "a-thousand-words", "commonplaces", "8");

    $project9 = new Project("Nov/Dec '22 / 56 pages", "<em>Touchstone</em> magazine", "images/ts346/", "cover.jpg", "cal-ad.jpg", "st-nicholas", "john-paul-the-scribe", "a-thousand-words", "commonplaces", "9");

    $project10 = new Project("Jul/Aug '20 / 56 pages", "<em>Touchstone</em> magazine", "images/ts334/", "cover.jpg", "share-ts.jpg", "no-option", "book-reviews", "a-thousand-words", "commonplaces", "10");

    $project11 = new Project("2022 Conference print/web", "<em>Touchstone</em> magazine", "images/tsconf/", "cover.jpg", "website.jpg", "program", "postcard", "slide", "video", "11");

    $project12 = new Project("Sept/Oct '19 / 56 pages", "<em>Touchstone</em> magazine", "images/ts325/", "cover.jpg", "share-ts.jpg", "looking-for-jacobs", "make-men-pious-again", "book-review", "commonplaces", "12");

    $project13 = new Project("5 Masses / sheet music", "Biretta Books", "images/bmass/", "cover.jpg", "mass-ad.jpg", "missa-yellow", "miss-green", "missa-brown", "missa-light-green", "13");

    $project14 = new Project("Schedule '23 / 16 pages", "Biretta Books", "images/bmusic23/", "cover.jpg", "back-cover.jpg", "first-group", "second-group", "third-group", "fourth-group", "14");

    $project15 = new Project("Ordo '23 book / 144 pages", "Biretta Books", "images/bordo23/", "cover.jpg", "back-cover.jpg", "first-group", "second-group", "third-group", "fourth-group", "15");

    $project16 = new Project("Newsletter / 16 pages", "Biretta Books", "images/bviasacra/", "cover.jpg", "back-cover.jpg", "first-group", "second-group", "third-group", "fourth-group", "16");

    $project17 = new Project("Program / 8 pages", "Biretta Books", "images/bmozart/", "cover.jpg", "back-cover.jpg", "first-group", "second-group", "third-group", "fourth-group", "17");

    $project18 = new Project("Ordo '22 book / 152 pages", "Biretta Books", "images/bordo22/", "cover.jpg", "back-cover.jpg", "first-group", "second-group", "third-group", "fourth-group", "18");


    //**********THUMBS UP**********\\
    //MAKE AN ARRAY OF ALL PROJECTS 1-25-23




    


    class FullProject {

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
    
        
    
        function __construct($description, $projecttype, $imagerootfolder, $cover1, $cover2, $example1, $example1pagecount, $example2, $example2pagecount, $example3, $example3pagecount, $example4, $example4pagecount, $projectnumber) {
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
        $this->projectnumber = $projectnumber;
        }
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

  











    
    $allProjects = array();
    
    $allProjects[0] = new FullProject("#60 / Spring '22 / 64 pages", "<em>Salvo</em> magazine", "images/sv60/", "cover.jpg", "blog-ad.jpg", "what-the-wartortle", 4, "sun-in-a-million", 4, "i-ramona", 4, "i-porn", 2, "1");
    $allProjects[1] = new FullProject("#59 / Winter '21 / 64 pages", "<em>Salvo</em> magazine", "images/sv59/", "cover.jpg", "mag-ad.jpg", "the-red-sky-paradox", 4, "crt-doublespeak", 6, "after-tragedy", 5, "no-place-like-home", 2, "2");
    $allProjects[2] = new FullProject("#56 / Spring '21 / 64 pages", "<em>Salvo</em> magazine", "images/sv56/", "cover.jpg", "mag-ad.jpg", "our-search-for-meaninglessness", 4, "scientific-conversations", 4, "in-defense-of-the-ancients", 4, "retaking-delight", 2, "3");
    $allProjects[3] = new FullProject("#47 / Winter '18 / 64 pages", "<em>Salvo</em> magazine", "images/sv47/", "cover.jpg", "blog-ad.jpg", "todays-teen-girls", 5, "seeing-stars", 4, "dreadful-and-designed", 4,  "moral-law-argument-2", 4, "4");
    $allProjects[4] = new FullProject("#54 / Fall '20 / 64 pages", "<em>Salvo</em> magazine", "images/sv54/", "cover.jpg", "mag-ad.jpg", "the-grandest-program", 4, "set-for-life", 4, "families-and-the-economy", 6, "psycho-babble", 2, "5");
    $allProjects[5] = new FullProject("#49 / Summer '19 / 64 pages", "<em>Salvo</em> magazine", "images/sv49/", "cover.jpg", "mag-ad.jpg", "far-and-away-above-average", 5, "dramatic-direction", 4, "overprotected", 4, "what-the-bleep", 3, "6");
    $allProjects[6] = new Project("Nov/Dec '22 / 64 pages", "<em>Touchstone</em> magazine", "images/ts356/", "cover.jpg", "cal-ad.jpg", "of-sages-and-prophets", "old-school-beauty", "a-thousand-words", "commonplaces", "7");
    $allProjects[7] = new Project("Jul/Aug '22 / 56 pages", "<em>Touchstone</em> magazine", "images/ts354/", "cover.jpg", "conf-ad.jpg", "the-sacred-cosmos", "dominion", "a-thousand-words", "commonplaces", "8");
    $allProjects[8] = new Project("Nov/Dec '22 / 56 pages", "<em>Touchstone</em> magazine", "images/ts346/", "cover.jpg", "cal-ad.jpg", "st-nicholas", "john-paul-the-scribe", "a-thousand-words", "commonplaces", "9");
    $allProjects[9] = new Project("Jul/Aug '20 / 56 pages", "<em>Touchstone</em> magazine", "images/ts334/", "cover.jpg", "share-ts.jpg", "no-option", "book-reviews", "a-thousand-words", "commonplaces", "10");
    $allProjects[10] = new Project("2022 Conference print/web", "<em>Touchstone</em> magazine", "images/tsconf/", "cover.jpg", "website.jpg", "program", "postcard", "slide", "video", "11");
    $allProjects[11] = new Project("Sept/Oct '19 / 56 pages", "<em>Touchstone</em> magazine", "images/ts325/", "cover.jpg", "share-ts.jpg", "looking-for-jacobs", "make-men-pious-again", "book-review", "commonplaces", "12");
    $allProjects[12] = new Project("5 Masses / sheet music", "Biretta Books", "images/bmass/", "cover.jpg", "mass-ad.jpg", "missa-yellow", "miss-green", "missa-brown", "missa-light-green", "13");
    $allProjects[13] = new Project("Schedule '23 / 16 pages", "Biretta Books", "images/bmusic23/", "cover.jpg", "back-cover.jpg", "first-group", "second-group", "third-group", "fourth-group", "14");
    $allProjects[14] = new Project("Ordo '23 book / 144 pages", "Biretta Books", "images/bordo23/", "cover.jpg", "back-cover.jpg", "first-group", "second-group", "third-group", "fourth-group", "15");
    $allProjects[15] = new Project("Newsletter / 16 pages", "Biretta Books", "images/bviasacra/", "cover.jpg", "back-cover.jpg", "first-group", "second-group", "third-group", "fourth-group", "16");
    $allProjects[16] = new Project("Program / 8 pages", "Biretta Books", "images/bmozart/", "cover.jpg", "back-cover.jpg", "first-group", "second-group", "third-group", "fourth-group", "17");
    $allProjects[17] = new Project("Ordo '22 book / 152 pages", "Biretta Books", "images/bordo22/", "cover.jpg", "back-cover.jpg", "first-group", "second-group", "third-group", "fourth-group", "18");







     //**********THUMBS UP**********\\
    //MAKE THE THUMBNAILS FOR THE HOME PAGE FROM THE ALL PROJECTS ARRAY
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
                    <a href="https://www.jerryjanquart.com/portfolio/projects/?project='.$project->get_projectnumber().'"><img src="projects/'.$project->get_imagerootfolder().$project->get_cover1().'" class="coverhomepage" /></a>
                    <div class="description-box text-center">
                    
                        <p class="project-type">'.$project->get_projecttype().'</p>
                        <p class="description">'.$project->get_description().'</p>
                        <p class="my-role">Art Director</p>

                    </div>
                </div>';
            }
        };
    
    };

    



   


    //UPDATE THIS
    //Variables for use on individual project pages
    //reads project number from url
    if ($project == 1) {
        $aProject = $project1;
    } elseif ($project == 2) {
        $aProject = $project2;
    } elseif ($project == 3) {
        $aProject = $project3;
    } elseif ($project == 4) {
        $aProject = $project4;
    } elseif ($project == 5) {
        $aProject = $project5;
    } elseif ($project == 6) {
        $aProject = $project6;
    } elseif ($project == 7) {
        $aProject = $project7;
    } elseif ($project == 8) {
        $aProject = $project8;
    } elseif ($project == 9) {
        $aProject = $project9;
    } elseif ($project == 10) {
        $aProject = $project10;
    } elseif ($project == 11) {
        $aProject = $project11;
    } elseif ($project == 12) {
        $aProject = $project12;
    } elseif ($project == 13) {
        $aProject = $project13;
    } elseif ($project == 14) {
        $aProject = $project14;
    } elseif ($project == 15) {
        $aProject = $project15;
    } elseif ($project == 16) {
        $aProject = $project16;
    } elseif ($project == 17) {
        $aProject = $project17;
    } elseif ($project == 18) {
        $aProject = $project18;
    } else {
        $aProject = $project1;
    };

    $imageRootFolder = $aProject->get_imagerootfolder();
    $cover1 = $aProject->get_cover1();
    $projecttype = $aProject->get_projecttype();
    $description = $aProject->get_description();
    $cover2 = $aProject->get_cover2();
    $example1 = $aProject->get_example1();
    $example2 = $aProject->get_example2();
    $example3 = $aProject->get_example3();
    $example4 = $aProject->get_example4();








  //Homepage thumbnail function --- Code updated to use the project array 1-25-23
/*
  function thumbnail($aProject) {
    //create necessary variables from project object
    //number for url 
    $projectNumber = $aProject->get_projectnumber();
    $imageRootFolder = $aProject->get_imagerootfolder();
    $cover1 = $aProject->get_cover1();
    $projectType = $aProject->get_projecttype();
    $description = $aProject->get_description();

    echo '<div class="col-md-4">
            <a href="https://www.jerryjanquart.com/portfolio/projects/?project='.$projectNumber.'"><img src="projects/'.$imageRootFolder.$cover1.'" class="coverhomepage" /></a>
            <div class="description-box text-center">
            
                <p class="project-type">'.$projectType.'</p>
                <p class="description">'.$description.'</p>
                <p class="my-role">Art Director</p>

            </div>
         </div>';
   }*/


   //UPDATE
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



   //Vars for use with object array of projects
   $getImageRootFolder = $allProjects[$spot]->get_imagerootfolder();
   $getCover1 = $allProjects[$spot]->get_cover1();
   $getCover2 = $allProjects[$spot]->get_cover2();
   $getProjectType = $allProjects[$spot]->get_projecttype();
   $getDescription = $allProjects[$spot]->get_description();

   $getExample1 = $allProjects[$spot]->get_example1();
   $getExample1PageCount = $allProjects[$spot]->get_example1pagecount();
   $getExample2 = $allProjects[$spot]->get_example2();
   $getExample2PageCount = $allProjects[$spot]->get_example2pagecount();
   $getExample3 = $allProjects[$spot]->get_example3();
   $getExample3PageCount = $allProjects[$spot]->get_example3pagecount();
   $getExample4 = $allProjects[$spot]->get_example4();
   $getExample4PageCount = $allProjects[$spot]->get_example4pagecount();


   //display example based on page count   
   function displayExample($pageCount,$exampleNumber,$root) {
        if ($pageCount == 6) {
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



   
    //modal functions
    function exampleModal_OneSpread($examplenumber, $path) {
        echo '
        
                <img src="'.$path.$examplenumber.'.jpg" class="spread" data-bs-toggle="modal" data-bs-target="#'.$examplenumber.'"/>
                <!-- Spread1 -->
                <div class="modal fade" id="'.$examplenumber.'" aria-hidden="true" aria-labelledby="'.$examplenumber.'" tabindex="-1">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"></div>
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
                        <div class="modal-header"></div>
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
                        <div class="modal-header"></div>
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
                        <div class="modal-header"></div>
                        <div class="modal-body">
                        <a data-bs-dismiss="modal"><img src="'.$path.$examplenumber.'3.jpg" width="100%" /></a>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>';
    } 




               
                


?>