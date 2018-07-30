<div class="container-contact">
    <div class="container">
	    <div class="page-header" id="contact">
			<h2 class="text-center text-primary">Contact us using the form below</h2>
			<br />
			<div class="row">
				
				<div class="col-md-6">
					  <form id="defaultForm" method="post" class="" action="<?php echo base_url('contactus/post'); ?>">

						<div class="form-group">
							<label for="form-name"> First Name</label>
									<input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter First Name" />
						</div>
						<div class="form-group">
							<label for="form-name"> Last Name</label>
									<input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Last Name" />
						</div>
						<div class="form-group">
							<label for="form-email">Email Address</label>
									<input type="text" class="form-control" name="email" id="email" placeholder="Enter email id" />
						</div>
						<div class="form-group">
							<label for="form-subject">Phone Number</label>
							<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" />
						</div>
						<div class="form-group">
							<label for="form-message">Your Message</label>
							<textarea class="form-control" rows="5" id="message" name="message" id="comment"></textarea>
						</div>
						<div class="clearfix">&nbsp;</div>
						<div class="col-md-6">
						 <div class="form-group">
                            <label class="col-lg-6 control-label" id="captchaOperation"></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="captcha" />
                            </div>
                        </div>
                        </div>
						<button class="btn btn-primary btn-lg" type="submit" style="margin:10px;">Submit</button>
						<br /><br />
					</form>
				 </div>
				 <div class="col-md-6">
					<div class="row col1">
                       <div class="col-xs-3">
                           <i class="fa fa-map-marker" style="font-size:16px;"></i>   Address
                       </div>
                       <div class="col-xs-9">
                       <strong>Bibliotics Journals</strong><br>
                           10039 Sierra Grace Ln, <br> Houston, TX-77089 <br> USA
                       </div>
                   </div>
                   
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-phone"></i>   Phone
                        </div>
                        <div class="col-sm-9">
                            +1-832-708-3646
                        </div>
                    </div>
                    
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-envelope"></i>   Email
                        </div>
                        <div class="col-sm-9">
                        <a href="mailto:contact@bibliotics.com">contact@bibliotics.com</a> 
                        </div>
                    </div><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3470.205254239564!2d-95.21423768489599!3d29.56863068205784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86409a6c8c15e62b%3A0xdc9fef5ab4632d0c!2s10039+Sierra+Grace+Ln%2C+Houston%2C+TX+77089%2C+USA!5e0!3m2!1sen!2sin!4v1532708532029" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
              
				</div>
			</div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').bootstrapValidator({
//
        fields: {
            firstName: {
               validators: {
					notEmpty: {
						message: 'First Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'First Name can only consist of alphanumeric, space and dot'
					}
				}
            },
            lastName: {
                validators: {
					notEmpty: {
						message: 'Last Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Last Name can only consist of alphanumeric, space and dot'
					}
				}
            },
            
            email: {
                validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },phone: {
                 validators: {
					notEmpty: {
						message: 'Phone  Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10,14}$/,
					message:'Phone  Number must be 10 to 14 digits'
					}
				
				}
            },message: {
                 validators: {
					notEmpty: {
						message: 'Message is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Message wont allow <> [] = % '
					}
				
				}
            },
            
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script>
          