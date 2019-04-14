@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Profile CV</h3>
  </div>
</div>
<!--inner heading end--> 

<section id="update">
	<br><br>
	<div class="container">

		<div class="row">
			
			@include('user.include.seafarer_sidebar')

			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-2">
								<div class="border-cv-photo">
									<img src="img/logo_1.png" alt="" class="img-responsive">
								</div>
								<br>
							</div>
						</div>
					</div>
					<div class="col-md-12">

						<form action="">
						<div class="panel-group" id="accordion">
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Main Information <span class="pull-right"><i class="fa fa-plus"></i></span></a>
						        </h4>
						      </div>
						      <div id="collapse1" class="panel-collapse collapse in">
						        <div class="panel-body">
						        	<div class="row">
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="text" placeholder="Full Name*" class="form-control" required>
								        	</div>
						        		</div>
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="text" placeholder="Rank*" class="form-control" required>
								        	</div>
						        		</div>
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="text" placeholder="Desired salary*" class="form-control" required>
								        	</div>
						        		</div>
						        	</div>

						        	<div class="row">
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="text" placeholder="Citizenship*" class="form-control" required>
								        	</div>
						        		</div>
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="text" placeholder="Phone*" class="form-control" required>
								        	</div>
						        		</div>
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="email" placeholder="Email*" class="form-control" required>
								        	</div>
						        		</div>
						        	</div>

						        	<div class="row">
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<select name="" id="" class="form-control">
								        			<option value="low english">Low English</option>
								        			<option value="low english">Low English</option>
								        			<option value="low english">Low English</option>
								        		</select>
								        	</div>
						        		</div>
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="date" placeholder="Date of birth*" data-toggle='tooltip' title="Date of Birth" class="form-control" required>
								        	</div>
						        		</div>
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="text" placeholder="Place of birth*" class="form-control" required>
								        	</div>
						        		</div>
						        	</div>

						        	<div class="row">
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="text" placeholder="Country of residence*" class="form-control" required>
								        	</div>
						        		</div>
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="text" placeholder="Full Address*" class="form-control" required >
								        	</div>
						        		</div>
						        	</div>
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Certificates <span class="pull-right"><i class="fa fa-plus"></i></span></a>
						        </h4>
						      </div>
						      <div id="collapse2" class="panel-collapse collapse">
						        <div class="panel-body">
						        	
						        	<div class="row">
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="text" value="certificate" class="form-control" required>
								        	</div>
						        		</div>
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="text" value="certificate" class="form-control" required>
								        	</div>
						        		</div>
						        		<div class="col-md-4">
						        			<div class="form-group">
								        		<input type="text" value="certificate" class="form-control" required>
								        	</div>
						        		</div>
						        	</div>

						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Flag Documents and Other Countries Seaman's Books <span class="pull-right"><i class="fa fa-plus"></i></span></a>
						        </h4>
						      </div>
						      <div id="collapse3" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<div class="table-responsive">
						        		<table class="table table-bordered">
						        			<thead>
						        				<tr>
						        					<th>Country</th>
						        					<th>No</th>
						        					<th>Document Type</th>
						        					<th>Date of issue</th>
						        					<th>Date of expire</th>
						        				</tr>
						        			</thead>
						        		</table>
						        	</div>
						        </div>
						      </div>
						    </div>



						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Sea Service <span class="pull-right"><i class="fa fa-plus"></i></span></a>
						        </h4>
						      </div>
						      <div id="collapse4" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<div class="table-responsive">
						        		<table class="table table-bordered">
						        			<thead>
						        				<tr>
						        					<th>Position</th>
						        					<th>Name of Ship</th>
						        					<th>Type of Ship</th>
						        					<th>DWT</th>
						        					<th>ME Type/kW</th>
						        					<th>Form - Till</th>
						        					<th>Employer</th>
						        				</tr>
						        			</thead>
						        		</table>
						        	</div>
						        </div>
						      </div>
						    </div>


							<div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Addtional info <span class="pull-right"><i class="fa fa-plus"></i></span></a>
						        </h4>
						      </div>
						      <div id="collapse5" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<div class="row">
						        		<div class="col-md-4">
						        			<div class="form-group">
						        				<input type="text" placeholder="Education*" value="EYU" class="form-control">
						        			</div>
						        		</div>

						        		<div class="col-md-4">
						        			<div class="form-group">
						        				<input type="text" placeholder="Specialty*" value="specialty" class="form-control">
						        			</div>
						        		</div>

						        		<div class="col-md-4">
						        			<div class="form-group">
						        				<input type="text" placeholder="Second ( relative ) specialty*" value="second ( relative ) specialty" class="form-control">
						        			</div>
						        		</div>
						        	</div>

						        	<div class="row">
						        		<div class="col-md-4">
						        			<div class="form-group">
						        				<input type="text" placeholder="Knowledge of Other lanuages*" value="Knowledge of Other lanuages" class="form-control">
						        			</div>
						        		</div>

						        		<div class="col-md-4">
						        			<div class="form-group">
						        				<input type="text" placeholder="Lathe machine skills*" value="Lathe machine skills" class="form-control">
						        			</div>
						        		</div>

						        		<div class="col-md-4">
						        			<div class="form-group">
						        				<input type="text" placeholder="Welding skills*" value="Welding skills" class="form-control">
						        			</div>
						        		</div>
						        	</div>
						        </div>
						      </div>
						    </div>


						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Next of Kin <span class="pull-right"><i class="fa fa-plus"></i></span></a>
						        </h4>
						      </div>
						      <div id="collapse6" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<div class="row">
						        		<div class="col-md-6">
						        			<div class="form-group">
						        				<input type="text" placeholder="Next of Kin*" value="Next of Kin" class="form-control">
						        			</div>
						        		</div>

						        		<div class="col-md-6">
						        			<div class="form-group">
						        				<input type="text" placeholder="Name, Surname*" value="Name, Surname" class="form-control">
						        			</div>
						        		</div>
						        	</div>

						        	<div class="row">
						        		<div class="col-md-6">
						        			<div class="form-group">
						        				<input type="tel" placeholder="Phone*" value="09 9748 72745" class="form-control">
						        			</div>
						        		</div>

						        		<div class="col-md-6">
						        			<div class="form-group">
						        				<input type="text" placeholder="Address*" value="No.( 51 ), Bayathothtee Road, Yangon." class="form-control">
						        			</div>
						        		</div>
						        	</div>
						        </div>
						      </div>
						    </div>
							

							<div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Biometrical data <span class="pull-right"><i class="fa fa-plus"></i></span></a>
						        </h4>
						      </div>
						      <div id="collapse7" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<div class="row">
						        		<div class="col-md-4">
						        			<div class="form-group">
						        				<select name="" id="" class="form-control">
						        					<option value="female">Female</option>
						        					<option value="male" selected>Male</option>
						        					<option value="other">Other</option>
						        				</select>
						        			</div>
						        		</div>

						        		<div class="col-md-4">
						        			<div class="form-group">
						        				<input type="text" placeholder="Height*" value="22.5cm" class="form-control">
						        			</div>
						        		</div>

						        		<div class="col-md-4">
						        			<div class="form-group">
						        				<input type="text" placeholder="Overall size*" value="Overall size" class="form-control">
						        			</div>
						        		</div>
						        	</div>
						        </div>
						      </div>
						    </div>

						  </div> 
						

						<div class="pull-right">
							<a href="#" class="btn btn-danger"><i class="fa fa-download"></i> Download CV</a>
							<a href="#" class="btn btn-danger"><i class="fa fa-print"></i> Print CV</a>
							<a href="#" class="btn btn-primary"><i class="fa fa-upload"></i> Update</a>
						</div>
						</form>

					</div>
				</div>	
			</div>
		</div>
	</div>
</section>

<br><br>







<!--footer start-->
@include('user.include.footer')