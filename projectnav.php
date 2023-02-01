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