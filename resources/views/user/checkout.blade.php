@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Checkout</h3>
  </div>
</div>
<!--inner heading end--> 
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h3>
				Your Order
			</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Product</td>
							<td>Total</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Hello World  × 1</td>
							<td>Ks25.00</td>
						</tr>

						<tr>
							<td>Subtotal</td>
							<td>Ks25.00</td>
						</tr>

						<tr>
							<td>Shipping</td>
							<td>Free shipping</td>
						</tr>

						<tr>
							<td>Total</td>
							<td>Ks25.00</td>
						</tr>
					</tbody>
				</table>
			</div>
			<hr>

			<h2>
				Checkout
			</h2>
			<form action="">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Full name*">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Company name*">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Country*">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Address*">
				</div>

				<div class="form-group">
					<input type="tel" class="form-control" placeholder="Phone*">
				</div>

				<div class="form-group">
					<input type="email" class="form-control" placeholder="Email*">
				</div>

				<div class="form-group">
					<input type="radio" name="pay-ment" id="pay-ment-1"> <label for="pay-ment-1" class="c-on-dev-hide">Direct bank transfer</label>
				</div>

				<div class="form-group">
					<input type="radio" name="pay-ment" id="pay-ment-2" class="c-on-dev-show"> <label for="pay-ment-2">Cash on delivery</label>
				</div>

				<div class="form-group">
					<input type="text" placeholder="Card no" class="form-control show-hide-mpu">
				</div>

				<div class="form-group">
					<input type="password" class="form-control show-hide-mpu" placeholder="****">
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-danger " value="Checkout">
				</div>
			</form>
		</div>
		<div class="col-md-3">
			<br><br><br>
			<img src="img/about2.jpg" alt="" class="img-responsive">
			<br>
			<img src="img/about2.jpg" alt="" class="img-responsive">
			<br>
			<img src="img/about2.jpg" alt="" class="img-responsive">
		</div>
	</div>
</div>




<br><br>
<!--footer start-->
@include('user.include.footer')