@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Add to card</h3>
  </div>
</div>
<!--inner heading end-->
<br><br><br> 
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<ul class="over-view-list">
				<li><a href="over-view.php">Over View</a></li>
				<li><a href="cv-profile.php">CV Profile</a></li>
				<li><a href="pricing.php">Buy Coin</a></li>
				<li><a href="coin-transition.php">Coin transition</a></li>
				<li><a href="coin-history.php">Coin history</a></li>
				<li><a href="#">General</a></li>
			</ul>
		</div>
		<div class="col-md-9">
			<h2>
				Card
			</h2>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th></th>
							<th>Coin pagace</th>
							<th>Price</th>
							<th>Quantity</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th><img src="img/logo_1.png" alt="" class="img-responsive" width="100px" style="margin-left: auto;margin-right: auto;"></th>
							<th>Hello World</th>
							<th>Ks25.00</th>
							<th><input type="number" class="form-control" value="1"></th>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="well">
				<h4>
					Cart total
				</h4>
				<div class="table-responsive">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>Sub total</td>
								<td>Ks25.00</td>
							</tr>
							<tr>
								<td>Quaitity</td>
								<td>1</td>
							</tr>

							<tr>
								<td>Total</td>
								<td>Ks25.oo</td>
							</tr>
						</tbody>
					</table>
				</div>
				<a href="checkout.php" class="btn btn-primary btn-block">Product Checkout</a>
			</div>
		</div>
	</div>
</div>




<br><br>
<!--footer start-->
@include('user.include.footer')