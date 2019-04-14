@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>All Company List</h3>
  </div>
</div>
<!--inner heading end-->

<section>
	<div class="container">
		<br><br>
		<div class="row">
			<div class="col-md-9">
				@foreach($companies as $company)
				<div class="row all_comany">
					<div class="col-md-2">
						<img src="{{$company->photo_url}}" alt="" class="img-responsive">
					</div>
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-5">
								<h3>
									{{$company->company_name}}
								</h3>
								<p>
									<i class="fa fa-phone"></i> {{$company->phone}}
								</p>
							</div>
							<div class="col-md-7">
								<h4 style="margin-top: 25px;">
									<i class="fa fa-map-marker"></i> {{$company->address}}
								</h4>
								<a href="{{url('company_profile/'.$company->id)}}" class="btn btn-danger btn-sm">More detail</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
			<div class="col-md-3">
				@foreach($ads as $item)
					<br>
					<img src="{{$item['photo_url']}}" alt="" style="height: 150px;" class="img-responsive">

				@endforeach

			</div>
 		</div>
		<div class="row">
			<div class="col-md-12">
				{{$paginate->links()}}
				{{--<ul class="pagination pagination-lg">--}}
				   {{--<li><a href="#"><i class="fa fa-angle-left"></i></a></li>--}}
				   {{--<li class="active"><a href="#">1</a></li>--}}
				   {{--<li><a href="#">2</a></li>--}}
				   {{--<li><a href="#">3</a></li>--}}
				   {{--<li><a href="#">4</a></li>--}}
				   {{--<li><a href="#">5</a></li>--}}
				   {{--<li><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
				{{--</ul>--}}
			</div>
		</div>
	</div>
</section>

<!--Inner Content end--> 
@include('user.include.footer')