@include('user.include.header')
<!-- banner photo -->
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Essential Employee Register</h3>
  </div>
</div>
<!--inner heading end-->
<!-- banner photo end -->


<section>
	<br>
	<div class="container">
		<!-- row 1 -->
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center text-uppercase">
					CURRICULUM VITAE
				</h2>
				<h4 class="text-center text-uppercase text-muted">
					Application form
				</h4>
			</div>
		</div>
		<!-- row 1 end -->
		<!-- row 2 -->
		<div class="row">
			<div class="col-md-6 col-md-offset-3 well">
				<div class="well-header">
					<div class="well-title">
						<h4>
							Main information
						</h4>
					</div>
					<div class="well-body">
						<!-- Main cv -->
						<form action="">
							<div class="form-group">
								<input type="text" placeholder="Full Name*" required class="form-control">
							</div>

							<div class="form-group">
								<input type="text" placeholder="Phone*" required class="form-control">
							</div>

							<div class="form-group">
								<input type="text" placeholder="Citizenship*" required class="form-control">
							</div>

							<div class="form-group">
								<input type="email" placeholder="Email Address*" required class="form-control">
							</div>

							<div class="form-group">
								<select name="" id="" class="form-control">
									<option value="english-level">--English level--</option>
									<option value="basic">Basic</option>
									<option value="advance">Advance</option>
									<option value="intermitade">Intermitade</option>
								</select>
							</div>

							<div class="form-group">
								<input type="text" placeholder="Available*" required class="form-control">
							</div>

							<div class="form-group">
								<input type="text" placeholder="Country of residence*" required class="form-control">
							</div>

							<div class="form-group">
								<input type="text" placeholder="Full Address*" required class="form-control">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- row 2 -->
		<!-- row 3 -->
		<div class="row">
			<div class="col-md-6 col-md-offset-3 well">
				<div class="well-header">
					<div class="well-title">
						<h4>
							Main information
						</h4>
					</div>
					<div class="well-body">
						<!-- Main cv -->
						<form action="">
							<div class="form-group">
								<label for="date_of_birth">Date of birth :</label>
								<input type="date" id="date_of_birth" required class="form-control">
							</div>

							<div class="form-group">
								<label for="place">Place of birth :</label>
								<input type="text" id="place" placeholder="SSC Hospital , Home or Yangon" required class="form-control">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- row 3 end -->
	</div>
</section>


@include('user.include.footer')