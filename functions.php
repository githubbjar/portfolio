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