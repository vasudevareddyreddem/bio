      
        <div class="divide60"></div>
        <div class="container " >
            <div class="row">
           <div class="col-md-8">
		  
                <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
					<br>
					<h3 class="">Review   
						<span class="text-success">Guidelines</span> 
					</h3>
					
					<p >Reviewers play a vital role in judging the quality of submitted manuscripts along with the support of Editorial Board Members through Peer-Review process. EB members are requested to handle the submitted manuscripts based on their research expertise. They can accomplish the peer review process themselves; based on their own knowledge and experience or they can assign this task to reviewers. The assigned reviewers are supposed to submit their comments to Editorial office by inclining to one of the below decision, the final decision maker is the assigned EB member. The identity of the reviewers should never be revealed out to the authors at any time either during the process of review or after its publication. The papers should not be assigned to other people without Editors permission. Reviewers comments should support one of the below mentioned acts.

					• Accept • Minor revision • Major revision • Reject 
					</p>
					<br>
					<h3 class="">Reviewer Instructions:   
					</h3>
					
					<br>
					<h4 class="">Unbiased Comments:   
					</h4>
					<p>The Peer review comments provided by reviewers must be transparent, unbiased and should not involve personal or professional conflicts.
					</p><h4 class="">Quality of article:   
					</h4>
					<p>The comments given reviewer must relevant and support to increase the quality of manuscript. Minor corrections like grammatical errors can be corrected by reviewer itself. Be specific and detail while providing comments.
					</p>
					<h4 class="">Timely decision:   
					</h4>
					<p>Based on the publication date of the manuscript the comments from reviewer are expected to be within the time period assigned by the Editorial office. The review period allotted for reviewer is ten days. Reviewers can request editorial office if they need to extend the review period.
Timeline: 10 days for Research/Review/Case Reports

07 days for Short Reports
					</p><h4 class="">Confidential Comments:   
					</h4>
					<p>Given comments strictly confidential should not let to others (Authors) except Editorial office. Never reveal the assigned paper’s results or videos/images or any of the supplementary material to nonreviewers. Reviewers are requested not to use any information of the assigned data unless they have the written statement of the authors.
					</p><h4 class="">Propose new idea::   
					</h4>
					<p>Reviewer can suggest new ideas to authors to insert in the manuscript which would enhance quality of the article.

					Points to be noted 
					</p>
					<div class="lis-sty-none">
					<ul>
					<li> Infrequently you will be assigned to review submissions from non English native language authors, in that cases, it will also be imperative for a reviewer to differentiate between the quality of the manuscript and the quality of the ideas that the manuscript put across. These manuscripts may be good even if they are not articulated well.</li>
					<li>  Please mention the proper and reasons to reject the article like what are the weak points and the area to be improved further. </li>
					<li>  Any kind of conflicts can be resolved at editorial office • Reviewers would be provided with benefits like concession on processing fee while submitting the manuscript  </li>
					</ul>
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