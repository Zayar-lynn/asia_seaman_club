@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Contact Us</h3>
  </div>
</div>
<!--inner heading end--> 


<!--Inner Content start-->
<div class="inner-content contact-now"> 
<div class="container">  

  <!--Contact Start-->
  <div class="row">
	      <div class="col-md-4">
        <div class="contact"> <span><i class="fa fa-home"></i></span>
          <div class="information"> <strong>Address:</strong>
            <p>1234 Lorem Road, ISpum A Kennesaw, GA 1234</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact"> <span><i class="fa fa-phone"></i></span>
          <div class="information"> <strong>Phone No:</strong>
            <p>(777) 123 4567</p>
            <p>(777) 123 4567</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact"> <span><i class="fa fa-envelope"></i></span>
          <div class="information"> <strong>Email Address:</strong>
            <p>info@yoursite.com</p>
          </div>
        </div>
      </div>
    </div>  
    
    
    
    <div class="row formCont">
      <div class="col-md-6">
        <form method="post" action="{{url('/contact')}}">
          {{csrf_field()}}
          <div class="row">
            <div class="col-sm-6">
              <div class="input-wrap">
                <input type="text" name="name" placeholder="Full Name" class="form-control" required>
                <div class="form-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-wrap">
                <input type="text" name="phone" placeholder="Your Phone" class="form-control" required>
                <div class="form-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
          <div class="input-wrap">
            <input type="text" name="email" placeholder="Your Email" class="form-control" required>
            <div class="form-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
          </div>
          <div class="input-wrap">
            <textarea class="form-control" name="message" placeholder="Type Your Message here.." required></textarea>
            <div class="form-icon"><i class="fa fa-comment" aria-hidden="true"></i></div>
          </div>
          <div class="contact-btn">
            <button class="sub" type="submit" value="submit" name="submitted"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Send Message</button>
          </div>
        </form>
      </div>
      <div class="col-md-6">
      <div class="mapWrp">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3439665.415133291!2d-85.42187768895461!3d32.658159955276645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f136c51d5f8157%3A0x6684bc10ec4f10e7!2sGeorgia!5e0!3m2!1sen!2sus!4v1505905563776" width="100" height="300" style="border:0" allowfullscreen=""></iframe>
      </div>
      </div>
    </div>
    
    
  <!--Contact End--> 
  
  </div>
</div>
<!--Inner Content End-->
@include('user.include.footer')