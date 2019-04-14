@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>CURRICULUM VITE</h3>
    <h5 class="text-center text-uppercase" style="color: #fff;">application form</h5>
  </div>
</div>
<!--inner heading end--> 




<div class="container">
	<div class="row">
		<section>
			<form action="">
		        <div class="wizard">
		            <div class="wizard-inner">
		                <div class="connecting-line"></div>
		                <ul class="nav nav-tabs" role="tablist">

		                    <li role="presentation" class="active">
		                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
		                            <span class="round-tab">
		                                <i class="fa fa-folder-open"></i>
		                            </span>
		                        </a>
		                    </li>

		                    <li role="presentation" class="disabled">
		                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
		                            <span class="round-tab">
		                                <i class="glyphicon glyphicon-pencil"></i>
		                            </span>
		                        </a>
		                    </li>
		                    <li role="presentation" class="disabled">
		                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
		                            <span class="round-tab">
		                                <i class="fa fa-photo"></i>
		                            </span>
		                        </a>
		                    </li>

		                    <li role="presentation" class="disabled">
		                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
		                            <span class="round-tab">
		                                <i class="fa fa-folder"></i>
		                            </span>
		                        </a>
		                    </li>
		                </ul>
		            </div>

		            <form role="form">
		                <div class="tab-content">
		                	<!-- Step1 -->
		                    <div class="tab-pane active" role="tabpanel" id="step1">
		                        <br>	
							    	<div class="alert alert-info"><i class="fa fa-info-circle"></i> * is required</div>
							      	<div class="row">
							      		<div class="col-md-6">
							      			<div class="well">
							      				<div class="form-group">
								      				<label for="name">Name <span style="color: #f00;">*</span></label>
											      	<input type="text" class="form-control" id="name" required>
											    </div>
											    <div class="form-group">
											    	<label for="ds">Desired salary <span style="color: #f00;">*</span></label>
											      	<input type="text" class="form-control" id="ds" required>
											    </div>
												<div class="form-group">
											    	<label for="sz">Citizenship <span style="color: #f00;">*</span></label>
											      	<input type="text" class="form-control" id="sz" required>
											    </div>
											    <div class="form-group">
											    	<label for="phone">Phone <span style="color: #f00;">*</span></label>
											      	<input type="tel" class="form-control" id="phone" required>
											    </div>
											    <div class="form-group">
											    	<label for="email">Email <span style="color: #f00;">*</span></label>
											      	<input type="email" class="form-control" id="email" required>
											    </div>
											    <div class="form-group">
											    	<label for="el">English level <span style="color: #f00;">*</span></label>
											      	<select name="" id="el" class="form-control">
											      		<option value="--select--" selected>--Select--</option>
											      		<option value="low-level">Low level</option>
											      		<option value="intermediate">Intermediate level</option>
											      		<option value="hight-level">Hight level</option>
											      	</select>
											    </div>
							      			</div>
							      		</div>

							      		<div class="col-md-6">
								      		<div class="well">
								      			<div class="form-group">
								      				<label for="rank">Rank <span style="color: #f00;">*</span></label>
											      	<input type="text" class="form-control" id="rank" required>
											    </div>
												<div class="form-group">
													<label for="dob">Date of birth <span style="color: #f00;">*</span></label>
											      	<input type="date" class="form-control" id="dob" required>
											    </div>
											    <div class="form-group">
											    	<label for="pb">Place of birth <span style="color: #f00;">*</span></label>
											      	<input type="text" class="form-control" id="pb" required>
											    </div>
											    <div class="form-group">
											    	<label for="cor">Country of residence <span style="color: #f00;">*</span></label>
											      	<input type="text" class="form-control" id="cor" required>
											    </div>
											    <div class="form-group">
											    	<label for="fa">Full address <span style="color: #f00;">*</span></label>
											      	<input type="text" class="form-control" id="fa" required>
											    </div>
								      		</div>
							      		</div>
							      	</div>
		                        <ul class="list-inline pull-right">
		                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
		                        </ul>
		                    </div>

		                    <!-- //////////////////Step 2////////////////////// -->
		                    <div class="tab-pane" role="tabpanel" id="step2">
		                       	<br>
						    	<div class="row">
						    		<div class="col-md-12 well">
						    			<div class="row">
						    				<div class="col-md-4">
						    					<div class="form-group">
								    				<select name="" id="certifi" class="form-control">
								    					
								    					<option value="GMDSS Operator">GMDSS Operator</option>
								    					<option value="GMDSS Endorsement">GMDSS Endorsement</option>
								    					<option value="Basic Safety Traning">Basic Safety Traning</option>
								    					<option value="Advanced Fire Fighting">Advanced Fire Fighting</option>
								    					<option value="Medical care">Medical care</option>

								    					<option value="Medical First aid">Medical First aid</option>

								    					<option value="Proficiency in Survival craft">Proficiency in Survival craft</option>

								    					<option value="Security Awareness Training">Security Awareness Training</option>

								    					<option value="Security training for seafarers with designated security duties">Security training for seafarers with designated security duties</option>

								    					<option value="Designated security duties of shipboard personnel">Designated security duties of shipboard personnel</option>

								    					<option value="Rader Management">Rader Management</option>

								    					<option value="Ship headling arrangements">Ship headling arrangements</option>

								    					<option value="Ship security officer">Ship security officer</option>

								    					<option value="Electronic chart display and information systems ( ECDIS )">Electronic chart display and information systems ( ECDIS )</option>

								    					<option value="Tanker familiarizaion">Tanker familiarizaion</option>

								    					<option value="Oil tank specilized training">Oil tank specilized training</option>

								    					<option value="Crude oil washing of oil tankers">Crude oil washing of oil tankers</option>

								    					<option value="Passenger vessel training">Passenger vessel training</option>

								    					<option value="Bridge team management">Bridge team management</option>

								    					<option value="HUET ( Helicopter underwater escape training - OPITO approved )">HUET ( Helicopter underwater escape training - OPITO approved</option>

								    					<option value="BOSIET ( OPITO approved )">BOSIET ( OPITO approved )</option>

								    					<option value="Offshore Medical ( OPITO approved )">Offshore Medical ( OPITO approved )</option>

								    					<option value="ARAMCO approve">ARAMCO approve</option>

								    					<option value="Crane operator courses">Crane operator courses</option>

								    					<option value="DP maintenance">DP maintenance</option>

								    					<option value="H2S Alive course">H2S Alive course</option>

								    					<option value="Fast Rescue Boats course">Fast Rescue Boats course</option>

								    					<option value="DP basic course">DP basic course</option>

								    					<option value="DP advanced course">DP advanced course</option>

								    					<option value="DP Full">DP Full</option>

								    					<option value="Yellow fever valid up:">Yellow fever valid up:</option>
								    				</select>
								    			</div>
						    				</div>
						    				<div class="col-md-2">
						    					<div class="form-group">
						    						<input type="submit" class="btn btn-primary" value="Add certificates" id="c_add">
						    					</div>
						    				</div>
						    			</div>
						    			<div class="table-responsive certificates-table">
								      		<table class="table table-bordered" id="dynamic_table">
								      			<thead>
								      				<tr>
								      					<th>Certificates</th>
								      					<th>No</th>
								      					<th>Date of issue</th>
								      					<th>Place of issue</th>
								      					<th>Valid up</th>
								      					<th>Remove</th>
								      				</tr>
								      			</thead>
								      		</table>
								    	</div>

								    	<br>
						    		</div>

						    		<br>
						    		<div class="col-md-12 well">
						    			<span class="h4">&nbsp;Add Documents and Other Countries Seaman's Books &nbsp;&nbsp;</span> <button class="btn btn-primary pull-right" data-toggle='tooltip' title="Add" id="seaman-book"><i class="fa fa-plus"></i></button>

						    			<br><br><br>

						    			<div class="table-responsive">
						    				<table class="table table-bordered" id="dynamic_table_2">
						    					<thead>
						    						<tr>
						    							<td>Country</td>
						    							<td>No</td>
						    							
						    							<td>Date of issue</td>
						    							<td>Date of expire</td>
						    							<td>Seaman Book</td>
						    							<th>Remove</th>
						    						</tr>
						    					</thead>
						    				</table>
						    			</div>
						    		</div>
						    	</div>
		                        <ul class="list-inline pull-right">
		                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
		                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
		                        </ul>
		                    </div>


		                    <!-- ////////////////////Step 3///////////////////////// -->
		                    <div class="tab-pane" role="tabpanel" id="step3">
		                            
		                       	<br>
		                       	<div class="row">
		                       		<div class="col-md-12 well">
						    			<span class="h4">&nbsp;Sea Service &nbsp;&nbsp;</span> <button class="btn btn-primary pull-right" data-toggle='tooltip' title="Add" id="seaman-service"><i class="fa fa-plus"></i></button>

						    			<br><br><br>

						    			<div class="table-responsive">
						    				<table class="table table-bordered" id="dynamic_table_3">
						    					<thead>
						    						<tr>
						    							<td>Position</td>
						    							<td>Name of Ship</td>
						    							<td>Type of Ship</td>
						    							<td>DWT</td>
						    							<td>ME Type/kW</td>
						    							<td>Form - Till</td>
														<td>Employer</td>
														<td>Remove</td>
						    						</tr>
						    					</thead>
						    				</table>
						    			</div>
						    		</div>
		                       	</div>
		                        <ul class="list-inline pull-right">
		                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
		                            <!-- <li><button type="button" class="btn btn-default next-step">Skip</button></li> -->
		                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
		                        </ul>
		                    </div>
		                    <div class="tab-pane" role="tabpanel" id="complete">
		                     <div class="alert alert-info"><i class="fa fa-info-circle"></i> * is required</div>

		                     	<!-- Additional info -->
						      	<div class="row well">
						      		<div class="col-md-12">
						      			<h3 class="page-header">
							      			Additional Info
							      		</h3>
						      		</div>
						      		<div class="col-md-6">
						      			<div class="">
						      				
						      				<div class="form-group">
							      				<label for="edu">Education <span style="color: #f00;">*</span></label>
										      	<input type="text" class="form-control" id="edu" required>
										    </div>
										    <div class="form-group">
										    	<label for="spi">Specialty <span style="color: #f00;">*</span></label>
										      	<input type="text" class="form-control" id="spi" required>
										    </div>
											<div class="form-group">
										    	<label for="sz">Second ( relative ) specialty<span style="color: #f00;">*</span></label>
										      	<input type="text" class="form-control" id="sz" required>
										    </div>
						      			</div>
						      		</div>

						      		<div class="col-md-6">
							      		<div class="">
							      			<div class="form-group">
							      				<label for="kol">Knowledge of other lanuages <span style="color: #f00;">*</span></label>
										      	<input type="text" class="form-control" id="kol" required>
										    </div>
											<div class="form-group">
												<label for="lms">Lathe machine skills <span style="color: #f00;">*</span></label>
										      	<input type="text" class="form-control" id="lms" required>
										    </div>
										    <div class="form-group">
										    	<label for="wesk">Welding skills <span style="color: #f00;">*</span></label>
										      	<input type="text" class="form-control" id="pb" required>
										    </div>
							      		</div>
						      		</div>
						      	</div>


						      	<!-- Next of Kin -->
						      	<div class="row well">
						      		<div class="col-md-12">
						      			<h3 class="page-header">
							      			Next of Kin
							      		</h3>
						      		</div>
						      		<div class="col-md-6">
						      			<div class="">
						      				
						      				<div class="form-group">
							      				<label for="nok">Next of Kin <span style="color: #f00;">*</span></label>
										      	<input type="text" class="form-control" id="nok" required>
										    </div>
										    
											<div class="form-group">
										    	<label for="surname">Name, Surname<span style="color: #f00;">*</span></label>
										      	<input type="text" class="form-control" id="surname" required>
										    </div>
						      			</div>
						      		</div>

						      		<div class="col-md-6">
							      		<div class="">
							      			<div class="form-group">
										    	<label for="telp">Phone <span style="color: #f00;">*</span></label>
										      	<input type="tel" class="form-control" id="telp" required>
										    </div>
											<div class="form-group">
												<label for="add-ress">Address <span style="color: #f00;">*</span></label>
										      	<input type="text" class="form-control" id="add-ress" required>
										    </div>
							      		</div>
						      		</div>
						      	</div>


						      	<!-- Next of Kin -->
						      	<div class="row well">
						      		<div class="col-md-12">
						      			<h3 class="page-header">
							      			Biometrical data
							      		</h3>
						      		</div>
						      		<div class="col-md-12">
						      			<div class="">
						      				
						      				<div class="form-group">
							      				<label for="sex">Sex <span style="color: #f00;">*</span></label>
										      	<select name="" id="sex" class="form-control">
										      		<option value="male">Male</option>
										      		<option value="female">Female</option>
										      		<option value="other">Other</option>
										      	</select>
										    </div>
										    
											<div class="form-group">
										    	<label for="height">Height<span style="color: #f00;">*</span></label>
										      	<input type="text" class="form-control" id="height" required>
										    </div>

										    <div class="form-group">
										    	<label for="ovsize">Overall size<span style="color: #f00;">*</span></label>
										      	<input type="text" class="form-control" id="ovsize" required>
										    </div>
						      			</div>


						      			<a href="over-view.php" class="btn btn-primary">Save</a>
						      		</div>
						      	</div>
		                    </div>
		                    <div class="clearfix"></div>
		                </div>
		            </form>
		        </div>
	        </form>
    	</section>
   </div>
</div>


<!--footer start-->
@include('user.include.footer')