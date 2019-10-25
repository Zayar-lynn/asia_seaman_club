@extends('admin.layouts.company_admin.site_admin_design')

@section('css')
    <meta name="csrf_token" content="{{csrf_token()}}">
    {{--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">--}}
    {{--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>--}}
    {{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <style>
        .imagePreview {
            width: 100%;
            height: 150px;
            background-position: center center;
            background:url('http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');
            background-color:#fff;
            background-size: cover;
            background-repeat:no-repeat;
            display: inline-block;
            box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
        }
        .upload_btn
        {
            display:block;
            border-radius:10px;
            box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
            margin-bottom: 15px;
        }
        .imgUp
        {
            margin-bottom:15px;
        }
    </style>

    @endsection
@section('nav_bar_text')
    Manage Training Post
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <button type="button" name="button" class="btn btn-success pull-right" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Add</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class=" text-primary">
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Photo
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Duration
                                        </th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- insert_model --}}
        <div class="modal fade" id="modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Insert Form</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form id="insert_trainingpost" enctype="multipart/form-data" class="md-form">
                              {{csrf_field()}}
                              <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                              <div class="row">
                                  <div class="col-sm-4 imgUp">
                                      {{--<img src="{{asset('images/default.jpg')}}" class="img-thumbnail" id="image" class="imagePreview">--}}
                                      {{--onchange="displaySelectedPhoto('upload_photo','image')"--}}
                                      <label class="btn btn-primary upload_btn">
                                          Upload<input type="file" id="upload_photo" name="photo[]" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required multiple>
                                      </label>
                                  </div>
                                  <div class="col-sm-8">
                                      <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{-- <label for="vancant">Vancant</label> --}}
                                                <input type="text" name="title" id="title" class="form-control" required placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="duration" id="duration" class="form-control" required placeholder="Duration">
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <label for="">Start Date</label>
                                            <input type="date" name="start_date" id="start_date" class="form-control" required placeholder="Start Date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">End Date</label>
                                            <input type="date" name="end_date" id="end_date" class="form-control" required placeholder="End Date">
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="training_for" rows="5" class="form-control" id="training_for" required placeholder="Training for"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="requirement" rows="5" class="form-control" id="requirement" required placeholder="Requriement"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Post Start Time</label>
                                        <input type="time" name="start_time" id="start_time" class="form-control" required placeholder="Start Time">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Post End Time</label>
                                        <input type="time" name="end_time" id="end_time" class="form-control" required placeholder="End Time">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="training_fee_amount" id="training_fee_amount" class="form-control" required placeholder="Training Fee Amount">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="fee_type" id="fee_type" class="form-control" required placeholder="Fee Type">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="enroll_limit" id="enroll_limit" class="form-control" required placeholder="Enroll Limit">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="contact_no" id="contact_no" class="form-control" required placeholder="Contact No">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="online_banking" id="online_banking" class="form-control" required placeholder="Online Banking">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="benificiary_name" id="benificiary_name" class="form-control" required placeholder="Benificiary Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vancant">Post Start Date</label>
                                        <input type="date" name="post_start_date" id="post_start_date" class="form-control" required placeholder="Post Start Date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vancant">Post End Date</label>
                                        <input type="date" name="post_end_date" id="post_end_date" class="form-control" required placeholder="Post End Date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="account_number" id="account_number" class="form-control" required placeholder="Account Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="fee_point" id="fee_point" class="form-control" required placeholder="Fee Point">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label for="des">Description</label> --}}
                                        <textarea name="description" rows="5" class="form-control" id="description" required placeholder="Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="photo_link" id="photo_link" value="">
                              <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Create</button>
                              <div class="clearfix"></div>
                          </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit modal -->
        <div class="modal fade" id="edit_modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Form</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">


                        <form id="update_data">
                            {{csrf_field()}}
                            <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                        
                            <div class="row">
                                    <div class="col-sm-4 imgUp">
                                        <img src="{{asset('images/default.jpg')}}" class="img-thumbnail" id="imgs" class="imagePreview">
                                        <label class="btn btn-primary upload_btn">
                                                Upload<input type="file" onchange="displaySelectedPhoto('update_upload_photo','imgs')" id="update_upload_photo" name="photo[]" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                            </label>
                                    </div>
                                    
                                    <div class="col-sm-8">
                                        <div class="row">
  
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  {{-- <label for="vancant">Vancant</label> --}}
                                                  <input type="text" name="title" id="update_title" class="form-control" required placeholder="Title">
                                              </div>
                                          </div>
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <input type="text" name="duration" id="update_duration" class="form-control" required placeholder="Duration">
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                               <label for="">Start Date</label>
                                              <input type="date" name="start_date" id="update_start_date" class="form-control" required placeholder="Start Date">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">End Date</label>
                                              <input type="date" name="end_date" id="update_end_date" class="form-control" required placeholder="End Date">
                                          </div>
                                      </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <textarea name="training_for" rows="5" class="form-control" id="update_training_for" required placeholder="Training for"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <textarea name="requirement" rows="5" class="form-control" id="update_requirement" required placeholder="Requriement"></textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Post Start Time</label>
                                          <input type="time" name="start_time" id="update_start_time" class="form-control" required placeholder="Start Time">
                                      </div>
                                  </div>
                                  
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="">Post End Time</label>
                                          <input type="time" name="end_time" id="update_end_time" class="form-control" required placeholder="End Time">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <input type="number" name="training_fee_amount" id="update_training_fee_amount" class="form-control" required placeholder="Training Fee Amount">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="fee_type" id="update_fee_type" class="form-control" required placeholder="Fee Type">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="enroll_limit" id="update_enroll_limit" class="form-control" required placeholder="Enroll Limit">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="contact_no" id="update_contact_no" class="form-control" required placeholder="Contact No">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="online_banking" id="update_online_banking" class="form-control" required placeholder="Online Banking">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="benificiary_name" id="update_benificiary_name" class="form-control" required placeholder="Benificiary Name">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="vancant">Post Start Date</label>
                                          <input type="date" name="post_start_date" id="update_post_start_date" class="form-control" required placeholder="Post Start Date">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="vancant">Post End Date</label>
                                          <input type="date" name="post_end_date" id="update_post_end_date" class="form-control" required placeholder="Post End Date">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="account_number" id="update_account_number" class="form-control" required placeholder="Account Number">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="fee_point" id="update_fee_point" class="form-control" required placeholder="Fee Point">
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          {{-- <label for="des">Description</label> --}}
                                          <textarea name="description" rows="5" class="form-control" id="update_description" required placeholder="Description"></textarea>
                                      </div>
                                  </div>
                              </div>

                              <button class=" btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary pull-right" id="update_btn">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
              

    </div>
@endsection

@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
{{--<script>--}}
    {{--$(document).ready(function() {--}}
        {{--$('#summernote').summernote();--}}
    {{--});--}}
{{--</script>--}}

    <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':$('meta[name="csrf_token"]').attr('content')
                }
            });

            $(document).ready(function(){

                var dt = $('#datatable').DataTable({
                  "ordering": false,
                  // "paging": false,
                  "bInfo" : false,
                  // "bPaginate": false,
                  "bLengthChange": false
                  // "bFilter": true,
                  // "bAutoWidth": false
                });

                function reset(){
                    $('#update_data')[0].reset();
                }

                load();

                function load(){
                    $.ajax({
                    type: "GET",
                    url: "{{url('active_training_posts')}}",

                    cache: false,
                    success: function(data){
                        //var data_return=JSON.parse(data);
                        console.log(data['posts']);
                        dt.clear();
                        var no = 1;
                        for(var i = 0;i<data['posts'].length;i++){
                          var link=window.location.href+"../../../job_detail/"+data['posts'][i]['id'];
                            dt.row.add( [
                                no++,
                                '<img src="'+data['posts'][i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                                data['posts'][i]['title'],
                                data['posts'][i]['description'],
                                data['posts'][i]['duration'],
                                '<a href="'+link+'" class="btn btn-primary btn-sm" target="_blank">Detail</a>',
                                '<button class="btn btn-danger btn-sm" onclick="delete_data('+data['posts'][i]['id']+')">Delete</button>',
                                '<button class="btn btn-info btn-sm" onclick="edit_data('+data['posts'][i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>'
                            ] ).draw( false );
                        }

                        $('#insert_trainingpost')[0].reset();
                        $('#image').attr('src','http://localhost/asia_seaman_club/public/images/default.jpg');

                    }
                    });
                }

                $('#insert_trainingpost').on('submit',function (e)
                {
                    e.preventDefault();
                    var alldata = new FormData(this);
                    
                    $.ajax
                    ({
                        type: "POST",
                        url: "{{url('api/upload_training_post_photo')}}",
                        data:alldata,
                        cache:false,
                        processData: false,
                        contentType: false,
                        success: function(data){
                        //console.log(data);
                        // $('#photo_link').val(data);
                        var photo_str=JSON.stringify(data);
                        alldata.append('photo',photo_str);
                        
                        $.ajax
                        ({
                            type: "POST",
                            url: "{{url('api/insert/training_post')}}",
                            data:alldata,
                            cache:false,
                            processData: false,
                            contentType: false,
                            success: function(data){
                                console.log(data);
                                $('#modalBox').modal('hide');
                                toastr.success('Insert data successful');
                                load();
                        }
                        });
                        
                    }
                    });
                    return false;
                });

                delete_data=function(id){
                    if(confirm('Are you sure You want to delete!')==true){
                        $.ajax({
                            type: "GET",
                            url: "../api/delete_training_post/"+id,

                            cache: false,
                            success: function(data){
                                toastr.success('Delete data successful');
                                load();
                            }
                          });
                    }else{
                        return false;
                    }
                }

                edit_data=function(id){

                    $.ajax({
                      type: "GET",
                      url: "../training_post_detail/"+id,

                      cache: false,
                      success: function(data){
                        //reset();
                        //var jobpost=JSON.parse(data);
                        var jobpost=data;
                        console.log(jobpost);
                        $("#imgs").attr("src", jobpost['photo_url']);
                        $('#id_edit').val(jobpost['id']);
                        $('#update_title').val(jobpost['title']);
                        $('#update_duration').val(jobpost['duration']);
                        $('#update_training_for').val(jobpost['training_for']);
                        $('#update_requirement').val(jobpost['requirement']);
                        $('#update_start_date').val(jobpost['start_date']);
                        $('#update_end_date').val(jobpost['end_date']);
                        $('#update_start_time').val(jobpost['start_time']);
                        $('#update_end_time').val(jobpost['end_time']);
                        $('#update_training_fee_amount').val(jobpost['training_fee_amount']);
                        $('#update_fee_type').val(jobpost['fee_type']);
                        $('#update_enroll_limit').val(jobpost['enroll_limit']);
                        $('#update_contact_no').val(jobpost['contact_no']);
                        $('#update_online_banking').val(jobpost['online_banking']);
                        $('#update_benificiary_name').val(jobpost['benificiary_name']);
                        $('#update_description').val(jobpost['description']);
                        $('#update_account_number').val(jobpost['account_number']);
                        $('#update_post_start_date').val(jobpost['post_start_date']);
                        $('#update_post_end_date').val(jobpost['post_end_date']);
                        $('#update_fee_point').val(jobpost['fee_point']);

                        $('#edit_modalBox').modal('show');
                      }
                    });
                }

                $('#update_data').on('submit',function (e)
                {
                e.preventDefault();
                var updateData = new FormData(this);
                var id = $('#id_edit').val();
                var update_photo = $('#update_upload_photo').val();
                    if(update_photo){
                        $.ajax
                        ({
                            type: "POST",
                            url: "{{url('api/upload_training_post_photo')}}",
                            data:updateData,
                            cache:false,
                            processData: false,
                            contentType: false,
                            success: function(data){
                                var photo_str=JSON.stringify(data);
                                updateData.append('photo_url',photo_str);
                                console.log(updateData.get('photo_url'));
                                $.ajax
                                ({
                                    type: 'POST',
                                    url: "../api/edit_training_post/"+id,
                                    data:updateData,
                                    cache:false,
                                    processData: false,
                                    contentType: false,
                                    success: function(data){
                                        console.log(data);
                                        //alert(data);
                                        $('#edit_modalBox').modal('hide');
                                        load();
                                    }
                                });
                            }
                        });
                    }else{
                        $.ajax
                        ({
                            type: 'POST',
                            url: "../api/edit_training_post/"+id,
                            data:updateData,
                            cache:false,
                            processData: false,
                            contentType: false,
                            success: function(data){
                                console.log(data);
                                //alert(data);
                                $('#edit_modalBox').modal('hide');
                                load();
                            }
                        });
                    }
                });
            });
    </script>

@endsection
