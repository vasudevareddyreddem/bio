<div class="content-wrapper">
<section class="content-header">
      <h1>
        Edit Article procedures 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"> Edit Article procedures</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Edit Article procedures</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addflyer" onsubmit="return checkvalidation();" method="post" class="" action="<?php echo base_url('article-procedures/editpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
										<input type="hidden" id="a_id" name="a_id" value="<?php echo isset($details['id'])?$details['id']:''; ?>">

					
      
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Category</label>
								<div class="">
									 <select class="form-control" id="category" onchange="get_gournals(this.value);" name="category">
									  <option value="">Select</option>
									 <?php foreach($journals_category_list as $list){ ?>
										 <?php if($details['journal_cat_id']==$list['c_id']){ ?>
											<option selected value="<?php echo $list['c_id']; ?>"><?php echo $list['category']; ?></option>
										 <?php }else{ ?>
									 		<option value="<?php echo $list['c_id']; ?>"><?php echo $list['category']; ?></option>

											<?php } ?>
									<?php } ?>
									</select>
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Select Journal</label>
								<div class="">
									 <select class="form-control" id="journal" name="journal">
									  <option value="">Select</option>
									 <?php foreach($journals_list as $list){ ?>
									 <?php if($details['journal_id']==$list['j_id']){ ?>
										<option selected value="<?php echo $list['j_id']; ?>"><?php echo $list['title']; ?></option>
									 <?php }else{ ?>
									 		<option value="<?php echo $list['j_id']; ?>"><?php echo $list['title']; ?></option>

									 <?php } ?>

									<?php } ?>
									</select>
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Years of article </label>
								<div class="">
									 <select class="form-control" id="year_of_article" name="year_of_article">
									  <option value="">Select</option>
									  <?php
								  $currently_selected = date('Y'); 
								  $earliest_year = 1950; 
								  $latest_year = date('Y');  ?>

									<?php foreach ( range( $latest_year, $earliest_year ) as $i ) { ?>
									 <?php if($details['year_of_article']==$i){ ?>
											<option selected value="<?php echo $i; ?>"><?php echo $i; ?></option>
									 <?php }else{ ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									 <?php } ?>
									<?php } ?>
									</select>
									
								
																	
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Procedures Category</label>
								<div class="">
									 <select class="form-control" id="procedures_category" name="procedures_category">
									  <option value="">Select</option>
									  <option value="Speaker Abstract" <?php if($details['procedures_category']=='Speaker Abstract'){ echo "selected"; } ?>>Speaker Abstract</option>
									  
									  </select>
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Conference Title</label>
								<div class="">
									<input type="text" id="conference_title" name="conference_title" class="form-control" value="<?php echo isset($details['conference_title'])?$details['conference_title']:''; ?>"  placeholder="Enter Conference Title" ></div>
							</div>
                        </div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Title</label>
								<div class="">
									<input type="text" class="form-control" name="title" id="title" value="<?php echo isset($details['title'])?$details['title']:''; ?>" placeholder="Enter Title" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Author Name</label>
								<div class="">
									<input type="text" class="form-control" name="author_name" value="<?php echo isset($details['author_name'])?$details['author_name']:''; ?>" id="author_name" placeholder="Enter Author Name" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">DOI Url</label>
								<div class="">
									<input type="text" id="doi_url" name="doi_url" class="form-control" value="<?php echo isset($details['doi_url'])?$details['doi_url']:''; ?>" placeholder="Enter DOI Url" ></div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Select PDF File</label>
								<div class="">
									<input type="file" class="form-control" name="pdf_file" id="pdf_file" />
								</div>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label class=" control-label">Select Image</label>
								<div class="">
									<input type="file" class="form-control" name="image" id="image" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">SEO URL</label>
								<div class="">
									<input type="text" class="form-control" name="seo_url" value="<?php echo isset($details['seo_url'])?$details['seo_url']:''; ?>" id="seo_url" placeholder="Enter URl" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">SEO Title</label>
								<div class="">
									<input type="text" class="form-control" name="seo_title" value="<?php echo isset($details['seo_title'])?$details['seo_title']:''; ?>" id="seo_title" placeholder="Enter SEO Title" />
								</div>
							</div>
                        </div>
						
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">SEO Keywords</label>
								<div class="">
									<input type="text" class="form-control" name="seo_keyword" value="<?php echo isset($details['seo_keyword'])?$details['seo_keyword']:''; ?>" id="seo_keyword" placeholder="Enter SEO Keywords" />
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">SEO Description</label>
								<div class="">
									<textarea  class="form-control" name="seo_description" value="" id="seo_description" placeholder="Enter Description" ><?php echo isset($details['seo_description'])?$details['seo_description']:''; ?></textarea>
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Abstract</label>
								<div class="">
									<textarea id="abstract" name="abstract" rows="2" cols="80" ><?php echo isset($details['abstract'])?$details['abstract']:''; ?>
                                            
								</textarea>
								</div>
							</div>
                        </div>
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Biography</label>
								<div class="">
									<textarea id="biography" name="biography" rows="2" cols="80" ><?php echo isset($details['biography'])?$details['biography']:''; ?>
                                            
								</textarea>
								</div>
							</div>
                        </div>
						
						
						
					
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
								<a href="<?php echo base_url('article-procedures/lists'); ?>" type="submit" class="btn btn-warning" >Cancel</a>
                                
                            </div>
                        </div>
						
						
                    </form>
					<div class="clearfix">&nbsp;</div>
          </div>
          </div>
          <!-- /.box -->

         

        </div>
      
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section> 
</div>
  <script type="text/javascript">
  $(function () {
    CKEDITOR.replace('biography');
    $(".textarea").wysihtml5();
  }); 
  $(function () {
    CKEDITOR.replace('abstract');
    $(".textarea").wysihtml5();
  });
  function checkvalidation(){
	  var id=$('#journal').val();
	  if(id==''){
		  alert('Please select at least one Journal');
		 return false; 
	  }
  }
$(document).ready(function() {
    $('#addflyer').bootstrapValidator({
        
        fields: {
             journal: {
                validators: {
					notEmpty: {
						message: 'Journal is required'
					}
				}
            },
			category: {
                validators: {
					notEmpty: {
						message: 'Category is required'
					}
				}
            },
			year_of_article: {
                validators: {
					notEmpty: {
						message: 'Year of article is required'
					}
				}
            },
			author_name: {
                validators: {
					notEmpty: {
						message: 'Author Name is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Author Name wont allow <> [] = % '
					}
				}
            },article_type: {
                validators: {
					notEmpty: {
						message: 'Article Type is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Article Type wont allow <> [] = % '
					}
				}
            },
			pdf_file: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(pdf)$",
					message: 'Uploaded file is not a valid. Only pdf file are allowed'
					}
				}
            },
			image: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(doc|docx|html)$",
					message: 'Uploaded file is not a valid. Only doc,docx,html file are allowed'
					}
				}
            },
			procedures_category: {
               validators: {
					notEmpty: {
						message: 'Procedures Category is required'
					}
				}
            },
           
			title: {
                validators: {
					notEmpty: {
						message: 'Title is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Title wont allow <> [] = % '
					}
				}
            },
			doi_url: {
                validators: {
					notEmpty: {
						message: 'DOI URL is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'DOI URL wont allow <> [] = % '
					}
				}
            },conference_title: {
                validators: {
					notEmpty: {
						message: 'Conference Title is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Conference Title wont allow <> [] = % '
					}
				}
            },
			url: {
                validators: {
					notEmpty: {
						message: 'Url is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Url wont allow <> [] = % '
					}
				}
            },seo_title: {
                validators: {
					notEmpty: {
						message: 'SEO Title is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'SEO Title wont allow <> [] = % '
					}
				}
            },
			seo_url: {
                validators: {
					notEmpty: {
						message: 'SEO Url is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'SEO Url wont allow <> [] = % '
					}
				}
            },seo_keyword: {
                validators: {
					notEmpty: {
						message: 'SEO Keywords is required'
					}
				}
            },seo_description: {
                validators: {
					notEmpty: {
						message: 'SEO Description is required'
					}
				}
            },research_article: {
                validators: {
					notEmpty: {
						message: 'Research Article is required'
					}
				}
            },
			abstract: {
                validators: {
					notEmpty: {
						message: 'Abstract is required'
					}
				}
            },biography: {
                validators: {
					notEmpty: {
						message: 'Introduction is required'
					}
				}
            }
            }
        })
     
});

</script>

