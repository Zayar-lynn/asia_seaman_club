@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Over View</h3>
  </div>
</div>
<!--inner heading end--> 


<br><br>

<div class="container">
	<div class="row">
		
		@include('user.include.seafarer_sidebar')

		<div class="col-md-9" id="over-view-name">
			<div class="row over-view-name">
				<div class="col-md-6">
					<div class="well">
						<div class="row">
							<div class="col-md-5">
								<img src="img/logo_1.png" alt="" class="img-responsive" style="border: 2px dotted #ccc;border-radius: 3px;">
								<a href="#" class="btn btn-primary">Edit Profile</a>
							</div>
							<div class="col-md-7">
								<h3>
									Chit Min Thu
								</h3>
								<p>
									chitminthu@gmail.com
								</p>
								<p>
									0998 867 5654
								</p>
								<p>
									Ahmedabad, INDIA
								</p>
								
							</div>
						</div>
					</div>


					<div class="well">
						<h4>
							Recent Order
						</h4>
						<table class="table">
							<thead>
								<tr>
									<th>Date</th>
									<th>Company name</th>
									<th>Rank</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>28/12/2019</td>
									<td>Green Hackers</td>
									<td>Green Hackers</td>
								</tr>

								<tr>
									<td>28/12/2019</td>
									<td>Green Hackers</td>
									<td>Green Hackers</td>
								</tr>

								<tr>
									<td>28/12/2019</td>
									<td>Green Hackers</td>
									<td>Green Hackers</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6">
					
				</div>
			</div>
		</div>
	</div>
</div>



<br><br>
@include('user.include.footer')