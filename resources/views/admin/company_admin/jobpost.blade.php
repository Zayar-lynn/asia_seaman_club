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
    Manage Job Post
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
                                    <thead class=" text-success">
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
                      <form id="insert_jobpost" enctype="multipart/form-data" class="md-form">
                              {{csrf_field()}}

                              <div class="row">
                                  <div class="col-sm-4 imgUp">
                                      <img src="{{asset('images/default.jpg')}}" class="img-thumbnail" id="image" class="imagePreview">
                                      <label class="btn btn-primary upload_btn">
                                          Upload<input type="file" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                      </label>
                                  </div>
                                  <div class="col-sm-8">
                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input list="position" name="position" class="form-control" placeholder="Position">
                                                <datalist id="position">
                                                    <option value="Internet Explorer">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{-- <label for="vancant">Vancant</label> --}}
                                                <input type="text" name="vancant" id="vancant" class="form-control" required placeholder="Vancant">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{-- <label for="salary">Salary</label> --}}
                                                <input type="text" name="salary" id="salary" class="form-control" required placeholder="Salary">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input list="join_date" name="join_date" class="form-control" placeholder="Join Date">
                                                <datalist id="join_date">
                                                    <option value="Internet Explorer">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="contract_duration" id="contract_duration" class="form-control" required placeholder="Duration of contract">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="english_level" id="english_level" class="form-control" required placeholder="Level of English">
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="requirement" rows="5" class="form-control" id="requirement" required placeholder="Requriement"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="vessel_name" id="vessel_name" class="form-control" required placeholder="Vessel Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input list="vessel_type" name="vessel_type" class="form-control" placeholder="Vessel Type">
                                        <datalist id="join_date">
                                            <option value="Internet Explorer">
                                            <option value="Firefox">
                                            <option value="Chrome">
                                            <option value="Opera">
                                            <option value="Safari">
                                        </datalist>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="year" name="build_year" id="build_year" class="form-control" required placeholder="Build Year">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="dwt" id="dwt" class="form-control" required placeholder="D.W.T">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="flage" id="flage" class="form-control" required placeholder="Flag">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="main_engine" id="main_engine" class="form-control" required placeholder="Main Engine">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="crew_onboard" id="crew_onboard" class="form-control" required placeholder="Crew Onboard">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input list="sailing_area" name="sailing_area" class="form-control" placeholder="Sailing Area">
                                        <datalist id="sailing_area">
                                            <option value="Internet Explorer">
                                            <option value="Firefox">
                                            <option value="Chrome">
                                            <option value="Opera">
                                            <option value="Safari">
                                        </datalist>
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

                              <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Create</button>
                              <div class="clearfix"></div>
                          </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit modal -->
                <div class="modal fade" id="edit_modalBox">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Form</h4>
                                <button data-dismiss="modal" class="close">&times;</button>
                            </div>
                            <div class="modal-body">


                                <form id="update_data">
                                    {{csrf_field()}}

                                    <div class="row">
                                      <div class="col-sm-6">
                                        <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                        <img src="{{asset('images/default.jpg')}}" class="img-thumbnail" alt="" id="imgs" class="imagePreview" style="width: 100%;height: 150px;">
                                        <label class="btn btn-primary upload_btn">
                                            Upload<input type="file" onchange="displaySelectedPhoto('update_photo','imgs')" id="update_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                        </label>
                                      </div>
                                      <div class="col-sm-6">
                                          <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="update_title">Title</label>
                                                  <textarea name="title" id="update_title" class="form-control" rows="1"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                  <select name="deparment_type" id="update_dep" class="form-control">
                                                      <option value="">Department Type</option>
                                                      
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="update_author">Author</label>
                                                    <textarea name="author" rows="1" class="form-control" id="update_author" required></textarea>
                                                </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{-- <label for="update_des
                                                ">Description</label> --}}
                                                <textarea name="des" rows="8" class="form-control" id="update_des"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class=" btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary pull-right" id="update_btn">Update</button>

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

                var dt = $('#show').DataTable({
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
                    type: "POST",
                    url: "{{url('get_all_jobpost')}}",

                    cache: false,
                    success: function(data){
                        var data_return=JSON.parse(data);
                        //console.log(data);
                        dt.clear();
                        var no = 1;
                        for(var i = 0;i<data_return.length;i++){
                          var link=window.location.href+"../../../job_detail/"+data_return[i]['id'];
                            dt.row.add( [
                                no++,
                                data_return[i]['rank'],
                                data_return[i]['salary'],
                                data_return[i]['contract_time'],
                                data_return[i]['shiptype_id'],
                                data_return[i]['english_level'],
                                '<a href="'+link+'" class="btn btn-primary btn-sm" target="_blank">Detail</a>',
                                '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>',
                                '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>'
                            ] ).draw( false );
                        }

                        $('#insert_jobpost')[0].reset();
                        $('#image').attr('src','http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');

                    }
                    });
                }

                $('#insert_jobpost').on('submit',function (e)
                {
                    e.preventDefault();
                    var alldata = new FormData(this);
                    $.ajax
                    ({
                        type: "POST",
                        url: "{{url('insert/jobpost')}}",
                        data:alldata,
                        cache:false,
                        processData: false,
                        contentType: false,
                        success: function(data){
                        alert('Success');
                        console.log(data);
                        load();
                        $('#insert_jobpost')[0].reset();
                    }
                    });
                    return false;
                });

                delete_data=function(id){
                    if(confirm('Are you sure You want to delete!')==true){
                        $.ajax({
                            type: "POST",
                            url: "../delete/jobpost/"+id,

                            cache: false,
                            success: function(data){
                                alert('Success');
                                load();
                            }
                          });
                    }else{
                        return false;
                    }
                }

                edit_data=function(id){

                    $.ajax({
                      type: "POST",
                      url: "../edit/jobpost/"+id,

                      cache: false,
                      success: function(data){
                        reset();
                        var jobpost=JSON.parse(data);

                        //console.log(jobpost['photo']);
                        $('#id_edit').val(jobpost['id']);
                        $('#update_rank').val(jobpost['rank']);
                        $('#update_salary').val(jobpost['salary']);
                        $('#update_contract_time').val(jobpost['contract_time']);
                        $('#update_vessel_name').val(jobpost['vessel_name']);
                        $('#update_shiptype').val(jobpost['shiptype_id']);
                        $('#update_grt').val(jobpost['grt']);
                        $('#update_flag_of_vessel').val(jobpost['flag_of_vessel']);
                        $('#update_navigation_area').val(jobpost['navigation_area']);
                        $('#update_request_certificates').val(jobpost['request_certificates']);
                        $('#update_description').val(jobpost['description']);
                        $('#update_english_level').val(jobpost['english_level']);

                        $('#modalBox').modal('show');
                      }
                    });
                }

                $('#update_data').on('submit',function (e)
                {
                e.preventDefault();
                var updateData = new FormData(this);
                $.ajax
		        ({
		            type: 'POST',
		            url: "{{url('update/jobpost')}}",
		            data:updateData,
		            cache:false,
		            processData: false,
    				contentType: false,
		            success: function(data){
                    console.log(data);
                    //alert(data);
		            $('#modalBox').modal('hide');
				  	load();
				  }
		        });
		        return false;
            });
            });
    </script>

@endsection
