@extends('admin.layouts.teacher_admin.site_admin_design')

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
    Course
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">


                                <div class="card-title p-2 mb-0 pb-0">
                                    <h4>
                                        Create New Course
                                    </h4>
                                </div>
                                <div class="card-body mt-0 pt-0">
                                    <form action="" id="insert_course" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <input type="hidden" id="course_id" value="0" name="course_id">

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
                                            <input type="text" placeholder="Title" class="form-control" name="title">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Description" name="description"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" placeholder="Price" class="form-control" name="price">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Course Category</label><br>
                                            
                                            @foreach($course_cats as $course_cat)
                                            {{$course_cat->category_name}} : <input type="checkbox" name="category_name[]" value="{{$course_cat->id}}">
                                            @endforeach
                                        </div>

                                        {{-- <div class="form-group">
                                            <label for="photo">Photo</label>
                                            <input type="file" class="form-control" name="photo" id="photo">
                                        </div> --}}
                                        <input type="submit" value="send" class="btn btn-success">
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
                                            Title
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Teacher ID
                                        </th>
                                        <th>
                                            Photo
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
                                        <label for="update_price">Price</label>
                                        <input type="text" name="price" id="update_price" class="form-control">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="update_photo">Photo</label>
                                        <input type="file" name="photo" id="update_photo" class="form-control">
                                    </div> --}}
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

                var dt = $('#datatable').DataTable();
            
                function reset(){
                    $('#update_data')[0].reset();
                }

                load();

                function load(){
                    $.ajax({
                    type: "POST",
                    url: "{{url('get_all_course')}}",
                    
                    cache: false,
                    success: function(data){
                        var data_return=JSON.parse(data);
                        dt.clear();
                        var no = 1;
                        console.log(data_return);
                        for(var i = 0;i<data_return.length;i++){
                            dt.row.add( [
                                no++,
                                data_return[i]['title'],
                                data_return[i]['description'].substr(0,50),
                                data_return[i]['price'],
                                data_return[i]['teacher_name'],
                                '<img src="'+data_return[i]['photo_url']+'" alt="" width="100px;">',
                                
                                '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>',
                                '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>'
                            ] ).draw( false );
                        }
                        $('#insert_course')[0].reset();
                        $('#image').attr('src','http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');

                    }
                    });
                }

                $('#insert_course').on('submit',function (e)
                {
                    e.preventDefault();
                    var alldata = new FormData(this);
                    $.ajax
                    ({
                        type: "POST",
                        url: "{{url('insert/course')}}",
                        data:alldata,
                        cache:false,
                        processData: false,
                        contentType: false,
                        success: function(data){
                        alert(data);
                        console.log(data);
                        load();
                        $('#insert_course')[0].reset();
                    }
                    });
                    return false;
                });

                delete_data=function(id){
                    if(confirm('Are you sure You want to delete!')==true){
                        $.ajax({
                            type: "POST",
                            url: "../delete/teacher_course/"+id,
                            
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
                      url: "../edit/teacher_course/"+id,
                      
                      cache: false,
                      success: function(data){
                        reset();
                        var course=JSON.parse(data);
                        
                        //console.log(course);
                        $("#imgs").attr("src", course['photo_url']);
                        $('#id_edit').val(course['id']);
                        $('#update_title').val(course['title']);
                        $('#update_description').val(course['description']);
                        $('#update_price').val(course['price']);
    
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
		            url: "{{url('update/course')}}",
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