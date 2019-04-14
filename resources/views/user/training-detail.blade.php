@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Training Details</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content blog-wrap">
  <div class="container"> 
    
    <!--Blog Details Start-->
    
    <div class="row">
      
      
      <div class="col-md-8"> 
        <!-- Blog List start -->
        <div class="blogWraper blogdetail">
          <ul class="blogList">
            <li>
              <div class="postimg"><img src="{{$training_detail->photo_url}}" alt="Blog Title">
                <div class="date"> 17 SEP</div>
              </div>
              <div class="post-header margin-top30">
                <h4>{{$training_detail->title}}</h4>
                <div class="postmeta">By : <span>{{$training_detail->company_name}} </span></div>
              </div>
              <p>{{$training_detail->description}}</p>

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
                        <td><b>Start Date</b></td>
                        <td>{{$training_detail->start_date}}</td>
                      </tr>
                      <tr>
                        <td><b>End Date</b></td>
                        <td>{{$training_detail->end_date}}</td>
                      </tr>
                      <tr>
                        <td><b>Time</b></td>
                        <td>{{$training_detail->time}}</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                
            </li>
          </ul>
          <ul class="list-inline">
                <li><a href="#" style="display: block;"><i class="fa fa-facebook-square fa-lg"  style="color: #777;"></i></a></li>
                <li><a href="#" style="display: block;"><i class="fa fa-google-plus fa-lg"  style="color: #777;"></i></a></li>
                <li><a href="#" style="display: block;"><i class="fa fa-twitter fa-lg"  style="color: #777;"></i></a></li>
                <li><a href="#" style="display: block;"><i class="fa fa-instagram fa-lg"  style="color: #777;"></i></a></li>
              </ul>
        </div>
      </div>
      
      
      
      <div class="col-md-4"> 
        <!-- Side Bar -->
        <div class="sidebar"> 
          <!-- Search -->
          <div class="widget">
            <h5 class="widget-title">Search</h5>
            <div class="search">
              <form>
                <input type="text" class="form-control" placeholder="Search">
                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
          <!-- Categories -->
          <div class="widget">
            <h5 class="widget-title">Categories</h5>
            <ul class="categories">
              <li><a href="#">How to Find a Job</a></li>
              <li><a href="#">Job Market</a></li>
              <li><a href="#">Developement</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Uncategorized</a></li>
            </ul>
          </div>
          <!-- Recent List -->
          <div class="widget">
            <h5 class="widget-title">Recent List</h5>
            <ul class="papu-post">
              <li>
                <div class="media-left"> <a href="#"><img src="{{asset('img/blog/1.jpg')}}" alt="Blog Title"></a> </div>
                <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
              </li>
              <li>
                <div class="media-left"> <a href="#"><img src="{{asset('img/blog/2.jpg')}}" alt="Blog Title"></a> </div>
                <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
              </li>
              <li>
                <div class="media-left"> <a href="#"><img src="{{asset('img/blog/3.jpg')}}" alt="Blog Title"></a> </div>
                <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
              </li>
              <li>
                <div class="media-left"> <a href="#"><img src="{{asset('img/blog/4.jpg')}}" alt="Blog Title"></a> </div>
                <div class="media-body"> <a class="media-heading" href="#">Integer vel magna urna. Vestibulum id nisi</a> <span>Dec 18, 2016</span> </div>
              </li>
            </ul>
          </div>
          <!-- Archives Posts -->
          <div class="widget">
            <h5 class="widget-title">Archives</h5>
            <ul class="archive">
              <li><a href="#">June 2015<span>10</span></a></li>
              <li><a href="#">May 2015<span>21</span></a></li>
              <li><a href="#">April2015 <span>58</span></a></li>
              <li><a href="#">March 2015 <span>25</span></a></li>
            </ul>
          </div>
          <!-- Photos -->
          <div class="widget">
            <h5 class="widget-title">Photos Gallery</h5>
            <ul class="photo-steam">
              <li><a href="#"><img src="img/blog/1.jpg" alt=""></a></li>
              <li><a href="#"><img src="img/blog/2.jpg" alt=""></a></li>
              <li><a href="#"><img src="img/blog/3.jpg" alt=""></a></li>
              <li><a href="#"><img src="img/blog/4.jpg" alt=""></a></li>
              <li><a href="#"><img src="img/blog/4.jpg" alt=""></a></li>
              <li><a href="#"><img src="img/blog/3.jpg" alt=""></a></li>
              <li><a href="#"><img src="img/blog/2.jpg" alt=""></a></li>
              <li><a href="#"><img src="img/blog/1.jpg" alt=""></a></li>
            </ul>
          </div>
          <!-- Tags -->
          <div class="widget">
            <h5 class="widget-title">Tags</h5>
            <ul class="tags">
              <li><a href="#">Freelancer</a></li>
              <li><a href="#">Glassdoor</a></li>
              <li><a href="#">Job Board</a></li>
              <li><a href="#">Job Directory</a></li>
              <li><a href="#">Job Listing</a></li>
              <li><a href="#">resume</a></li>
              <li><a href="#">Job Portal</a></li>
              <li><a href="#">Job Seeker</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--Blog Details End--> 
  </div>
</div>
<!--Inner Content End--> 

<!--footer start-->
@include('user.include.footer')