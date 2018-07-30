      
        <div class=" bg-success" id="" style="height:100px;">
            <div class="container-fulid ">
                <div class="container padding_top_40">
                    <div class="row">
                      <div class="typography-section">
						  <div class="container label-sty">
							  <span class="head-journ">Journals List</span> &nbsp;&nbsp;
							  
						  </div>
						</div>
                    </div>
                </div>
            </div>
       </div>
       
      
       
       
       
       
       
       <div class="clear"></div>
        <div class="conainer-fulid">
            <div class="container">
                <div class="row">
                
                	<div class="divide-35">
                      <div class="home-doctors  clearfix">
					    <div class="container">
					        <div class="row">
<!-- entry1 -->					<?php if(isset($journals_list) && count($journals_list)>0){ ?>
								<?php foreach($journals_list as $list){ ?>
						            <div class="col-md-4 mt20">
				
		
                    <article class="blog-grid margin-b-10 article" style="padding:20px 10px;">
					<div style="width:auto;height:385px;margin:10px;">
                                	<img class="img-responsive "  src="<?php echo base_url('assets/banner_pics/'.$list['baneer_image']); ?>" alt="<?php echo isset($list['seo_title'])?$list['seo_title']:''; ?>" style="width: 100%">
						</div>
						<hr>
						<div class="pad-x20" style="text-align:center;height:20px;">
						 <h4>
										 <a class="blog-grid-title-link" style="color:#00bcd4" href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>"><?php echo isset($list['title'])?$list['title']:''; ?></a></h4>
                                        
						</div>
																<div class="clearfix">&nbsp;</div>

						  <div class="blog-grid-supplemental" style="text-align:center">
									<a href="<?php echo base_url('journals/view/'.base64_encode($list['j_id']).'/'.$list['seo_url']); ?>" class="btn btn-warning  text-white" style="font-size:12px;" style="border-radius:5px;border-color:#555;color:#555">Read  More</a> 
							 </div>
                                
                         </article>
				 
					 
 					 
                </div>
									
								<?php } ?>
								<?php } ?>


									<div class="visible-sm clearfix margin-gap"></div>
					      </div>
					    </div>
                    <div class="clear"></div>
                    </div>
                    
                </div>
                <!--<div class="divide-35">
                	<div style="text-align:center; font-size:18px;">
                    	<ul class="pagination">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
 
</ul>
                    </div>
                </div>-->
                
            </div>
        </div>
        </div>
        </div>
         
      
        
          <div class="search-filter">
            <div class="container">
                    <div class="row">
                       
                       <div class="col-md-10 col-xs-12">
                           <h3>Bibliotics Journals </h3>
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
	