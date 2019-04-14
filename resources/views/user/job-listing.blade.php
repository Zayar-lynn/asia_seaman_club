@include('user.include.header')
<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Job Listing</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content listing">
  <div class="container"> 
    
    <!--Job Listing Start-->
    <div class="row">
      <div class="col-md-3 col-sm-4">
        @foreach($ads as $item)
          <br>
          <img src="{{$item['photo_url']}}" alt="" class="img-responsive" style="height: 150px;">

        @endforeach
      </div>
      <div class="col-md-9 col-sm-8">
        
        <ul class="listService">
          @foreach($company_jobs as $company_job)
          <li>
            <div class="listWrpService featured-wrap">
              <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-3">
                  <div class="listImg"><img src="{{$company_job->photo_url}}" alt=""></div>
                </div>
                <div class="col-md-10 col-sm-9 col-xs-9">
                
                <div class="row">
                <div class="col-md-9">
                  <h3><a href="{{url('company_profile/'.$company_job->company_id)}}">{{$company_job->company_name}}</a></h3>
                  <p>{{$company_job->rank}}</p>
                  <ul class="featureInfo innerfeat">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{$company_job->company_address}}</li>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i> Dec 30, 2015 - Feb 20, 2016 </li>
                    
                  </ul>
                  
                  
                  {{--<p class="para">--}}
                      {{--{{substr($company_job->description,0,150)}}--}}
                      {{--{{strlen($company_job->description) > 150 ? '...' : '' }}--}}
                  {{--</p> --}}
                  
                  </div>
                  
                  <div class="col-md-3">
                  <div class="click-btn apply"><a href="{{url('job_detail/'.$company_job->id)}}">More Detail</a></div>
                  
                  
                  </div>
                  </div>
                  
                  
                </div>
              </div>
            </div>
          </li>
          @endforeach
      
        </ul>
        <div class="pagiWrap">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="showreslt">Showing 1-10</div>
            </div>
            <div class="col-md-8 col-sm-8">
              <ul class="pagination">
               {{$paginate->links()}}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--Job Listing End--> 
  </div>
</div>
<!--Inner Content End--> 

<!--footer start-->
@include('user.include.footer')