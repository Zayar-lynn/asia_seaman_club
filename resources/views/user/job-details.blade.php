@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Job Details</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content listing detail">
  <div class="container"> 
    
    <!--Detail page start-->
    <div class="inner-wrap">
      <div class="row">
        <div class="col-md-8">
          <div class="listWrpService jobdetail">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="listImg"><img src="{{$job_detail->photo_url}}" alt=""></div>
              </div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <h3>{{$job_detail->rank}}</h3>
                <p>{{$job_detail->company_name}}</p>
                <ul class="featureInfo">
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{$job_detail->company_address}}</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Dec 30, 2015 - Feb 20, 2016 </li>
                </ul>
                <!-- <div class="time-btn">Part Time</div> -->
                <div class="click-btn"><a href="{{url('apply/'.$job_detail->company_id.'/'.$job_detail->id)}}">Apply Now</a></div>
              </div>
            </div>
            <h2>Discription</h2>
            <p>{{$job_detail->description}}
              <br><br>
              <div class="table-responsive">
                  <table class="table table-hovered table-bordered">
                    {{-- <thead>
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
                    </thead> --}}
                    <tbody>
                      <tr>
                        <td><b>Position</b></td>
                        <td>{{$job_detail->position_name}}</td>
                      </tr>
                      <tr>
                        <td><b>Vancant</b></td>
                        <td>{{$job_detail->vancant}}</td>
                      </tr>
                      <tr>
                        <td><b>Salary</b></td>
                        <td>{{$job_detail->salary}}</td>
                      </tr>
                      <tr>
                        <td><b>Join Date</b></td>
                        <td>{{$job_detail->join_date}}</td>
                      </tr>
                      <tr>
                        <td><b>Duration of Contract</b></td>
                        <td>{{$job_detail->contract_duration}}</td>
                      </tr>
                      <tr>
                        <td><b>Requirement</b></td>
                        <td>{{$job_detail->requirement}}</td>
                      </tr>
                      <tr>
                        <td><b>Vessel Name</b></td>
                        <td>{{$job_detail->vessel_name}}</td>
                      </tr>
                      <tr>
                        <td><b>Vessel Type</b></td>
                        <td>{{$job_detail->vessel_type}}</td>
                      </tr>
                      <tr>
                        <td><b>Build Year</b></td>
                        <td>{{$job_detail->build_year}}</td>
                      </tr>
                      <tr>
                        <td><b>D.W.T</b></td>
                        <td>{{$job_detail->dwt}}</td>
                      </tr>
                      <tr>
                        <td><b>Flage</b></td>
                        <td>{{$job_detail->flage}}</td>
                      </tr>
                      <tr>
                        <td><b>Main Engine</b></td>
                        <td>{{$job_detail->main_engine}}</td>
                      </tr>
                      <tr>
                        <td><b>Crew Onboard</b></td>
                        <td>{{$job_detail->crew_onboard}}</td>
                      </tr>
                      <tr>
                        <td><b>Sailing Area</b></td>
                        <td>{{$job_detail->sailing_area}}</td>
                      </tr>
                      <tr>
                        <td><b>English level</b></td>
                        <td>{{$job_detail->english_level}}</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>

            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="sidebarWrp listWrpService jobdetail">
            <h3>About Company</h3>
            <p>{{$job_detail->company_about}}</p>
            <div class="companyInfo">Industry</div>
            <p>{{$job_detail->company_name}}</p>
            <div class="companyInfo">No. of Employees</div>
            <p>99</p>
            <div class="companyInfo">Location</div>
            <p>{{$job_detail->company_address}}</p>
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30593401584!2d-74.25986539089548!3d40.69714941954754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1506615745397" width="100" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <form>
              <div class="contactWrp">
                <h3>Contact Now</h3>
                <div class="input-wrap">
                  <input type="text" name="" placeholder="Name:" class="form-control">
                </div>
                <div class="input-wrap">
                  <input type="text" name="" placeholder="Name:" class="form-control">
                </div>
                <div class="input-wrap">
                  <input type="text" name="" placeholder="Your Email" class="form-control">
                </div>
                <div class="input-wrap">
                  <textarea class="form-control" placeholder="Type Your Message here.."></textarea>
                </div>
                <div class="contact-btn">
                  <button class="sub" type="submit" value="submit" name="submitted"> Submit Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--Detail page end--> 
    
  </div>
</div>
<!--Inner Content end--> 

<!--footer start-->
@include('user.include.footer')