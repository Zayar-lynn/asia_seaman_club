@extends('admin.layouts.training_admin.site_admin_design')

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
                border-radius:0px;
                box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
                margin-top:-5px;
                margin-bottom: 15px;
            }
            .imgUp
            {
                margin-bottom:15px;
            }
        </style>

    @endsection
@section('nav_bar_text')
    Manage Training Course
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">


                        <div class="card-title p-2 mb-0 pb-0">
                            <h4>
                                Create New Training Course
                            </h4>
                        </div>
                        <div class="card-body mt-0 pt-0">
                            <form action="" id="insert_training_course" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" id="training_course_id" value="0" name="training_course_id">

                                <div class="row">
                                    <div class="col-sm-12 imgUp">
                                        <img id="image" class="imagePreview">
                                        <label class="btn btn-primary upload_btn">
                                            Upload<input type="file" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                        </label>
                                    </div><!-- col-2 -->
                                    {{--<i class="fa fa-plus imgAdd"></i>--}}
                                </div>

                                <div class="form-group">
                                    <input type="text" placeholder="Title" name="title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Description" name="description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Start Date</label>
                                    <input type="date" class="form-control" name="start_date">
                                </div>

                                <div class="form-group">
                                    <label for="">End Date</label>
                                    <input type="date" class="form-control" name="end_date">
                                </div>

                                <div class="form-group">
                                    <input type="text" placeholder="Time" name="time" class="form-control">
                                </div>

                                <input type="submit" value="Create" class="btn btn-success">
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card card-plain">
                        
                        <div class="card-body">
                            <div class="">
                                <table id="datatable" class="table table-hover">
                                    <thead class="">
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
                                        Start Date
                                    </th>
                                    <th>
                                        End Date
                                    </th>
                                    <th>
                                        Time
                                    </th>
                                    <th>
                                        Company Name
                                    </th>
                                    <th>Delete</th>
                                    <th>Edit</th>
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

        <!-- edit modal -->
                <div class="modal fade" id="modalBox">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Form</h4>
                                <button data-dismiss="modal" class="close">&times;</button>
                            </div>
                            <div class="modal-body">
                               

                                <form id="update_data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                    <img src="" alt="" width="100px;" id="imgs" class="imagePreview">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" onchange="displaySelectedPhoto('update_photo','imgs')" id="update_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                    <div class="form-group">
                                        <label for="update_title">Title</label>
                                        <input type="text" name="title" id="update_title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="update_description">Description</label>
                                        <input type="text" name="description" id="update_description" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="update_sdate">Start Date</label>
                                        <input type="date" name="start_date" id="update_sdate" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="update_edate">End Date</label>
                                        <input type="date" name="end_date" id="update_edate" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="update_time">Time</label>
                                        <input type="text" name="time" id="update_time" class="form-control">
                                    </div>
                                    <div class="modal-footer">
										<div class="form-group">
											<button type="submit" class="btn btn-primary" id="update_btn">Update</button>
											<button class=" btn btn-primary" data-dismiss="modal">Close</button>
										</div>
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
    
    <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':$('meta[name="csrf_token"]').attr('content')
                }
            });
        
            $(document).ready(function(){

                var dt = $('#datatable').DataTable();

                function reset(){
                    $('#update_data')[0].reset();
                }

                load();

                function load(){
                    $.ajax({
                    type: "POST",
                    url: "{{url('get_all_trainingcourse')}}",
                    
                    cache: false,
                    success: function(data){
                        var data_return=JSON.parse(data);
                        dt.clear();
                        var no = 1;
                        console.log(data_return);
                        for(var i = 0;i<data_return.length;i++){
                            dt.row.add( [
                                no++,
                                '<img src="'+data_return[i]['photo_url']+'" alt="" width="100px;">',
                                data_return[i]['title'],
                                data_return[i]['description'].substr(0,50),
                                data_return[i]['start_date'],
                                data_return[i]['end_date'],
                                data_return[i]['time'],
                                data_return[i]['company_name'],
                                
                                
                                '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>',
                                '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>'
                            ] ).draw( false );
                        }
                        $('#insert_training_course')[0].reset();
                        $('#image').attr('src','http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');

                    }
                    });
                }

                $('#insert_training_course').on('submit',function (e)
                {
                    e.preventDefault();
                    var alldata = new FormData(this);
                    $.ajax
                    ({
                        type: "POST",
                        url: "{{url('insert/training_course')}}",
                        data:alldata,
                        cache:false,
                        processData: false,
                        contentType: false,
                        success: function(data){
                        alert('Success');
                        //console.log(data);
                        load();
                        $('#insert_training_course')[0].reset();
                    }
                    });
                    return false;
                });

                delete_data=function(id){
                    if(confirm('Are you sure You want to delete!')==true){
                        $.ajax({
                            type: "POST",
                            url: "../delete/training_course/"+id,
                            
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
                      url: "../edit/training_course/"+id,
                      
                      cache: false,
                      success: function(data){
                        reset();
                        var training_course=JSON.parse(data);
                        
                        //console.log(course);
                        $("#imgs").attr("src", training_course['photo_url']);
                        $('#id_edit').val(training_course['id']);
                        $('#update_title').val(training_course['title']);
                        $('#update_description').val(training_course['description']);
                        $('#update_sdate').val(training_course['start_date']);
                        $('#update_edate').val(training_course['end_date']);
                        $('#update_time').val(training_course['time']);
    
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
		            url: "{{url('update/training_course')}}",
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