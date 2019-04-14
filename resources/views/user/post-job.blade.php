@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Post a Job</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container"> 
    
    <!--Post Job Start-->
    <div class="row">
      <div class="col-md-2 col-sm-2"></div>
      <div class="col-md-8 col-sm-8">
        <div class="login">
          <div class="contctxt">Job Information</div>
          <div class="formint conForm">
            <form>
              <div class="input-wrap">
                <input type="text" name="title" placeholder="Job Title" class="form-control">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="input-wrap">
                    <select class="form-control" name="category">
                      <option>Job Category</option>
                      <option>IT</option>
                      <option>Accounts</option>
                      <option>Marketing</option>
                      <option>Manager</option>
                      <option>Banking</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <select class="form-control" name="salary">
                      <option>Monthly Salary</option>
                      <option>$500 - $999</option>
                      <option>$999 - $1499</option>
                      <option>$1500 - $1999</option>
                      <option>$2000 - $3000</option>
                      <option>$3000+</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-wrap">
                    <select class="form-control" name="location">
                      <option>Location</option>
                      <option>New York</option>
                      <option>Atlanta</option>
                      <option>California</option>
                      <option>Verginia</option>
                      <option>San Joes</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <select class="form-control" name="Vacancies">
                      <option>Vacancies </option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-wrap">
                    <select class="form-control" name="Qualification">
                      <option>Qualification</option>
                      <option>Matric</option>
                      <option>B.A</option>
                      <option>BCSC</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-wrap">
                    <select class="form-control" name="gender">
                      <option>Gender</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-wrap">
                    <select class="form-control" name="experience">
                      <option>Experience</option>
                      <option>Fresh</option>
                      <option>1 Year</option>
                      <option>2 Years</option>
                      <option>3 Years</option>
                      <option>4 Years</option>
                      <option>5 Years</option>
                      <option>6 Years</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-wrap">
                    <select class="form-control" name="shift">
                      <option>shift</option>
                      <option>Morning</option>
                      <option>Evening</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-wrap">
                    <textarea class="form-control" placeholder="Ad Description"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="sub-btn">
                    <input type="submit" class="sbutn" value="Post Job">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-2"></div>
    </div>
    
    <!--Post Job End--> 
  </div>
</div>
<!--Inner Content End--> 

<!--footer start-->
@include('user.include.footer')