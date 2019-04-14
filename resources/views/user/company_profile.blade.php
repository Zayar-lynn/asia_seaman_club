@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
	<?php
		if($company_info->company_type == 'training'){
	?>
			<h3>Training Profile</h3>
	<?php
		}elseif($company_info->company_type == 'freeagent'){
	?>
			<h3>Freeagent Profile</h3>
	<?php
		}elseif($company_info->company_type == 'company'){
	?>
			<h3>Company Profile</h3>
	<?php
		}
	?>
  </div>
</div>
<!--inner heading end--> 


<br><br>

<div class="container" id="company_profile">
	<div class="row well">
		<div class="col-md-2">
			<img src="{{$company_info->photo_url}}" alt="" class="img-responsive">
		</div>
		<div class="col-md-10">
			<h3>
				{{$company_info->company_name}}
			</h3>
			<div id="underline_pp"></div>
			<div class="row">
				<div class="col-md-6">
					<p>
						<i class="fa fa-user"></i> <b>Company type: </b> {{$company_info->company_type}}
					</p>

					<p>
						<i class="fa fa-hand-o-right"></i> <b>Email: </b> <a href="{{$company_info->email}}">{{$company_info->email}}</a>
					</p>

					<p>
						<i class="fa fa-phone"></i> <b>Phone: </b> <a href="tel:09974872745">{{$company_info->phone}}</a>
					</p>
				</div>
				<div class="col-md-6">
					<p>
						<i class="fa fa-map-marker"></i> <b>Address: </b>  {{$company_info->address}}
					</p>
					<br>
					<p>
						<ul class="list-inline">
							<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
							<li><a href="#"><i class="fa fa-wordpress fa-2x"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		@foreach($company_photos as $company_photo)
		<div class="col-md-3 col-sm-6" style="margin-top:5px;">
			<a href="" data-fancybox="images" data-caption="Mallorca, Llubí, Spain">
			    <img src="{{$company_photo->photo_url}}" class="img-responsive"style="width: 100%;height: 180px;"/>
			</a>
		</div>
		@endforeach
	</div>
	

	<br><br><br>
	<div class="row">
		<div class="co-md-12">
			<h3>
				What we do
			</h3>
			<div id="underline_pp"></div>
			<p>
				{{$company_info->what_we_do}}
			</p>
		</div>
	</div>

	@if($company_info->company_type != 'freeagent')
	<br><br><br>
	<div class="row">
		<div class="co-md-12">
			<h3>
				Why you should join us
			</h3>
			<div id="underline_pp"></div>
			<p>
				{{$company_info->why_join_us}}
			</p>
		</div>
	</div>

	<br><br><br>
	<div class="row">
		<div class="co-md-12">
			<h3>
				Our workplace and culture
			</h3>
			<div id="underline_pp"></div>
			<p>
				{{$company_info->workplace_and_culture}}
			</p>
		</div>
	</div>
	@endif

	<br><br><br>
	<div class="row well">
		<div class="col-md-12">
			<h3>
				Carrier
			</h3>
			<div id="underline_pp"></div>
			@if($company_info->company_type == 'company')
			<div class="table-responsive">
				<table class="table table-hovered table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Date</th>
							<th>Position</th>
							<th>Rank</th>
							<th>Requirement</th>
							<th>Apply&nbsp;now</th>
						</tr>
					</thead>
					<tbody>
							<?php $no=1 ?>
						@foreach($company_posts as $company_post)
						
						<tr>
							<td>{{$no++}}</td>
							<td>{{$company_post->created_at}}</td>
							<td>Caption</td>
							<td>{{$company_post->rank}}</td>
							<td>{{$company_post->description}}</td>
							<td><a href="{{url('apply/'.$company_post->company_id.'/'.$company_post->id)}}" class="btn btn-danger">Apply</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			@endif

			@if($company_info->company_type == 'freeagent')
			<div class="table-responsive">
				<table class="table table-hovered table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Date</th>
							<th>Position</th>
							<th>Rank</th>
							<th>Requirement</th>
							<th>Apply&nbsp;now</th>
						</tr>
					</thead>
					<tbody>
							<?php $no=1 ?>
						@foreach($company_posts as $company_post)
						
						<tr>
							<td>{{$no++}}</td>
							<td>{{$company_post->created_at}}</td>
							<td>Caption</td>
							<td>{{$company_post->rank}}</td>
							<td>{{$company_post->description}}</td>
							<td><a href="{{url('apply/'.$company_post->company_id.'/'.$company_post->id)}}" class="btn btn-danger">Apply</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			@endif

			@if($company_info->company_type == 'training')
			<div class="table-responsive">
				<table class="table table-hovered table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Titel</th>
							<th>Description</th>
							<th>photo</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Time</th>
							<th>Apply&nbsp;now</th>
						</tr>
					</thead>
					<tbody>
							<?php $no=1 ?>
						@foreach($company_posts as $company_post)
						
						<tr>
							<td>{{$no++}}</td>
							<td>{{$company_post->title}}</td>
							<td>{{$company_post->description}}</td>
							<td><img src="{{$company_post->photo_url}}" alt="" width="500px;"></td>
							<td>{{$company_post->start_date}}</td>
							<td>{{$company_post->end_date}}</td>
							<td>{{$company_post->time}}</td>
							<td><a href="{{url('apply/'.$company_post->company_id.'/'.$company_post->id)}}" class="btn btn-danger">Apply</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			@endif
		</div>
	</div>
</div>



<br><br>
@include('user.include.footer')