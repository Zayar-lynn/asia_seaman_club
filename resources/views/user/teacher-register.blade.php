@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Teacher</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container"> 
    <!--Register Start-->
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div class="login">
          <div class="contctxt">Teacher Register</div>
          <div class="formint conForm">
            <form method="post" action="{{url('/teacherregister')}}">
              {{csrf_field()}}
              <div class="input-wrap">
                <input type="text" placeholder="Name*" required class="form-control" name="teachername">
              </div>
              <div class="input-wrap">
                <input type="tel" placeholder="Phone*" required class="form-control" name="phone">
              </div>
              <div class="input-wrap">
                <input type="email" placeholder="Email*" required class="form-control" name="email">
              </div>
              <div class="input-wrap">
                <input type="password" name="password" placeholder="Password*" class="form-control" required>
              </div>
              <div class="input-wrap">
                <input type="password" name="password_confirmation" placeholder="Retype-Password*" class="form-control" required>
              </div>
              <div class="sub-btn">
                <input type="submit" class="sbutn" value="Register Now">
              </div>
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="application-form.php"><!-- Register Here --> Test</a></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-2"></div>
    </div>
    
    <!--Register End--> 
</div>
</div>
<!--Inner Content End--> 




@include('user.include.footer')