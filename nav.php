<!--Navigation-->
        <div class="container-fluid fixed-top">
        <div class="row top-space"> 
            <ul>
                <li><a 
                        href="https://www.jerryjanquart.com/portfolio" 
                        <?php  
                            if (!$org) {
                                echo 'class="checked"';
                            };  
                        ?>

                        >All Projects</a></li>   
                <li><a 
                        href="https://www.jerryjanquart.com/portfolio/?org=salvo" 
                        <?php  
                            if ($org == 'salvo') {
                                echo 'class="checked"';
                            };  
                        ?>

                        >
                        
                        <em>Salvo</em></a></li>
                <li><a href="https://www.jerryjanquart.com/portfolio/?org=touchstone" <?php  
                            if ($org == 'touchstone') {
                                echo 'class="checked"';
                            };  
                        ?>><em>Touchstone</em></a></li>
                <li><a href="https://www.jerryjanquart.com/portfolio/?org=biretta" 
                <?php  
                            if ($org == 'biretta') {
                                echo 'class="checked"';
                            };  
                        ?>>Biretta Books</a></li>
                <li><a href="Janquart_Resume.pdf" target="_blank">Contact</a></li>
            </div>
            <div class="row navigation text-center">
                
                <div class="col-lg-6">
                    <img src="logo1.png" class="left-logo" />
                </div>
                <div class="col-lg-6">
                    <img src="logo2.png" class="right-logo" />
                </div>
                
            </div>
        </div>