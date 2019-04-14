@include('user.include.header')


<section>
	<!--inner heading start-->
	<div class="inner-heading">
	  <div class="container">
	    <h3>Employee</h3>
	  </div>
	</div>
	<!--inner heading end-->
</section>


<section>
	<div class="container">
		<br>
		<h4>
			Welcome back! Chit Min Thu, update your profile in 3 easy steps.
		</h4>
	<div class="row">
		<div class="col-md-9">
	<form action="">
		<div class="panel-group" id="accordion">
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><b>	Step 1 :</b> Your Account Details &nbsp;<i class="fa fa-arrow-circle-o-down"></i></a>
		        </h4>
		      </div>
		      <div id="collapse1" class="panel-collapse collapse in">
		        <div class="panel-body">
		        	
					<h5>Your Contact Details</h5>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email*" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Full Name" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Phone*" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<select name="" id="" class="form-control">
									<option value="--location--" selected>--Location--</option>
									<option value="yangon">Yangon</option>
									<option value="mandalay">Mandalay</option>
									<option value="other">Other</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<select name="" id="" class="form-control">
									<option value="--nationality--" selected>--Nationality--</option>
									<option value="yangon">Myanmar</option>
									<option value="mandalay">Hundi</option>
									<option value="other">Christ</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Phone*" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Job Title*" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Job Function">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<select name="" id="" class="form-control">
									<option value="--Experience Level--" selected>--Experinment Level--</option>
									<option value="entry-level">Entry Level</option>
									<option value="mandalay">Experienced Non-Managar</option>
									<option value="managar">Managar</option>
									<option value="director-above">Director and Above</option>
								</select>
							</div>
						</div>
					</div>



		        </div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><b>	Step 2 :</b> Tell Your Story &nbsp;<i class="fa fa-arrow-circle-o-down"></i></a>
		        </h4>
		      </div>
		      <div id="collapse2" class="panel-collapse collapse">
		        <div class="panel-body">

		        	<div class="row">
		        		<div class="col-md-3">
		        			<img src="https://via.placeholder.com/150" alt="" class="img-responsive thumbnail">
		        			<label for="photo_image" class="btn btn-danger">Select Photo <i class="fa fa-photo"></i></label>
		        			<input type="file" id="photo_image" style="visibility: hidden;">
		        		</div>
		        		<div class="col-md-9">
		        			<div class="form-group">
		        				<input type="checkbox" id="cv_checkbox">
		        				<label for="cv_checkbox">License</label>
		        			</div>
		        		</div>
		        	</div>
		        	
		        	<div class="row">
		        		<div class="col-md-12">
		        			<div class="form-group">
		        				<label for="dob">Date of Birth</label>
				        		<input type="date" id="dob" class="form-control">
				        	</div>
		        		</div>
		        	</div>

		        	<div class="row">
		        		<div class="col-md-6">
		        			<div class="form-group">
		        				<select name="" id="genter" class="form-control">
			        				<option value="genter" selected>--Genter--</option>
			        				<option value="male">Male</option>
			        				<option value="female">Female</option>
			        			</select>
		        			</div>
		        		</div>
		        		<div class="col-md-6">
		        			<div class="form-group">
		        				<input type="text" placeholder="Address*" required class="form-control">
		        			</div>
		        		</div>
		        	</div>
					
					<br>	
		        	<div class="row">
		        		<div class="col-md-12">
		        			<div class="form-group">
		        				<input type="text" placeholder="Preferred Industries to work*" required class="form-control">
		        			</div>
		        		</div>
		        	</div>

		        	<div class="row">
		        		<div class="col-md-6">
		        			<div class="form-group">
		        				<textarea name="" id="" cols="30" rows="10" placeholder="Describe Yourself" class="form-control"></textarea>
		        			</div>
		        		</div>
		        		<div class="col-md-6">
		        			<div class="form-group">
		        				<textarea name="" id="" cols="30" rows="10" placeholder="Carrier Objective" class="form-control"></textarea>
		        			</div>
		        		</div>
		        	</div>

		        </div>
		      </div>
		    </div>
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h4 class="panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><b>	Step 3 :</b> Your Experiences &nbsp;<i class="fa fa-arrow-circle-o-down"></i></a>
		        </h4>
		      </div>
		      <div id="collapse3" class="panel-collapse collapse">
		        <div class="panel-body">
		        	<p>
		        		Education/ Qualifications 
		        		<a href="#educational" data-toggle="modal" class="btn btn-primary btn-xs pull-right">Add +</a>
		        	</p>
		        	<!-- Modal -->
					<div class="modal fade" id="educational" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					    <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Education/ Qualifications</h4>
					        </div>
					        <div class="modal-body">
					          
					          <div class="row">
					          	<div class="col-md-12">
					          		<div class="form-group">
					          			<label for="date">From/ to</label>
					          			<input type="date" id="date" name="day" class="form-control">
					          		</div>
					          	</div>
					          </div>

					          <div class="row">
					          	<div class="col-md-6">
					          		<div class="form-group">
					          			<select name="" id="" class="form-control">
					          				<option value="">Choose Education Level</option>
					          				<option value="">Height School</option>
					          				<option value="">Professional Certificate</option>
					          				<option value="">Diploma</option>
					          				<option value="">Bachelor Degree</option>
					          				<option value="">Master Degree</option>
					          				<option value="">PHD</option>
					          			</select>
					          		</div>
					          	</div>
					          	<div class="col-md-6">
					          		<div class="form-group">
					          			<input type="text" placeholder="Location*" required class="form-control">
					          		</div>
					          	</div>
					          </div>


					          <div class="row">
					          	<div class="col-md-6">
					          		<div class="form-group">
					          			<input type="text" placeholder="Country*" required class="form-control">
					          		</div>
					          	</div>
					          	<div class="col-md-6">
					          		<div class="form-group">
					          			<input type="text" placeholder="Major*" required class="form-control">
					          		</div>
					          	</div>
					          </div>

					          <div class="row">
					          	<div class="col-md-12">
					          		<div class="form-group">
					          			<input type="text" placeholder="School or University*" required class="form-control">
					          		</div>
					          	</div>
					          </div>



					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

					          <a href="#" class="btn btn-primary">Save</a>
					        </div>
					      </div>
					      
					    </div>
					</div>


					<!-- Modal end -->
		        	<hr>
		        	<p>
						Work Experience
						<a href="#educational" data-toggle="modal" class="btn btn-primary btn-xs pull-right">Add +</a>
					</p>

					<hr>

					<p>
						Language used
						<a href="#educational" data-toggle="modal" class="btn btn-primary btn-xs pull-right">Add +</a>
					</p>

					<hr>


					<p>
						Skill achieved
						<a href="#educational" data-toggle="modal" class="btn btn-primary btn-xs pull-right">Add +</a>
					</p>

					<hr>


					<p>
						Reference
						<a href="#educational" data-toggle="modal" class="btn btn-primary btn-xs pull-right">Add +</a>
					</p>

					<hr>
		        </div>
		      </div>
		    </div>
		  </div> 


		  </form>


		  <br>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
	</div>
</section>


@include('user.include.footer')