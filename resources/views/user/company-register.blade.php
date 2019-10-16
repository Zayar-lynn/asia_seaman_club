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
            <form method="post" action="{{url('api/businessregister')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="input-wrap">
                <input type="text" placeholder="Company Name*" required class="form-control" name="company_name">
              </div>
              <div class="input-wrap">
                <select name="type" class="form-control" required>
                  <option>--Select Type-- </option>
                  <?php
                    $arr = ['Shipping Company','SRPS/Crewing Company','Maritime University','Maritime Training School','Maritime Training Center','Maritime Organization','Maritime Institute','Customize'];
                    foreach ($arr as $data) {
                  ?>
                    <option value="{{$data}}">{{$data}}</option>
                  <?php
                    }
                  ?>
                </select>
              </div>
              <div class="input-wrap">
                <input type="text" placeholder="Contact Person Name*" required class="form-control" name="contact_person_name">
              </div>
              <div class="input-wrap">
                <input type="text" placeholder="Position*" required class="form-control" name="position">
              </div>
              <div class="input-wrap">
                <input type="tel" placeholder="Phone*" required class="form-control" name="phone">
              </div>
              <div class="input-wrap">
                <textarea name="address" id="" cols="30" rows="10" required class="form-control" placeholder="Office Address No.*"></textarea>
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
                <select name="country_id" class="form-control" required>
                  <option>--Select Country-- </option>
                  <?php
                    foreach ($countries as $country) {
                  ?>
                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                  <?php
                    }
                  ?>
                </select>
              </div>
              <div class="input-wrap">
                <input type="text" placeholder="Website URL*" required class="form-control" name="website_url">
              </div>
              <div class="input-wrap">
                <input type="email" placeholder="Email*" required class="form-control" name="email">
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
                <input type="text" placeholder="Referral Code*" required class="form-control" name="referral_code">
              </div>
              {{-- <div class="input-wrap">
                <label class="btn btn-primary upload_btn btn-block">
                  Upload<input type="file" required id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                </label>
              </div> --}}
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
