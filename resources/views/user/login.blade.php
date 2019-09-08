@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Login</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container"> 
    <!--Login Start-->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="login">
          <div class="contctxt">User Login</div>
          @if(Session::has('error_msg'))
            <p style="color: red" class="col-sm-12">{{ session('error_msg') }}</p>

          @endif

          @if(Session::has('success_msg'))
            <p style="color: green" class="col-sm-12">{{ session('success_msg') }}</p>

          @endif
          <div class="formint conForm">
            <form action="{{url('api/login')}}" method="post">
              {{ csrf_field() }}

              @if(!empty($company_id) && !empty($post_id))
                <input type="hidden" value="{{$company_id}}" name="company_id">
                <input type="hidden" value="{{$post_id}}" name="post_id">
              @endif

              <div class="input-wrap">
                <label class="input-group-addon">Email</label>
                <input type="text" name="email" placeholder="User Name" class="form-control" required>
              </div>
              <div class="input-wrap">
                <label class="input-group-addon">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control" required>
              </div>
              <div class="sub-btn">
                <input type="submit" class="sbutn" value="Login">
              </div>
            <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="{{url('register')}}">Register Here</a></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
    
    <!--Login End--> 
</div>
</div>
<!--Inner Content End--> 

<!--footer start-->
@include('user.include.footer')