@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Coin Transition</h3>
  </div>
</div>
<!--inner heading end--> 


<br><br>

<div class="container">
	<div class="row">
		
		@include('user.include.seafarer_sidebar')

		<div class="col-md-9">
			<div class="well bg-light">
				<form action="">
					<div class="form-group">
						<label for="amount">Amount</label>
						<input type="text" class="form-control" id="amount">
					</div>
					<div class="form-group">
						<label for="to">To</label>
						<input type="text" class="form-control" id="to">
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-primary " value="Transfer">
					</div>					
				</form>
			</div>
		</div>
	</div>
</div>



<br><br>
@include('user.include.footer')