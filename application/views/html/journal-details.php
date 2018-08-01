     
	   <style>
  .html-tabs li {
	  display:block;
	  float:none;
	  border-bottom:1px solid #fff;
	  margin:20px 0px;
	  background:#ddd;
  } 
  .html-tabs li > a {

	  border:0px;
  }
  .my-20{
	  margin:20px 0px;
  }
  </style>
	 <?php if(isset($homapage_banners) && count($homapage_banners)>0){ ?>
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
							<img src="<?php echo base_url('assets/journal_banner_pics/'.$list['baneer_image']); ?>" alt="<?php echo isset($list['org_image'])?:''; ?>"  class="slide-image"/>
							<div class="bs-slider-overlay"></div>

							<div class="container">
								<div class="row">
									<!-- Slide Text Layer -->
									<div class="slide-text slide_style_center">
										<h1 class="fadeInDown wow animated" data-wow-duration="1000ms" data-wow-delay="1000ms"><?php echo isset($list['title'])?$list['title']:''; ?></h1>
									</div>
								</div>
							</div>
						</div>
				<?php }else{ ?>
						<div class="item">

							<!-- Slide Background -->
							<img src="<?php echo base_url('assets/journal_banner_pics/'.$list['baneer_image']); ?>" alt="<?php echo isset($list['org_image'])?:''; ?>"  class="slide-image"/>
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
		 <?php } ?>
		<div class="container " >
            <div class="row">
				<div class=" col-md-3">
							<ul class="nav nav-tabs html-tabs">
								<li class="active"><a onclick="show_boardmembers(1);" href="#tab1primary" data-toggle="tab">Home</a></li>
								<li><a onclick="show_boardmembers(1);" href="#tab6primary" data-toggle="tab">Instructions</a></li>

								<li><a onclick="show_boardmembers(0);" href="#tab2primary" data-toggle="tab">Editorial board</a></li>
								<li><a onclick="show_boardmembers(1);" href="#tab3primary" data-toggle="tab">Article In Press</a></li>
								<li><a onclick="show_boardmembers(1);" href="#tab4primary" data-toggle="tab">Current Issue</a></li>
								<li><a onclick="show_boardmembers(1);" href="#tab5primary" data-toggle="tab">Archive</a></li>
								<li><a onclick="show_boardmembers(1);" href="#tab7primary" data-toggle="tab">Previous Issue</a></li>
								
							</ul>
					</div>
				<div class="col-md-9">
					
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1primary">
							 <!--<div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">-->
							 <div class=" Welcome_txt wow animated  ">
                  
					<br>
					<?php echo isset($journals_details['description'])?$journals_details['description']:''; ?>
					<div class="lis-sty-none">
					<?php echo isset($journals_details['key_words'])?$journals_details['key_words']:''; ?>
					</div>
					
					
					
                   
                </div>
							
							</div>
							<div class="tab-pane fade" id="tab2primary">
								<div class="row">
           
			
            
			<!-- Team member -->
			<?php if(isset($board_members) && count($board_members)>0){ ?>
					<?php foreach($board_members as $list){ ?>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip" style="width:100%;" ontouchstart="this.classList.toggle('hover');">
							<div class="mainflip">
								<div class="frontside">
									<div class="card">
										<div class="card-body text-center">
											<p>
											<?php if($list['image']!=''){ ?>
											<img class=" img-fluid" src="<?php echo base_url('assets/editors_pics/'.$list['image']); ?>" alt="<?php echo isset($list['name'])?$list['name']:''; ?>">
											<?php }else{?>
													<img class=" img-fluid" src="<?php echo base_url('assets/vendor/img/board.png'); ?>" alt="board member">
												<?php } ?>
											</p>
											<h4 class="card-title"><?php echo isset($list['name'])?$list['name']:''; ?></h4>
											<p class="card-text"><?php echo substr($list['biography'],0,160); ?>...</p>
											
										</div>
									</div>
								</div>
								<div class="backside" style="width:100%;">
									<div class="card">
										<div class="card-body  mt-4">
										<table class="table table-bordered">
										<tr>
											<th>Name</th>
											<td class="text-left" ><?php echo isset($list['name'])?$list['name']:''; ?></td>
										</tr>
										<tr>
											<th>University</th>
											<td class="text-left"><?php echo isset($list['university'])?$list['university']:''; ?> </td>
										</tr>
										<tr>
											<th>Country</th>
											<td class="text-left"><?php echo isset($list['country'])?$list['country']:''; ?> </td>
										</tr>
										<!--<tr>
											<th>Position</th>
											<td class="text-left"><?php echo isset($list['position'])?$list['position']:''; ?> </td>
										</tr>-->
										</table>
											<!--<h4 class="card-title ">Name</h4>
											<div class=""><?php echo isset($list['name'])?$list['name']:''; ?> </div>
											<h4 class="card-title ">University</h4>
											<div class=""><?php echo isset($list['university'])?$list['university']:''; ?> </div>
											<h4 class="card-title ">Country</h4>
											<div class=""><?php echo isset($list['country'])?$list['country']:''; ?> </div>-->
											
											<div >
											<!--<a href="<?php echo base_url('journals/editors-profile/'.base64_encode($list['j_e_id'])); ?>" class="btn btn-success btn-sm text-center text-white">View More</a>
											--></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			
				<?php } ?>
			<?php }else{ ?>
			Coming Soon
			<?php } ?>
            <!-- ./Team member -->
           
          

        </div>
							</div>
							<div class="tab-pane fade" id="tab3primary">
							
				<?php if(isset($article_list)&& count($article_list)>0){ ?>
				
				<?php foreach($article_list as $list){ ?>
				<div class="col-md-6 mt20">
				
		
                    <article class="blog-grid margin-b-10 article">
                                 <div class="blog-grid-box-shadow">
                                    <div class="blog-grid-content text-center" style="padding:20px;">
										<em style="font-size:20px"><?php echo isset($list['article_type'])?$list['article_type']:''; ?></em><br>
										<em style="font-size:20px"><?php echo isset($list['author_name'])?$list['author_name']:''; ?></em><br>
										<em style="font-size:20px"><?php echo date('M d ,Y',strtotime(htmlentities($list['create_at'])));?></em>
										<div class="clearfix">&nbsp;</div>
										<div style="position:relative ;" class="">
												<div style="width:300px;border-bottom:2px solid #000;margin:0 auto"> &nbsp;</div>
												<div style="position:absolute;background:#000;width:20px;height:20px; border-radius:50%;border:5px solid #fff;top:10px;left:50%">
											</div>
											<div class="clearfix">&nbsp;</div>
                                       
									 </div>
										
                                        <h4>
										 <a class="blog-grid-title-link" style="color:#00bcd4" href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>"><?php echo isset($list['title'])?$list['title']:''; ?></a></h4>
                                        
									                                        <div class="clearfix">&nbsp;</div>

                                   <div class="blog-grid-supplemental">
										 
 											<a target="_blank" href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" class="btn btn-warning  text-white" style="font-size:12px;" style="border-radius:5px;border-color:#555;color:#555">Abstract</a> 
											<a target="_blank" href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" class="btn btn-success text-white" style="border-radius:5px;border-color:#555;color:#555">Full Text</a>
							
										<a href="<?php echo base_url('assets/article_in_press/'.$list['pdf_file']); ?>" target="_blank" class="btn btn-danger text-white" style="border-radius:5px;border-color:#555;color:#555">Pdf</a>
										<div class="clearfix">&nbsp;</div>
										<div style="width:auto;height:250px;">
										<img  class="img-responsive " src="<?php echo base_url('assets/article_in_press/'.$list['image']); ?>" alt="<?php echo isset($list['title'])?$list['title']:''; ?>">
										</div>
										
										
                                     </div>
                                     </div>
                                     </div>
                                
                            </article>
				 
					 
 					 
                </div>
				
				<?php } ?>
				<?php }else{ ?>
				Coming Soon
				<?php } ?>
				
				
							
							
							</div>
							<div class="tab-pane fade" id="tab4primary">
								<?php if(isset($current_issue_list)&& count($current_issue_list)>0){ ?>
									<?php foreach($current_issue_list as $list){ ?>
										<div class="col-md-6 mt20">
				
		
                    <article class="blog-grid margin-b-10 article">
                                 <div class="blog-grid-box-shadow">
                                    <div class="blog-grid-content text-center" style="padding:20px;">
										<em style="font-size:20px"><?php echo isset($list['article_type'])?$list['article_type']:''; ?></em><br>
										<em style="font-size:20px"><?php echo isset($list['author_name'])?$list['author_name']:''; ?></em><br>
										<em style="font-size:20px"><?php echo date('M d ,Y',strtotime(htmlentities($list['create_at'])));?></em>
										<div class="clearfix">&nbsp;</div>
										<div style="position:relative ;" class="">
												<div style="width:300px;border-bottom:2px solid #000;margin:0 auto"> &nbsp;</div>
												<div style="position:absolute;background:#000;width:20px;height:20px; border-radius:50%;border:5px solid #fff;top:10px;left:50%">
											</div>
											<div class="clearfix">&nbsp;</div>
                                       
									 </div>
										
                                        <h4>
										 <a class="blog-grid-title-link" style="color:#00bcd4" href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>"><?php echo isset($list['title'])?$list['title']:''; ?></a></h4>
                                        
									                                        <div class="clearfix">&nbsp;</div>

                                   <div class="blog-grid-supplemental">
										 
 											<a target="_blank" href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" class="btn btn-warning  text-white" style="font-size:12px;" style="border-radius:5px;border-color:#555;color:#555">Abstract</a> 
											<a target="_blank" href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" class="btn btn-success text-white" style="border-radius:5px;border-color:#555;color:#555">Full Text</a>
							
										<a href="<?php echo base_url('assets/article_in_press/'.$list['pdf_file']); ?>" target="_blank" class="btn btn-danger text-white" style="border-radius:5px;border-color:#555;color:#555">Pdf</a>
										<div class="clearfix">&nbsp;</div>
										<div style="width:auto;height:250px;">
										<img  class="img-responsive " src="<?php echo base_url('assets/article_in_press/'.$list['image']); ?>" alt="<?php echo isset($list['title'])?$list['title']:''; ?>">
										</div>
										
										
                                     </div>
                                     </div>
                                     </div>
                                
                            </article>
				 
					 
 					 
                </div>

										
										<?php } ?>
								<?php }else{ ?>
								Coming Soon
								<?php }?>
							</div>
							<div class="tab-pane fade" id="tab5primary">
								<div class="row">
								<?php if(isset($archive_list) && count($archive_list)>0){ ?>
										<?php $cnt=1;foreach($archive_list as $list){ ?>
										
										<div class="sidebar side-bar right-sidebar">
												<div class="widget sidebar-newsletter">
												 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														 <div class="panel panel-default">
														<div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo<?php echo $cnt; ?>" aria-expanded="false" aria-controls="collapseTwo">
												<h4 class="panel-title">
													<a class="collapsed" role="button" >
													  <?php echo isset($list['year'])?$list['year']:''; ?>
													</a>
												</h4>
											</div>
											<div id="collapseTwo<?php echo $cnt; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
												<div class="panel-body">
												   <div class="">
													  <ul class="list-group">
														<?php foreach($list['issues_list'] as $lis){ ?>
														<a target="_blank" href="<?php echo base_url('journals/archive/'.base64_encode($lis['id'])); ?>">
															<div class="col-md-4">
																<img style ="" class= "img-responsive" src="<?php echo base_url('assets/issues/'.$lis['image']); ?>" alt="<?php echo isset($lis['year'])?$lis['year']:''; ?>">
																<div class="text-archive-img">
																	<h3 class=""><?php echo isset($lis['number'])?$lis['number']:''; ?>    
																		<span class="text-success"> <?php echo isset($lis['year'])?$lis['year']:''; ?></span> 
																	</h3>
																</div>
															</div></a>
														<?php } ?>
													  </ul>
													</div>
												</div>
											</div>
											</div>
												</div>
												</div>
											</div>
											
											
											<?php $cnt++;} ?>
									<?php }else{ ?>
									Coming Soon
										<?php }?>
									
									
								</div>
							</div>
							<div class="tab-pane fade" id="tab6primary"><?php echo isset($article_process_fee['table'])?$article_process_fee['table']:'Coming Soon'; ?>
							</div>
							<div class="tab-pane fade" id="tab7primary">
							<?php echo isset($special_issue['details'])?$special_issue['details']:'Coming Soon'; ?>
							</div>
							
						</div>
					</div>
				</div>
				
		</div>
				
			</div>
		</div>
       <script>
	   function show_boardmembers(val){
		   if(val==0){
			  $('#board_member').show(); 
			  $('#article_latest').hide(); 
		   }else{
			   $('#board_member').hide(); 
			  $('#article_latest').show(); 
		   }
		   
	   }
       </script>
<script>
	function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>