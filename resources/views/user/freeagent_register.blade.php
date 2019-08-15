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
            <form id="insert_freeman" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="input-wrap">
                <input type="text" placeholder="Agent Name*" required class="form-control" name="agentcompany">
              </div>
              <div class="input-wrap">
                <input type="text" placeholder="Occupation*" required class="form-control" name="occupation">
              </div>
              <div class="input-wrap">
                <input type="text" placeholder="Identification card*" required class="form-control" name="id_card">
              </div>
              <div class="input-wrap">
                <label for="">Front Photo</label>
                <input type="file"required name="front_photo" id="front_photo" value="">
              </div>
              <div class="input-wrap">
                  <label for="">Back Photo</label>
                  <input type="file"required name="back_photo" id="back_photo" value="">
                </div>
              <div class="input-wrap">
                <input type="tel" placeholder="Phone*" required class="form-control" name="phone">
              </div>
              <div class="input-wrap">
                <textarea name="address" id="" cols="30" rows="5" required class="form-control" placeholder="Address*"></textarea>
              </div>
              <div class="input-wrap">
                <input type="text" placeholder="Street*" required class="form-control" name="street">
              </div>
              <div class="input-wrap">
                <input type="text" placeholder="City*" required class="form-control" name="city">
              </div>
              <div class="input-wrap">
                <input type="text" placeholder="State*" required class="form-control" name="state">
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
                <input type="text" placeholder="Referral Code*" required class="form-control" name="referral_code">
              </div>
              <input type="hidden" name="front_photo_link" id="front_photo_link" value="">
              <input type="hidden" name="back_photo_link" id="back_photo_link" value="">
              {{-- <div class="input-wrap">
                <label class="btn btn-primary upload_btn btn-block">
                  Upload<input type="file" id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                </label>
              </div> --}}
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