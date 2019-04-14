@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Free Agent Register</h3>
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
          <div class="contctxt">Free Agent Register</div>
          <div class="formint conForm">
            <form method="post" action="{{url('/freeagentregister')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="input-wrap">
                <input type="text" placeholder="Agent Name*" required class="form-control" name="agentcompany">
              </div>
              <div class="input-wrap">
                <input type="tel" placeholder="Phone*" required class="form-control" name="phone">
              </div>
              <div class="input-wrap">
                <input type="email" placeholder="Email*" required class="form-control" name="email">
              </div>
              <div class="input-wrap">
                <input type="password" placeholder="Password*" required class="form-control" name="password">
              </div>
              <div class="input-wrap">
                <input type="password" placeholder="Retype-Password*" required class="form-control" name="password_confirmation">
              </div>
              <div class="input-wrap">
                <textarea name="address" id="" cols="30" rows="5" required class="form-control" placeholder="Address*"></textarea>
              </div>
              <div class="input-wrap">
                <textarea name="whatwedo" id="" cols="30" rows="5" required class="form-control" placeholder="What We Do*"></textarea>
              </div>
              <div class="input-wrap">
                <label class="btn btn-primary upload_btn btn-block">
                  Upload<input type="file" id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                </label>
              </div>
              <div class="sub-btn">
                <input type="submit" class="sbutn" value="Register Now" name="register">
              </div>
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="#.">Register Here</a></div>
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

<!--footer start-->
@include('user.include.footer')