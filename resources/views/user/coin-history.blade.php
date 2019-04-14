@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Coin History</h3>
  </div>
</div>
<!--inner heading end--> 


<br><br>

<div class="container">
	<div class="row">
		
		@include('user.include.seafarer_sidebar')

		<div class="col-md-9">
			<div class="well bg-light">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Total</th>
								<th>About</th>
								<th>in</th>
								<th>out</th>
								<th>Balance</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Total</td>
								<td>About</td>
								<td>in</td>
								<td>out</td>
								<td>Balance</td>
							</tr>

							<tr>
								<td>2</td>
								<td>Total</td>
								<td>About</td>
								<td>in</td>
								<td>out</td>
								<td>Balnce</td>
							</tr>

							<tr>
								<td>3</td>
								<td>Total</td>
								<td>About</td>
								<td>in</td>
								<td>out</td>
								<td>Balance</td>
							</tr>

							<tr>
								<td>4</td>
								<td>Total</td>
								<td>About</td>
								<td>in</td>
								<td>out</td>
								<td>Balance</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div>
					<nav aria-label="Page navigation example">
					  <ul class="pagination pagination-lg pull-right">
					    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
					    <li class="page-item active"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item"><a class="page-link" href="#">...</a></li>
					    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>



<br><br>
@include('user.include.footer')