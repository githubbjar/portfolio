<!--Navigation-->
        <div class="container-fluid fixed-top">
        <div class="row top-space"> 
            <ul>
                <li><a 
                        href="https://www.jerryjanquart.com/portfolio" 
                        <?php  
                            if (!$org && !$project && !$category) {
                                echo 'class="checked"';
                            };  
                        ?>

                        >All Projects</a></li>   
                <li><a 
                        href="https://www.jerryjanquart.com/portfolio/?org=salvo" 
                        <?php  
                            if ($org == 'salvo' || ((1 <= $project) && ($project <= 12))) {
                                echo 'class="checked"';
                            };  
                        ?>

                        >
                        
                        <em>Salvo</em></a></li>
                <li><a href="https://www.jerryjanquart.com/portfolio/?org=touchstone" <?php  
                            if ($org == 'touchstone' || ((13 <= $project) && ($project <= 18))) {
                                echo 'class="checked"';
                            };  
                        ?>><em>Touchstone</em></a></li>
                
                <li><a href="https://www.jerryjanquart.com/portfolio/?org=biretta" 
                <?php  
                            if ($org == 'biretta' || ((19 <= $project) && ($project <= 24))) {
                                echo 'class="checked"';
                            };  
                        ?>>Biretta Books</a></li>



                <li><a href="https://www.jerryjanquart.com/portfolio/misc.php?category=printads"<?php  
                            if ($category == 'printads' || $category == 'webads' || $category == 'blasts') {
                                echo 'class="checked"';
                            };  
                        ?>>Ads &amp; Blasts</a></li>


                <li><a href="https://www.jerryjanquart.com/portfolio/Janquart_Resume.pdf" target="_blank">Contact</a></li>
            </div>
            <div class="row navigation text-center">
                
                <div class="col-lg-6">
                    <img src="logo1.png" class="left-logo" />
                </div>
                <div class="col-lg-6 disappear">
                    <img src="logo2.png" class="right-logo" />
                </div>
                
            </div>
        </div>