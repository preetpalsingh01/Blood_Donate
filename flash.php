<div id="myCarousel" class="carousel slide flash1" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <?php
                    $k=0;
                    while($k<=3)
                    {
                         ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $k;?>">
                        </li>
                        <?php
                        $k++;
                     } ?>
                    </ol>
                	<!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/BANNER1.jpg" class="img-responsive" />
                        <div class="carousel-caption">
                            <h3>
                             
                            </h3>
                        </div>
                    </div>
                    
                    <div class="item">
                        <img src="images/BANNER2.jpg" class="img-responsive" />
                        <div class="carousel-caption">
                            <h3>
                             
                            </h3>
                        </div>
                    </div>
                    
                    <div class="item">
                        <img src="images/BANNER3.jpg" class="img-responsive" />
                        <div class="carousel-caption">
                            <h3>
                             
                            </h3>
                        </div>
                    </div>
                    
                    <div class="item">
                        <img src="images/BANNER4.jpg" class="img-responsive" />
                        <div class="carousel-caption">
                            <h3>
                             
                            </h3>
                        </div>
                    </div>
						
                    </div>
                	<!-- Left and right controls -->
                  	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
				</div>