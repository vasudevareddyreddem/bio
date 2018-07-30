      
        <div class="divide60"></div>
        <div class="container " >
            <div class="row">
           <div class="col-md-8">
		  
                <div class=" Welcome_txt fadeInLeft wow animated  " data-wow-duration="1000ms" data-wow-delay="1000ms">
                  <h3 class="">Open    
						<span class="text-success">Access</span> 
					</h3>
					
					<p >Bibliotics is an independent open-access scientific publisher showcases innovative research and ideas aimed at improving health by linking research and practice to the benefit of society. It is committed to providing a 'peer reviewed' platform to outstanding researchers and scientists to exhibit their findings. It publishes original research, analyses and reviews, news, practice updates and thought-provoking editorials.</p>
					
					<p>Individually and collectively we believe that open access is well aligned with the goals of science, and aim to bring about a change in modern scholarly communications to help facilitate the change toward improved knowledge creation and sharing. Our nonprofit collaboration is driven by the desire to accelerate scientific discoveries and for all content to be open to help disseminate research to a wider readership, gain media attention and demonstrate professional achievement through publication.</p><br>
					
					<h4 class="">Open   
						<span class="text-success">Access Policy</span> 
					</h4>
					<div class="lis-sty-none">
					<ul>
						<p> This journal provides immediate open access to its content on the principle that making research freely available to the public supports a greater global exchange of knowledge.</p>
					</ul>
					<ul>
						<li>BIBLIOTICS is an International, Peer reviewed, Open Access Journal</li>
						<li>Paper publishing process is relatively fast and easy.</li>
						<li>BIBLIOTICS provides individual eCertificate to each author</li>
						<li>Open access journal database for high visibility and promotion of your articles</li>
						<li>Authors can submit the papers at any time by online submission</li>
						<li>Paper will publish immediately in current issue after registration</li>
						<li>BIBLIOTICS accepts original and high quality research and technical papers</li>
						<li>Authors can download their full length paper at any time</li>
						<li>Author’s queries shall be resolved within 24 hours of time</li>
					</ul>
					</div>
					
                   
                </div>
				
					
				</div>
<div class="col-md-4 mt20">
   <div class="sidebar side-bar right-sidebar">
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Latest Updates Scrolling</h3>
         <div class="cp-newsletter-holder" id="pubmed">
            <marquee class="pubmed-articles" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" direction="up" scrollamount="2" style="padding: 10px 0px 10px 0px;height: 200px;background: #f5f5f5;overflow:hidden;">
              <?php if(isset($lastest_updates_list)&& count($lastest_updates_list)>0){ ?>
				
					<?php foreach($lastest_updates_list as $list){ ?>
						
						<ul>
						  <li style="padding:0px 0px 0px 10px">
							 <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
							 <a href="javascript:void(0);" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal"><?php echo isset($list['updates'])?$list['updates']:''; ?></a><br>
						  </li>
					   </ul>
					   <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
						  <span style="color: #05658F; text-decoration: none; font-weight: bold;"><a href="javascript:void(0);" > <?php echo isset($list['title'])?$list['title']:''; ?></a></span>
					  
						 <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>					  
					  
					  
					<?php } ?>
				<?php } ?>
            </marquee>
            
         </div>
      </div>
	   <!-- Widget Start -->
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Submit Manuscript</h3>
         <div class="cp-newsletter-holder">
           <a href="<?php echo base_url('menuscript');?>"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/Medical-Journals.jpg" alt="submit Manuscript"></a>
          </div>
      </div>
      <!-- Widget Start -->
     
      <div class="widget sidebar-newsletter">
         <h3 class="side-title">Upcomong Article Scrolling</h3>
         <div class="cp-newsletter-holder" id="pubmed">
            <marquee class="pubmed-articles" align="top" behavior="scroll" onmouseout="this.start();" onmouseover="this.stop();" direction="up" scrollamount="2" style="padding: 10px 0px 10px 0px;height: 200px;background: #f5f5f5;overflow:hidden;">
               <?php if(isset($article_list)&& count($article_list)>0){ ?>
				
					<?php foreach($article_list as $list){ ?>
					   <ul>
						  <li style="padding:0px 0px 0px 10px">
							 <!--<span style="font-size:15px; font-weight:bold">Global Journal of Addiction & Rehabilitation Medicine</span><br>-->
							 <a href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" style=" color:#000; text-decoration:none; padding:0px; margin:0px; font-weight:normal"><?php echo isset($list['title'])?$list['title']:''; ?></a><br>
						  </li>
					   </ul>
					   <p style="border-bottom:none; color: #05658F; text-decoration: none; font-weight: bold;">
						  <span style="color: #05658F; text-decoration: none; font-weight: bold;">Author Name: <a href="<?php echo base_url('article/view/'.base64_encode($list['a_id']).'/'.$list['url']); ?>" > <?php echo isset($list['author_name'])?$list['author_name']:''; ?></a></span>
					   <p style="border-bottom:1px thin #ff9933; padding-top:0px"></p>
					<?php } ?>
				<?php } ?>
            </marquee>
            
         </div>
      </div>
      <!-- Facebook End --> 
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