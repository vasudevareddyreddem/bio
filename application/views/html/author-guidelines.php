      
        <div class="divide60"></div>
        <div class="container " >
            <div class="row">
           <div class="col-md-8">
		  
                <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
					
					<h3 class="">Author   
						<span class="text-success">Guidelines</span> 
					</h3>
					<div class="lis-sty-none">
					<ul>
						<li>Download - Cover Letter</li>
						<li>Download - Original Research Manuscript Template</li>
						<li>Download - Review Manuscript Template</li>
						<li>Download - Case Report Manuscript Template</li>
						<li>Download - Clinical Images Manuscript Template</li>
						<li>Download - Short Communication Manuscript Template</li>
						<li>Download - Editorial Manuscript Template</li>
						<li>Download - Special Issue Manuscript Template</li>
						</ul>
					</div>
					<br>
					<h4 class="">   Note :
					</h4>
					<div class="lis-sty-none">
						<p>Each submission must contain a cover letter and a Manuscript document.</p>
					</div><br>
					<h4 class="">   Submissions :
					</h4>
					<div class="lis-sty-none">
						<p>All the articles must be submitted to the email: submissions@bibliotics.org. All the manuscripts submitted should be in the Word (docx, doc format) or PDF format. There is no page limit concerned to the length of the manuscript.</p>
					</div><br>
					<h4 class="">   Peer Review Processing :
					</h4>
					<div class="lis-sty-none">
						<p>All the articles submitted will undergo double blind peer review processing to meet the international standards. The editor handles the complete editorial process of the articles and peer reviewers remain anonymous to the authors. Editor decisions are strictly followed for quality publications.</p>
					</div><br>
					<h4 class="">   Quality Control :
					</h4>
					<div class="lis-sty-none">
						<p>Our quality control team will help to analyze the quality of the manuscripts as per international standards. Plagiarism is a crime, thus avoid plagiarism as we aim to harbor the Journal free from the malpractice.</p>
					</div>
					
                   
                </div>
				
					
				</div>
		   <div class="col-md-4 mt20">
		    <div id="myCarousel" class="carousel slide " data-ride="carousel">
                        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                            
                 <?php if(isset($flyers_list)&& count($flyers_list)>0){ ?>
				
						<?php $count=1;foreach($flyers_list as $list){ ?>
							<?php if($count==1){ ?>
									<div class="item active">
									   <img src="<?php echo base_url('assets/flyers_img/'.$list['fly_image']); ?>">
										<div class="carousel-caption">
										<p> 
										<a class="btn btn-primary" href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>">
									   <?php echo isset($list['title'])?$list['title']:''; ?></a></p>
														
										</div>
									</div>
							<?php }else{ ?>
									<div class="item">
									   <img src="<?php echo base_url('assets/flyers_img/'.$list['fly_image']); ?>">
										<div class="carousel-caption">
										<p> 
										<a class="btn btn-primary" href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>">
									   <?php echo isset($list['title'])?$list['title']:''; ?></a></p>
														
										</div>
									</div>
							<?php } ?>
						
						<?php $count++;} ?>
					<?php } ?>
        
                
   			</div><!-- End Carousel Inner -->
   						
   			<ul class="list-group col-md-3 carousel-indicators">
                 <?php if(isset($flyers_list)&& count($flyers_list)>0){ ?>
					<?php $cnt=1;foreach($flyers_list as $list){ ?>
							<?php if($count=1){ ?>
								<li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" class="active"></li>
							<?php }else{ ?>
							        <li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" ></li>

							<?php } ?>
					
					<?php $cnt++;} ?>
				<?php } ?>
               
    		</ul>
        </div><br>
   <div class="sidebar side-bar right-sidebar">
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">List  of journals</h3>
         <div class="cp-newsletter-holder" id="pubmed">
            <marquee class="pubmed-articles" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" direction="up" scrollamount="2" style="padding: 10px 0px 10px 0px;height: 200px;background: #f5f5f5;overflow:hidden;">
              <?php if(isset($journals_list)&& count($journals_list)>0){ ?>
					<?php foreach($journals_list as $list){ ?>
							
					   <ul>
						  <li style="padding:0px 0px 0px 10px">
							 <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
							 <a href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>" target="_blank" style=" color:#05658F; text-decoration:none; padding:0px; margin:0px; font-weight:normal"><?php echo isset($list['title'])?$list['title']:''; ?></a><br>
						  </li>
					   </ul>
					   <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
						  <span class="" style="color: #05658F; text-decoration: none; font-weight: bold;"> <i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>"> view</a></span>
					   </p>
					   <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
					   
				<?php } ?>
			<?php } ?>
            </marquee>
            
         </div>
      </div>

  
   </div>
</div>


            </div>
          
        </div><!--property container-->
        <div class="divide40"></div>

       
       
        
         <div class="divide40"></div>
        
         
         
         
         <div class="search-filter">
            <div class="container">
                    <div class="row">
                       
                       <div class="col-md-10 col-xs-12">
                           <h3>Bibliotics Journals</h3>
                           <p>Bibliotics Journals is an emerging scientific online open access publisher keeping a goal to serve professional and academic communities in latest research discoveries and developments.</p>
                       </div>  
                       <div class="col-md-2 col-xs-12 text-center padding_0">
                           <a href="<?php echo base_url('contactus'); ?>" class="btn btn-red btn-lg btn-block ">CONTACT US</a>
                       </div>
                       <!--  <div class="col-md-3 col-sm-6 margin20">
                            <a href="#" class="btn btn-red btn-lg btn-block"><i class="fa fa-search"></i>Search</a>
                        </div> -->
                    </div>
               
            </div>

        </div>
		<script>
	$(document).ready(function(){
		$("#readmore1").click(function(){
			$("#readexp").toggle();
		});
	});
</script>