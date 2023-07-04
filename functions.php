<?php

    // set URL variable
    $raw_url = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    
    // Use parse_url() function to parse the URL 
    $url_components = parse_url($raw_url);
    
    // Use parse_str() function to parse the string passed via URL
    parse_str($url_components['query'], $params);
    
    // set variables based on url
    
    $project = $params['project'];
    $category = $params['category'];
    
    if (!$params['element']) {
        $element = 'computer';
    } else {
        $element = $params['element'];
    };

    $spot = $params['project']-1;
    $org = $params['org'];
    
    $backOne = $project-1;
    $forwardOne = $project+1;
    

    function homepageGreeting($orgVar) {
        if (!$orgVar) {
            echo'
            <h1>Graphic Designer &amp; <br />Web Developer </p>
            <h2>I have been partnering with magazine and book publishers for more than 17 years. In that time I have single-handedly brought over 150 magazines through the full design and production process from manuscript to layout to print to web. I\'ve also created books, websites, print ads, web ads, eblasts, direct mail campaigns, fundraising campaigns, and more. </h2>';
        } elseif ($orgVar == "salvo") {
            echo '  <img src="https://www.jerryjanquart.com/portfolio/projects/images/salvo-header.jpg" class="org-header" />
                    <h1><em>Salvo</em> </h1>
                    <h2>A quarterly, 64 page color magazine aimed at young adults. I have designed every issue since the beginning&#8212;the summer of 2007. This includes website updates, donation forms, subscription forms, eblast announcements, direct mail brochures, fundraising letters, and advertisements.</h2>';
        } elseif ($orgVar == "touchstone") {
                echo '  <img src="https://www.jerryjanquart.com/portfolio/projects/images/touchstone-header.jpg" class="org-header" />
                        <h1><em>Touchstone</em> </h1>
                        <h2>A bi-monthly, 56 page two-color journal aimed at readers with an intellectual bent. I have designed every issue since December of 2004. This includes fully re-designing and coding the website, creating donation forms, subscription forms, eblast announcements, direct mail brochures, fundraising letters, kindle .mobi version, and advertisements.</h2>';
        } elseif ($orgVar == "biretta") {
                echo '  <h1>Biretta Books</h1>
                        <h2>A Chicago-based Catholic book publisher who has brought me on for some lengthy books and special projects.';
        };
    };

    function mainSectionHeading($orgVar) {
        if (!$orgVar) {
            echo'In Print';
        } elseif ($orgVar == "salvo" || $orgVar == "touchstone") {
            echo 'Issues';
        } else {
            echo 'Print Projects';
        };
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
    
        if ($projectNumber == 2) {
            $org = 'salvo'; 
            $numOfProjects = 12;       
        } elseif ($projectNumber == 13) {
            $org = 'touchstone';
            $numOfProjects = 6;
        } elseif ($projectNumber == 20) {
            $org = 'biretta';
            $numOfProjects = 6;
        };

        
    
        echo '<div class="col-md-4">
                <a href="https://www.jerryjanquart.com/portfolio/?org='.$org.'"><img src="projects/'.$imageRootFolder.$cover1.'" class="coverhomepage" /></a>
                <div class="description-box text-center">
                
                    <img src="https://www.jerryjanquart.com/portfolio/projects/images/'.$org.'-logo.jpg" width="93%"/>
                    <p class="projectcount">[ '.$numOfProjects.' examples ]</p>

                </div>
             </div>';
       }


       function fetchHomepageThumbnails($orgVar,$displayFunction) {
        if (!$orgVar) {
            //this uses array
            thumbnailHomepage($displayFunction[1]); 
            thumbnailHomepage($displayFunction[12]);  
            thumbnailHomepage($displayFunction[19]);
        } else {
            //this uses array 
            outputThumbnails($displayFunction,$orgVar);
        };
       }




    //create homepage thumbnails if organization is declared
    //Using $projects as $project wasn't working in that the code following this function didn't load at all. A google search for "php foreach for array of objects" showed me the answer by grabbing the $key and $value as seen below.
    //https://stackoverflow.com/questions/13707836/php-foreach-arrays-and-objects
    function outputThumbnails($projects, $organization) {

        if ($organization == "salvo") {
            $type = "<em>Salvo</em> magazine";
        } elseif ($organization == "touchstone") {
            $type = "<em>Touchstone</em> magazine";
        } elseif ($organization == "biretta") {
            $type = "Biretta Books";
        };

        $count = 0;
        foreach ($projects as $key=>$value)  {
            if ($value->projecttype == $type) {

                if ($count == 3 && $type == "<em>Salvo</em> magazine") {
                    echo '
                    <div class="row content-container">
                        <div class="col">
                        <span class="pink"><p class="symbol">	&#9660; <a name="online"></a></p>
                        <p class="section-heading">Word on the Street</div></span>
                    </div>
                    <div class="row"><div class="col" style="padding-left: 30px;"><p class="blurb"><span class="openingquote">&#8220;</span>I\'ve worked with Jerry at <em>Salvo</em> magazine for years. My go-to-description for him is \'brilliant.\' He has a knack for capturing the gist of an article, or even an entire issue, and illustrating everything in a way that is eye-catching, thought-provoking, and occasionally accented with a just-right touch of laugh-out-loud humor. He\'s also great to work with. Highly recommended.<span class="openingquote">&#8221;</span> <br /><span class="type">&#8212; Terrell Clemmons, Deputy Editor, <em>Salvo</em></span></p></div></div>';
                    #continue;
                }

                if ($count == 3 && $type == "<em>Touchstone</em> magazine") {
                    echo '
                    <div class="row content-container">
                        <div class="col">
                        <span class="pink"><p class="symbol">	&#9660; <a name="online"></a></p>
                        <p class="section-heading">Endorsement</div></span>
                    </div>
                    <div class="row"><div class="col" style="padding-left: 30px;"><p class="blurb"><span class="openingquote">&#8220;</span>An experienced designer in print and web formats, Jerry easily adapts his superb creativity to the wide range of graphic projects we give him. And he always gets the technical requirements right. Jerry is not just talented but also a pleasure to work with.<span class="openingquote">&#8221;</span> <br /><span class="type">&#8212; Richard Vaughan, President, Publishing Management Associates</span></p></div></div>';
                    #continue;
                }

                if ($count == 3 && $type == "Biretta Books") {
                    echo '
                    <div class="row content-container">
                        <div class="col">
                        <span class="pink"><p class="symbol">	&#9660; <a name="online"></a></p>
                        <p class="section-heading">Testimonial</div></span>
                    </div>
                    <div class="row"><div class="col" style="padding-left: 30px;"><p class="blurb"><span class="openingquote">&#8220;</span>Jerry is our \'go to guy.\' He brings so much creativity to our projects. Not only is he efficient and fairly priced, but the finished products are better than when we initially envisioned. We are thankful to have Jerry as our vendor!<span class="openingquote">&#8221;</span> <br /><span class="type">&#8212; Nick Chapello, Biretta Books, Operations Director </span></p></div></div>';
                    #continue;
                }

                echo '<div class="col-md-4">
                <a href="https://www.jerryjanquart.com/portfolio/projects/number.php?project='.$value->projectnumber.'"><img src="projects/'.$value->imagerootfolder.$value->cover1.'" class="coverhomepage" /></a>
                    <div class="description-box text-center">
                
                    <p class="project-type">'.$value->projecttype.'</p>
                    <p class="description">'.$value->description.'</p>
                    <p class="my-role">Art Director</p>

                    </div>
                </div>';

                $count++;
            }
        
        };
    };

    

    




   // for individual project pages---counts pages of example to load correct modal   
   function displayExample($pageCount,$exampleNumber,$root) {
        if ($pageCount == 11 || $pageCount == 12) {
            exampleModal_SixSpreads($exampleNumber,$root); 
        } else if ($pageCount == 9 || $pageCount == 10) {
            exampleModal_FiveSpreads($exampleNumber,$root); 
        } elseif ($pageCount == 7 || $pageCount == 8) {
            exampleModal_FourSpreads($exampleNumber,$root); 
        } elseif ($pageCount == 5 || $pageCount == 6) {
            exampleModal_ThreeSpreads($exampleNumber,$root); 
        } elseif ($pageCount == 3 || $pageCount == 4) {
            exampleModal_TwoSpreads($exampleNumber,$root);
        } elseif ($pageCount == 1 || $pageCount == 2) {
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




    function exampleModal_FourSpreads($examplenumber, $path) {
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
                        <a data-bs-dismiss="modal"><img src="'.$path.$examplenumber.'4.jpg" width="100%" /></a>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>';
    }
    
    

    function exampleModal_FiveSpreads($examplenumber, $path) {
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
                        <a data-bs-dismiss="modal"><img src="'.$path.$examplenumber.'6.jpg" width="100%" /></a>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>';
    }



    function exampleModal_SixSpreads($examplenumber, $path) {
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
                        <a data-bs-dismiss="modal"><img src="'.$path.$examplenumber.'6.jpg" width="100%" /></a>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                    </div>
                </div>';
    }
               
                


?>