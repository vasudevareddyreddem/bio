      
	   <?php if(isset($homapage_banners) && count($homapage_banners)>0){ ?>
	    <div class="ab_class">
        <div class="">
             <div class="">
               <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

            <!-- Indicators -->
			 <ol class="carousel-indicators">
					<?php $cnt=1;foreach($homapage_banners as $lists){ ?>
				   
					<?php if($cnt==1){ ?>
						<li data-target="#bootstrap-touch-slider" data-slide-to="<?php echo $cnt; ?>" class="active"></li>
						
					<?php }else{ ?>
						<li data-target="#bootstrap-touch-slider" data-slide-to="<?php echo $cnt; ?>"></li>
					<?php } ?>
				   
					<?php $cnt++;} ?>
			</ol>
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- Third Slide -->
				<?php $count=0;foreach($homapage_banners as $list){ ?>
				
				<?php //echo '<pre>';print_r($list);exit; ?>
				
				<?php if($count==0){ ?>
						<div class="item active">

							<!-- Slide Background -->
							<img src="<?php echo base_url('assets/home_banners/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?:''; ?>"  class="slide-image"/>
							<div class="bs-slider-overlay"></div>

							<div class="container">
								<div class="row">
									<!-- Slide Text Layer -->
									<div class="slide-text slide_style_center">
										<h1 data-animation="animated zoomInRight"><?php echo isset($list['title'])?$list['title']:''; ?></h1>
									</div>
								</div>
							</div>
						</div>
				<?php }else{ ?>
						<div class="item">

							<!-- Slide Background -->
							<img src="<?php echo base_url('assets/home_banners/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?:''; ?>"  class="slide-image"/>
							<div class="bs-slider-overlay"></div>

							<div class="container">
								<div class="row">
									<!-- Slide Text Layer -->
									<div class="slide-text slide_style_center">
										<h1 data-animation="animated zoomInRight"><?php echo isset($list['title'])?$list['title']:''; ?></h1>
									</div>
								</div>
							</div>
						</div>
				<?php } ?>
				<?php $count++;} ?>
                <!-- End of Slide -->



            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
             </div>
         </div>
		</div> 
		 <?php } ?>
       
       <div class="clear"></div>
        <!--revolution end-->
        <div class="search-filter">
            <div class="container">
       
                    <div class="row">
                       
                       <div class="col-md-3 col-xs-12">
                          <div class="row">
								<div class="col-md-6 text-white">
								<strong><b>Journlas List :</b></strong>
								</div>
								<div class="col-md-6 text-white">
								<b>250</b>
								</div>
						  
						  </div>

						 </div> 
						 <div class="col-md-3 col-xs-12">
                          <div class="row">
								<div class="col-md-6 text-white">
								<strong><b>Journlas List :</b></strong>
								</div>
								<div class="col-md-6 text-white">
								<b>30</b>
								</div>
						  
						  </div>

						 </div>
						 <div class="col-md-3 col-xs-12">
                          <div class="row">
								<div class="col-md-6 text-white">
								<strong><b>Article List :</b></strong>
								</div>
								<div class="col-md-6 text-white">
								<b>12</b>
								</div>
						  
						  </div>

						 </div>  
						 <div class="col-md-3 col-xs-12">
                          <div class="row">
								<div class="col-md-8 text-white">
								<strong><b>Board Member List :</b></strong>
								</div>
								<div class="col-md-4 text-white">
								<b>100</b>
								</div>
						  
						  </div>

						 </div> 
						  
						 
                      
                       
                    </div>
               
            </div>
        </div>
        <div class="divide60"></div>
        <div class="container " >
	
				
               
            
		<div class="row">
		
                   <div class="text-center">
					  <h2 class="" style="padding:0px;margin:0px;">Latest Articles    
					</h2>
					<div  style="position:relative ;" class="">
												<div style="width:300px;border-bottom:2px solid #000;margin:0 auto"> &nbsp;</div>
												<div style="position:absolute;background:#000;width:20px;height:20px; border-radius:50%;border:5px solid #fff;top:10px;left:50%">
											</div>
											<div class="clearfix">&nbsp;</div>
					</div>
					 
				</div>                     
                <div class="col-md-4 mt20">
				
		
                    <article class="blog-grid margin-b-10 article">
                                 <div class="blog-grid-box-shadow">
                                    <div class="blog-grid-content text-center" style="padding:20px;">
										<em style="font-size:20px">Research Article </em><br>
										<em style="font-size:20px">J Health Inform Mang 2018</em><br>
										<em style="font-size:20px">10.4172/JHM.1000109</em>
										<div class="clearfix">&nbsp;</div>
										<div style="position:relative ;" class="">
												<div style="width:300px;border-bottom:2px solid #000;margin:0 auto"> &nbsp;</div>
												<div style="position:absolute;background:#000;width:20px;height:20px; border-radius:50%;border:5px solid #fff;top:10px;left:50%">
											</div>
											<div class="clearfix">&nbsp;</div>
                                         <h3>
                                        
									
                                     </h3></div>
										
                                        <h4>
										 <a class="blog-grid-title-link" style="color:#00bcd4" href="#">The Visual Analogue scale: An easy and reliable way of assessing perceived stress</a></h4>
                                        <div class="clearfix">&nbsp;</div>
									
                                   <div class="blog-grid-supplemental">
										 
 											<a href="#" class="btn btn-warning  text-white" style="font-size:12px;"" style="border-radius:5px;border-color:#555;color:#555">Abstract</a> 
											<a href="#" class="btn btn-success text-white" style="border-radius:5px;border-color:#555;color:#555">Full Text</a>
							
										<a href="#" class="btn btn-danger text-white" style="border-radius:5px;border-color:#555;color:#555">Pdf</a>
										<div class="clearfix">&nbsp;</div>
										<div>
										<img src="http://localhost/bio/assets/vendor/img/heart.png" alt="recent">
										</div>
										
										
                                     </div>
                                     </div>
                                     </div>
                                
                            </article>
				 
					 
 					 
                </div>
				<div class="col-md-4 mt20">
				
		
                    <article class="blog-grid margin-b-10 article">
                                 <div class="blog-grid-box-shadow">
                                    <div class="blog-grid-content text-center" style="padding:20px;">
										<em style="font-size:20px">Research Article </em><br>
										<em style="font-size:20px">J Health Inform Mang 2018</em><br>
										<em style="font-size:20px">10.4172/JHM.1000109</em>
										<div class="clearfix">&nbsp;</div>
										<div style="position:relative ;" class="">
												<div style="width:300px;border-bottom:2px solid #000;margin:0 auto"> &nbsp;</div>
												<div style="position:absolute;background:#000;width:20px;height:20px; border-radius:50%;border:5px solid #fff;top:10px;left:50%">
											</div>
											<div class="clearfix">&nbsp;</div>
                                         <h3>
                                        
									
                                     </h3></div>
										
                                        <h4>
										 <a class="blog-grid-title-link" style="color:#00bcd4" href="#">The Visual Analogue scale: An easy and reliable way of assessing perceived stress</a></h4>
                                        
									                                        <div class="clearfix">&nbsp;</div>

                                   <div class="blog-grid-supplemental">
										 
 											<a href="#" class="btn btn-warning  text-white" style="font-size:12px;"" style="border-radius:5px;border-color:#555;color:#555">Abstract</a> 
											<a href="#" class="btn btn-success text-white" style="border-radius:5px;border-color:#555;color:#555">Full Text</a>
							
										<a href="#" class="btn btn-danger text-white" style="border-radius:5px;border-color:#555;color:#555">Pdf</a>
										<div class="clearfix">&nbsp;</div>
										<div>
										<img src="http://localhost/bio/assets/vendor/img/heart.png" alt="recent">
										</div>
										
										
                                     </div>
                                     </div>
                                     </div>
                                
                            </article>
				 
					 
 					 
                </div>
				<div class="col-md-4 mt20">
				
		
                    <article class="blog-grid margin-b-10 article">
                                 <div class="blog-grid-box-shadow">
                                    <div class="blog-grid-content text-center" style="padding:20px;">
										<em style="font-size:20px">Research Article </em><br>
										<em style="font-size:20px">Reddem vasudevareddy </em><br>
										<em style="font-size:20px">2018 july 12</em>
										<div class="clearfix">&nbsp;</div>
										<div style="position:relative ;" class="">
												<div style="width:300px;border-bottom:2px solid #000;margin:0 auto"> &nbsp;</div>
												<div style="position:absolute;background:#000;width:20px;height:20px; border-radius:50%;border:5px solid #fff;top:10px;left:50%">
											</div>
											<div class="clearfix">&nbsp;</div>
                                         <h3>
                                        
									
                                     </h3></div>
										
                                        <h4>
										 <a class="blog-grid-title-link" style="color:#00bcd4" href="#">The Visual Analogue scale: An easy and reliable way of assessing perceived stress</a></h4>
                                        
									                                        <div class="clearfix">&nbsp;</div>

                                   <div class="blog-grid-supplemental">
										 
 											<a href="#" class="btn btn-warning  text-white" style="font-size:12px;"" style="border-radius:5px;border-color:#555;color:#555">Abstract</a> 
											<a href="#" class="btn btn-success text-white" style="border-radius:5px;border-color:#555;color:#555">Full Text</a>
							
										<a href="#" class="btn btn-danger text-white" style="border-radius:5px;border-color:#555;color:#555">Pdf</a>
										<div class="clearfix">&nbsp;</div>
										<div>
										<img src="http://localhost/bio/assets/vendor/img/heart.png" alt="recent">
										</div>
										
										
                                     </div>
                                     </div>
                                     </div>
                                
                            </article>
				 
					 
 					 
                </div>
				
				
		
		</div>
		<div class="row">
		
                   <div class="text-center">
					  <h2 class="" style="padding:0px;margin:0px;">OUR JOURNALS    
					</h2>
					<div style="position:relative ;" class="">
												<div style="width:300px;border-bottom:2px solid #000;margin:0 auto"> &nbsp;</div>
												<div style="position:absolute;background:#000;width:20px;height:20px; border-radius:50%;border:5px solid #fff;top:10px;left:50%">
											</div>
											<div class="clearfix">&nbsp;</div>
                                         </div>
					 
				</div> 
				<br>
				
	    <div class="col-md-4 mt20">
				
		
                    <article class="blog-grid margin-b-10 article" style="padding:20px 10px;">
                                	<img class="img-responsive " src="http://localhost/bio/assets/article_in_press/1532759347.png" alt="carousel3" style="width: 100%">
						<hr>
						<div class="pad-x20" style="text-align:center">
						 <h4>
										 <a class="blog-grid-title-link" style="color:#00bcd4" href="#">The Visual Analogue scale: An easy and reliable way of assessing perceived stress</a></h4>
                                        
						</div>
																<div class="clearfix">&nbsp;</div>

						  <div class="blog-grid-supplemental" style="text-align:center">
									<a href="#" class="btn btn-warning  text-white" style="font-size:12px;" style="border-radius:5px;border-color:#555;color:#555">Read  More</a> 
							 </div>
                                
                         </article>
				 
					 
 					 
                </div> <div class="col-md-4 mt20">
				
		
                    <article class="blog-grid margin-b-10 article" style="padding:20px 10px;">
                                	<img class="img-responsive " src="http://localhost/bio/assets/article_in_press/1532759347.png" alt="carousel3" style="width: 100%">
						<hr>
						<div class="pad-x20" style="text-align:center">
						 <h4>
										 <a class="blog-grid-title-link" style="color:#00bcd4" href="#">The Visual Analogue scale: An easy and reliable way of assessing perceived stress</a></h4>
                                        
						</div>
																<div class="clearfix">&nbsp;</div>

						  <div class="blog-grid-supplemental" style="text-align:center">
									<a href="#" class="btn btn-warning  text-white" style="font-size:12px;" style="border-radius:5px;border-color:#555;color:#555">Read  More</a> 
							 </div>
                                
                         </article>
				 
					 
 					 
                </div> <div class="col-md-4 mt20">
				
		
                    <article class="blog-grid margin-b-10 article" style="padding:20px 10px;">
                                	<img class="img-responsive " src="http://localhost/bio/assets/article_in_press/1532759347.png" alt="carousel3" style="width: 100%">
						<hr>
						<div class="pad-x20" style="text-align:center">
						 <h4>
										 <a class="blog-grid-title-link" style="color:#00bcd4" href="#">The Visual Analogue scale: An easy and reliable way of assessing perceived stress</a></h4>
                                        
						</div>
																<div class="clearfix">&nbsp;</div>

						  <div class="blog-grid-supplemental" style="text-align:center">
									<a href="#" class="btn btn-warning  text-white" style="font-size:12px;" style="border-radius:5px;border-color:#555;color:#555">Read  More</a> 
							 </div>
                                
                         </article>
				 
					 
 					 
                </div> 
		
				
				
				

	</div>
		<div class="clearfix">&nbsp;</div>
		<!--<div class="row">
		<!-- Carousel -->
					<!--<div id="theme-carousel" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<!--<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="row">
								
									<div class="col-md-4 " style="padding:20px 10px;">
										<div class="thumbnail">
											<img class="img-responsive " src="http://localhost/bio/assets/article_in_press/1532759347.png" alt="carousel3" style="width: 100%">
											<hr>
											<div class="pad-x20" style="text-align:center">
											<h2>SAVE LIFE ADOPT A PET</h2>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 " style="padding:20px 10px;">
										<div class="thumbnail">
											<img class="img-responsive " src="http://localhost/bio/assets/article_in_press/1532759347.png" alt="carousel3" style="width: 100%">
											<hr>
											<div class="pad-x20" style="text-align:center">
											<h2>SAVE LIFE ADOPT A PET</h2>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 " style="padding:20px 10px;">
										<div class="thumbnail">
											<img class="img-responsive " src="http://localhost/bio/assets/article_in_press/1532759347.png" alt="carousel3" style="width: 100%">
											<hr>
											<div class="pad-x20" style="text-align:center">
											<h2>SAVE LIFE ADOPT A PET</h2>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
											</div>
										</div>
									</div>
									
										
								</div>
								
							</div>
						   
							
							<div class="item">
								<img src="http://localhost/bio/assets/article_in_press/1532759347.png" alt="carousel3" style="width: 100%">
								<div class="carousel-caption">
									<div class="row">
									  
										<div class="col-md-12">
											<h2>ANIMALS NEED THE SUPPORT</h2>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
											<br />
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Controls -->
						<!--<a class="left carousel-control" href="#theme-carousel" role="button" data-slide="prev">
							<div class="carousel-control-arrow">&#8249;</div>
						</a>
						<a class="right carousel-control" href="#theme-carousel" role="button" data-slide="next">
							<div class="carousel-control-arrow">&#8250;</div>
						</a>
    </div>
		</div>-->
		
          
        </div><!--property container-->
		
		
		
		<!-- indexing-->
		<br>
		
		<div class="row" style="background-color:#00bcd4;;color:#fff">
            <div class="col-md-12">
				 <div class="video-block categories-tabs" style="margin-top:0px;"> 
					<h2 class="video-block__title text-white" style="text-align: center;padding:20px 5px;">We are <strong> Indexed in…</strong></h2>
						<marquee behavior="scroll" >
							 <div class="marquee-with-options" style="height:115px;"><div style="width: 100000px; margin-left: 0px; animation: 33.8737s linear 0s infinite normal none running marqueeAnimation-35405920;" class="js-marquee-wrapper"><div class="js-marquee" style="margin-right: 6px; float: left;">	
          <ul data-wow-duration="2s" class="nav nav-tabs wow bounceInRight" style="width: 100%; visibility: visible; animation-duration: 2s; animation-name: bounceInRight;">
	    
	                      <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Genamics" src="http://www.texilajournal.com/thumbs/journalindex/Genamics.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Academia.edu" src="http://www.texilajournal.com/thumbs/journalindex/Academia.edu.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="ACademic Krey" src="http://www.texilajournal.com/thumbs/journalindex/ACademic-Krey.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="IARC" src="http://www.texilajournal.com/thumbs/journalindex/IARC.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="I2OR" src="http://www.texilajournal.com/thumbs/journalindex/i2or.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Research Journal Impact Factor" src="http://www.texilajournal.com/thumbs/journalindex/RJIF.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Google Scholar" src="http://www.texilajournal.com/thumbs/journalindex/Google-Scholar.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="GIF" src="http://www.texilajournal.com/thumbs/journalindex/c_15.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Tei" src="http://www.texilajournal.com/thumbs/journalindex/c_14.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Inno Space" src="http://www.texilajournal.com/thumbs/journalindex/c_13.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="SIS" src="http://www.texilajournal.com/thumbs/journalindex/c_12.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Pak Academic" src="http://www.texilajournal.com/thumbs/journalindex/c_11.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="OAJI" src="http://www.texilajournal.com/thumbs/journalindex/c_10.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="JIFactor" src="http://www.texilajournal.com/thumbs/journalindex/c_9.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="International society" src="http://www.texilajournal.com/thumbs/journalindex/c_8.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="IISS" src="http://www.texilajournal.com/thumbs/journalindex/c_7.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="ESJI" src="http://www.texilajournal.com/thumbs/journalindex/c_6.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Research Bib" src="http://www.texilajournal.com/thumbs/journalindex/c_5.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Open Access" src="http://www.texilajournal.com/thumbs/journalindex/c_4.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Jour Infortec" src="http://www.texilajournal.com/thumbs/journalindex/c_3.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="DRJI" src="http://www.texilajournal.com/thumbs/journalindex/c_2.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="International Scientific Indexing" src="http://www.texilajournal.com/thumbs/journalindex/IMF.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Cosmos" src="http://www.texilajournal.com/thumbs/journalindex/c_1.jpg" class="img-responsive" width="200" height="100"></div></li>
                 
          </ul>
          </div><div class="js-marquee" style="margin-right: 6px; float: left;">	
          <ul data-wow-duration="2s" class="nav nav-tabs wow bounceInRight" style="width: 100%; visibility: visible; animation-duration: 2s; animation-name: bounceInRight;">
	    
	                      <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Genamics" src="http://www.texilajournal.com/thumbs/journalindex/Genamics.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Academia.edu" src="http://www.texilajournal.com/thumbs/journalindex/Academia.edu.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="ACademic Krey" src="http://www.texilajournal.com/thumbs/journalindex/ACademic-Krey.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="IARC" src="http://www.texilajournal.com/thumbs/journalindex/IARC.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="I2OR" src="http://www.texilajournal.com/thumbs/journalindex/i2or.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Research Journal Impact Factor" src="http://www.texilajournal.com/thumbs/journalindex/RJIF.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Google Scholar" src="http://www.texilajournal.com/thumbs/journalindex/Google-Scholar.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="GIF" src="http://www.texilajournal.com/thumbs/journalindex/c_15.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Tei" src="http://www.texilajournal.com/thumbs/journalindex/c_14.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Inno Space" src="http://www.texilajournal.com/thumbs/journalindex/c_13.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="SIS" src="http://www.texilajournal.com/thumbs/journalindex/c_12.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Pak Academic" src="http://www.texilajournal.com/thumbs/journalindex/c_11.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="OAJI" src="http://www.texilajournal.com/thumbs/journalindex/c_10.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="JIFactor" src="http://www.texilajournal.com/thumbs/journalindex/c_9.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="International society" src="http://www.texilajournal.com/thumbs/journalindex/c_8.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="IISS" src="http://www.texilajournal.com/thumbs/journalindex/c_7.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="ESJI" src="http://www.texilajournal.com/thumbs/journalindex/c_6.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Research Bib" src="http://www.texilajournal.com/thumbs/journalindex/c_5.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Open Access" src="http://www.texilajournal.com/thumbs/journalindex/c_4.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Jour Infortec" src="http://www.texilajournal.com/thumbs/journalindex/c_3.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="DRJI" src="http://www.texilajournal.com/thumbs/journalindex/c_2.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="International Scientific Indexing" src="http://www.texilajournal.com/thumbs/journalindex/IMF.jpg" class="img-responsive" width="200" height="100"></div></li>
                                <li class="list-clients__itema" style="border:none;background:rgba(0, 0, 0, 0);"><div class="nav__inner" style="border:none;"><img style="height:100px;border:4px solid #000;" alt="Cosmos" src="http://www.texilajournal.com/thumbs/journalindex/c_1.jpg" class="img-responsive" width="200" height="100"></div></li>
                 
          </ul>
          </div></div></div> 
	    <br>
							   
							   </marquee>
				     <div class="video-block__subtitle" style="text-align: center;">Indexation of a journal is considered a reflection of its quality. And Increase the visibility thereby promoting their increased usage and impact.</div>

				</div>
			</div>
		</div>
		
		
