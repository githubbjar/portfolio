<!--BEGIN PROJECT NAV BUTTONS-->
<div class="row button-bar-misc">
                        
                        <?php 
                        
                        function getBackUrl($var) {
                            if ($var == 'blasts') {
                                echo 'https://www.jerryjanquart.com/portfolio/misc.php?category=printads';
                            } 
                            if ($var == 'webads') {
                                echo 'https://www.jerryjanquart.com/portfolio/misc.php?category=blasts';
                            }
                            if ($var == 'printads') {
                                echo 'https://www.jerryjanquart.com/portfolio/misc.php?category=webads';
                            } 
                        }

                        function getForwardUrl($var) {
                            if ($var == 'blasts') {
                                echo 'https://www.jerryjanquart.com/portfolio/misc.php?category=webads';
                            } 
                            if ($var == 'webads') {
                                echo 'https://www.jerryjanquart.com/portfolio/misc.php?category=printads';
                            } 
                            if ($var == 'printads') {
                                echo 'https://www.jerryjanquart.com/portfolio/misc.php?category=blasts';
                            } 
                        }

                        function getBackButtonText($var) {
                            if ($var == 'blasts') {
                                echo 'Print Ads';
                            } 
                            if ($var == 'webads') {
                                echo 'eBlasts';
                            }
                            if ($var == 'printads') {
                                echo 'Web Ads';
                            } 
                        };

                        function getForwardButtonText($var) {
                            if ($var == 'blasts') {
                                echo 'Web Ads';
                            } 
                            if ($var == 'webads') {
                                echo 'Print Ads';
                            } 
                            if ($var == 'printads') {
                                echo 'eBlasts';
                            } 
                        };

                        ?>

                        <!--PREVIOUS BUTTON-->
                        <div class="col-sm-2 text-center">
                            <a class="btn btn-dark btn-sm" href="<?php getBackUrl($category); ?>"> &#9664; <?php getBackButtonText($category); ?></a>
                        </div>

                        <!--MIDDLE SPACE-->
                        <div class="col-sm-8 text-center">
                            
                        </div>

                        <!--NEXT BUTTON-->
                        <div class="col-sm-2 text-center">
                            <a class="btn btn-dark btn-sm" href="<?php getForwardUrl($category); ?>"> <?php getForwardButtonText($category); ?> &#9654; </a>
                        </div>

                    </div>
                    <!--END PROJECT NAV BUTTONS-->