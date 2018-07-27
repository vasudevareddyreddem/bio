<div class="content-wrapper">
<section class="content-header">
      <h1>
        Edit Special Issue 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"> Edit Special Issue</li>
      </ol>
    </section>
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Edit Special Issue</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<div style="padding:20px;">
            <form id="addflyer" onsubmit="return checkvalidation();" method="post" class="" action="<?php echo base_url('special-issue/editpost'); ?>" enctype="multipart/form-data">
					<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
				<input type="hidden" id="issue_id" name="issue_id" value="<?php echo isset($details['id'])?$details['id']:''; ?>">

      
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
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Title</label>
								<div class="">
									<input type="text" class="form-control" name="title" id="title" value="<?php echo isset($details['title'])?$details['title']:''; ?>" placeholder="Enter Title" />
								</div>
							</div>
                        </div>
						
						<div class="col-md-12">
							<div class="form-group">
								<label class=" control-label">Details</label>
								<div class="">
									<textarea class="summernote" name="details" rows="2" cols="80" ><?php echo isset($details['details'])?$details['details']:''; ?>
                                            
								</textarea>
								</div>
							</div>
                        </div>
						
						
						
						
					
						<div class="clearfix">&nbsp;</div>
						  <div class="form-group">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
								<a href="<?php echo base_url('special-issue/lists'); ?>" type="submit" class="btn btn-warning" >Cancel</a>
                                
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
 <script>
    
 $(function () {
    CKEDITOR.replace('details');
    $(".textarea").wysihtml5();
  });
  </script>
  <script type="text/javascript">
   
  
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
			details: {
                validators: {
					notEmpty: {
						message: 'Abstract is required'
					}
				}
            }
            }
        })
     
});

</script>

