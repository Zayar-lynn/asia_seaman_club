@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Company Register</h3>
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
          <div class="contctxt">Company Register</div>
          <div class="formint conForm">
            <form method="post" action="{{url('/businessregister')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="input-wrap">
                <input type="text" placeholder="Company Name*" required class="form-control" name="companyname">
              </div>
              <div class="input-wrap">
                <input type="tel" placeholder="Phone*" required class="form-control" name="phone">
              </div>
              <div class="input-wrap">
                <input type="email" placeholder="Email*" required class="form-control" name="email">
              </div>
              <div class="input-wrap">
                <select name="type" class="form-control">
                  <option>--Select Company-- </option>
                  <option value="training">Maritine training </option>
                  <option value="company">SRPS</option>
                </select>
              </div>
              <!-- <div class="input-wrap">
                <input type="text" name="code" placeholder="Zip code" class="form-control">
              </div> -->
              <div class="input-wrap">
                <input type="password" placeholder="Password*" required class="form-control" name="password">
              </div>
              <div class="input-wrap">
                <input type="password" placeholder="Retype-Password*" required class="form-control" name="password_confirmation">
              </div>
              <div class="input-wrap">
                <textarea name="address" id="" cols="30" rows="10" required class="form-control" placeholder="Address*"></textarea>
              </div>
              <div class="input-wrap">
                <textarea name="whatwedo" id="" cols="30" rows="10" required class="form-control" placeholder="What we do*"></textarea>
              </div>
              <div class="input-wrap">
                <textarea name="whyjoinus" id="" cols="30" rows="10" required class="form-control" placeholder="Why join us*"></textarea>
              </div>
              <div class="input-wrap">
                <textarea name="workplace" id="" cols="30" rows="10" required class="form-control" placeholder="Workplace and culture*"></textarea>
              </div>
              <div class="input-wrap">
                <input type="text" placeholder="Facebook URL*" required class="form-control" name="facebook">
              </div>
              <div class="input-wrap">
                <input type="text" placeholder="Website URL*" required class="form-control" name="website">
              </div>
              <div class="input-wrap">
                <label class="btn btn-primary upload_btn btn-block">
                  Upload<input type="file" required id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                </label>
              </div>
              <div class="sub-btn">
                <input type="submit" class="sbutn" value="Register Now" name="register">
              </div>
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Already User? <a href="{{url('/login')}}">Login Here</a></div>
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
