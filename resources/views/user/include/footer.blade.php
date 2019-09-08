<!--footer start-->
<div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="footer-logo"><img src="{{asset('img/footer_logo.png')}}" class="img-responsive" alt=""></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet quam eu purus rutrum suscipit eget ac lacus. Donec vel euismod odio. Suspendisse consectetur quis risus sit amet aliquam. Phasellus pretium maximus lobortis. Nam pulvinar magna ac risus condimentum fringilla. Morbi in sodales tortor, ut euismod orci. ...</p>
        <div class="read-btn"><a href="#">Read More</a></div>
      </div>
      <div class="col-md-8 col-sm-12">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <h3>Quick  LInks</h3>
            <ul class="footer-links">
              <li><a href="#.">About Us</a></li>
              <li><a href="#.">Career Resources</a></li>
              <li><a href="#.">Categories</a></li>
              <li><a href="#.">Blog</a></li>
              <li><a href="#.">Terms of Service</a></li>
              <li><a href="#.">Privacy Policy</a></li>
              <li><a href="#.">Register</a></li>
              <li><a href="#.">Submit Resume</a></li>
              <li><a href="#.">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-4">
            <h3>Jobs in Pakistan</h3>
            <ul class="footer-links">
              <li><a href="#">New York</a></li>
              <li><a href="#">Dothan</a></li>
              <li><a href="#">Alexander City</a></li>
              <li><a href="#">Enterprise</a></li>
              <li><a href="#">Chickasaw</a></li>
              <li><a href="#">Clanton</a></li>
              <li><a href="#">Cullman</a></li>
              <li><a href="#">Andalusia</a></li>
              <li><a href="#">Anniston</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-4">
            <h3>Jobs by Categories</h3>
            <ul class="footer-links">
              <li><a href="#">Computer Software Jobs</a></li>
              <li><a href="#">Customer Service Jobs</a></li>
              <li><a href="#">Education Jobs</a></li>
              <li><a href="#">Engineering Jobs</a></li>
              <li><a href="#">Manager/Supervisor Jobs</a></li>
              <li><a href="#">Sr. Executive Jobs</a></li>
              <li><a href="#">School/College Student Jobs</a></li>
              <li><a href="#">Web & E-commerce Jobs</a></li>
              <li><a href="#">Accounting Jobs</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--footer end--> 

<!--copyright start-->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="copyright">Copyright © <?php echo date('Y'); ?> Job Finder - All Rights Reserved.</div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="social">
          <div class="followWrp"> <span>Follow Us</span>
            <ul class="social-wrap">
              <li><a href="#."><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#."><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#."><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="#."><i class="fa fa-vimeo-square" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="scroll_top" data-toggle='tooltip' title="Back to top"><i class="fa fa-angle-up"></i></div>
<!--copyright end--> 

<!-- jQuery (necessary for Bootstraps JavaScript plugins) --> 
<script src="{{url('js/jquery-2.1.4.min.js')}}"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="{{url('js/bootstrap.min.js')}}"></script> 

<!-- general script file --> 
<script src="{{url('js/owl.carousel.js')}}"></script> 
<script src="{{url('fancybox-master/dist/jquery.fancybox.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/script.js')}}"></script>
//yyk
<script src="{{url('js/function.js')}}"></script>

<!-- for freeman register -->
<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN':$('meta[name="csrf_token"]').attr('content')
      }
  });

  $('#insert_freeman').on('submit',function (e)
  {
    e.preventDefault();
    var alldata = new FormData(this);
    $.ajax
    ({
        type: "POST",
        url: "{{url('/upload_freeman_photo')}}",
        data:alldata,
        cache:false,
        processData: false,
        contentType: false,
        success: function(data){
        var front_photo = data['0'];
        var back_photo = data['1'];
        $('#front_photo_link').val(front_photo);
        $('#back_photo_link').val(back_photo);
        //console.log(front_photo);
        //$('#insert_freeman')[0].reset();

        alldata.append('front_photo_link',$('#front_photo_link').val());
        alldata.append('back_photo_link',$('#back_photo_link').val());
        $.ajax
            ({
                type: "POST",
                url: "{{url('api/freeagentregister')}}",
                data:alldata,
                cache:false,
                processData: false,
                contentType: false,
                success: function(data){
                  //console.log(data);
                  $('#insert_freeman')[0].reset();
                  alert('Success');
              }
            });
        
    }
    });
    
    return false;
  });

  $('#insert_seafarer_post').on('submit',function (e)
  {
    e.preventDefault();
    var alldata = new FormData(this);
    $.ajax
    ({
        type: "POST",
        url: "{{url('/upload_seafarer_post_photo')}}",
        data:alldata,
        cache:false,
        processData: false,
        contentType: false,
        success: function(data){
        var seafarer_post_photo = data['0'];
        $('#seafarer_post_photo_link').val(seafarer_post_photo);
        //console.log(front_photo);
        //$('#insert_freeman')[0].reset();

        alldata.append('seafarer_post_photo_link',$('#seafarer_post_photo_link').val());
        $.ajax
            ({
                type: "POST",
                url: "{{url('/insert/seafarer_post')}}",
                data:alldata,
                cache:false,
                processData: false,
                contentType: false,
                success: function(data){
                  //console.log(data);
                  $('#insert_seafarer_post')[0].reset();
                  $('#image').attr('src','http://localhost/asia_seaman_club/public/images/default.jpg');
                  alert('Success');
                  $('#modalBox').modal('hide');
              }
            });
        
    }
    });
    
    return false;
  });
</script>

</body>
</html>