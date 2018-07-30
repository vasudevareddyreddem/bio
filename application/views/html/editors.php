      
        <div class="divide60"></div>
        <div class="container " >
            <div class="row">
           <div class="col-md-8">
		  
                <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  
					<br>
					<h3 class="">Editor  
						<span class="text-success">Guidelines</span> 
					</h3>
					
					<p >The Editors greatly contribute to the Journal prestige and consistently improve the Journal standards by handling thorough peer review. It is very important for the editor to choose the right reviewer for the enhancement of the manuscript quality. Review comments are considered, however the Editor’s decision remains final. All papers submitted follow peer review processing and it is the Editor’s responsibility to provide decision based on novelty and quality. The Editor should determine whether a submitted manuscript is appropriate for the journal. 
					</p>
					<br>
					<h4 class="">Assigning Reviewers:   
					</h4>
					<p>
					The Editor first evaluates the manuscripts received from the Editorial office. In exceptional cases where the manuscripts remain outstanding which is usually rare, the Editor may accept at this stage. Those rejected at this stage are either done so for plagiarism and/or scientifically flawed. The Editors need to provide the reasons to reject a manuscript as they will be returned to authors. If the author mentions any suggested peer reviewers, they need to be considered first. Editors should guide reviewers with the Reviewer guidelines and the Review form. The received review comments will be directed to the Editor for final decision by the Editorial office.
					</p>
					
					<br>
					<h4 class="">   Timelines
					</h4>
					<div class="lis-sty-none">
					<ul>
					<li> Editor to assign Reviewer: 3 days </li>
					<li>  Reviewer to provide comments: 10 days  </li>
					<li>  Editor to provide final decision: 3 days  </li>
					</ul>
					</div>
					<br>
					<h4 class="">Decision Making:   
					</h4>
					<p>The decision made should be unbiased and the Editor will determine the disposition of the manuscript, based on remarks of the reviewers, and the Editor’s own assessment of the manuscript. In rare cases authors are allowed to contact the Editor if the amendments are unclear. The Editor should be sure about not disclosing the reviewer details. Punctuality in time should be maintained.
					</p><br>
					<h4 class="">Major Revision:   
					</h4>
					<p>
					Major revisions are sent back to the author and the time line provided will be 10 days for revision. Review comments along with if any Editor comments will be sent to the authors for revision. Minor Revision: Minor revisions are sent back to the author and the time line provided will be 5-7 days for revision.Review comments along with if any Editor comments will be sent to the authors for revision.
					</p>
					<h4 class="">Accept with no changes:   
					</h4>
					<p>
Manuscripts that are accepted without changes are accepted if the Editor accepts to publish. Editor’s Contribution to the Journal: The Editor should be active and participate in providing new ideas or suggestions to improve the standards of the Journal. The Editor should submit Perspectives (Editorial) twice a year to support the Journal issues and also provide an impact of the advancements happening around the globe as per their research interests. The Editor should encourage publication of peer-reviewed research, and technological advances in the path of enlightening new discoveries. The editor should encourage submission of quality articles to the journal by personally recruiting authors, assisting them with outreach, and ensuring the marketing plan is executed. The Editor should recruit high profi le reviewers for reviewer database using multiple sources, e.g., personal recommendations, Web databases, published choice review or anything as such. The Editorial office will always support Editors in any manner required.					</p>
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