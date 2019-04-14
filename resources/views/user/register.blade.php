@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Personal &amp; Company Register</h3>
  </div>
</div>
<!--inner heading end--> 
<br>
<div class="container reg_all">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <p class="alert alert-info text-center">
        <i class="fa fa-users"></i> / <i class="fa fa-user"></i> Select one account type.
      </p>
      <a href="{{url('/employee-register')}}" class="btn btn-primary btn-lg"><i class="fa fa-user"></i> Seafarers Account</a>

      <a href="{{url('/company-register')}}" class="btn btn-primary btn-lg"><i class="fa fa-users"></i> Business Account</a>

       <a href="{{url('/free_agent-register')}}" class="btn btn-primary btn-lg"><i class="fa fa-user"></i> Free Agent Account</a>
    </div>
  </div>
</div> 
<br>

<div class="container reg_all_list">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <ul class="list-unstyled">
        <li><i class="fa fa-star-o"></i><b> Note :</b>Both account types are free.</li>
        <li><i class="fa fa-star-o"></i> You can post free ads</li>
        <li><i class="fa fa-star-o"></i> But company account has more features</li>
        <li><i class="fa fa-star-o"></i> Normal account can be upgrade to company account later</li>
        <li><i class="fa fa-star-o"></i> You can read detail difference between normal account and company account <a href="#">here</a></li>
      </ul>
    </div>
  </div>
</div>
@include('user.include.footer')