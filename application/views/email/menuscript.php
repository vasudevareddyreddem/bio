

<?php //echo '<pre>';print_r($details); exit;?>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #fb3;
    color: white;
}
</style>
<div style="padding:0px;margin:0px auto;width:600px;border:1px #e7e7e7 solid">
			<div style="background:#ddd repeat-x;height:100px">
				<div style="float:left;margin:25px 0px 0px 25px;padding:0px;width:200px;height:100px">
				<img style="width:100px;height:auto" src="<?php echo base_url(); ?>assets/vendor/img/logo.png" class=""> 
				</div>
			</div>
			<div>
				<div style="background:none repeat scroll 0 0 #fff;color:#6e7179;font-size:16px;font-weight:300;line-height:24px;padding:10px 69px"> 			<p style="text-align:left">&nbsp;</p>
				<p style="text-align:left">Dear Admin,</p>
							<p><strong>Greetings from Bibliotics! <img goomoji="263a" data-goomoji="263a" style="margin:0 0.2ex;vertical-align:middle;max-height:24px" alt="☺" src="https://mail.google.com/mail/e/263a" class="CToWUd"></strong></p>
						<table id="customers">
						  <tr>
							<th>Title</th>
							<th>Name</th>
							<th>Phone Number</th>
							<th>Email Id</th>
							
						  
						  </tr>
						  <tr>
						  	<td><?php echo isset($details['title'])?$details['title']:'';?></td>
							<td><?php echo isset($details['firstName'])?$details['firstName']:'';?>&nbsp;<?php echo isset($details['lastName'])?$details['lastName']:'';?></td>
							<td><?php echo isset($details['phone'])?$details['phone']:'';?></td>
							<td><?php echo isset($details['email'])?$details['email']:'';?></td>
							
						  </tr>
						  <tr>
						  	<th>University</th>
							<th>Country</th>
							<th>Manuscript Tittle</th>
							<th>Address</th>
							
						  
						  </tr>
						  <tr>
						  <td><?php echo isset($details['university'])?$details['university']:'';?></td>

							<td><?php echo isset($details['country'])?$details['country']:'';?></td>
							<td><?php echo isset($details['menuscript_title'])?$details['menuscript_title']:'';?></td>
							<td><?php echo isset($details['address'])?$details['address']:'';?></td>
							
						  
						  </tr> 
						  <tr>
							<th>Your Message</th>
							<th>Journel</th>
							<th>Insert Abstract</th>
						  
						  </tr>
						  <tr>
							<td><?php echo isset($details['message'])?$details['message']:'';?></td>
							<td><?php echo isset($details['journel'])?$details['journel']:'';?></td>
							<td><?php echo isset($details['abstract'])?$details['abstract']:'';?></td>
						  
						  </tr>
						  
						</table>
					 <p> Thanks &amp; Regards <br>
						Bibliotics</p>
				</div>
				<div style="clear:both"> </div>
				<div style="background:none repeat scroll 0 0 #f2f2f2;color:#a5a5a5;font-size:10px;padding:20px"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
				</div>
				</div> 
</div>
