@extends('admin.layouts.site_admin.site_admin_design')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    Manage Testimonial
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                     <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Create Testimonial</h4>
                            {{--<p class="card-category">Complete your profile</p>--}}
                        </div>
                        <div class="card-body">
                            <form id="insert_testimonial" method="post" enctype="multipart/form-data" class="md-form">
                                {{csrf_field()}}
                                <input type="hidden" id="testimonial_id" value="0" name="testimonial_id">
                                <div class="row">
                                    <div class="col-sm-12 imgUp">
                                        <img id="image" class="imagePreview">
                                        <label class="btn btn-primary upload_btn">
                                            Upload<input type="file" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                        </label>
                                    </div><!-- col-2 -->
                                    {{--<i class="fa fa-plus imgAdd"></i>--}}
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="bmd-label-floating"> Write Here...</label>
                                                <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Create</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card  mt-0 p-3">
                        <table id="show" class="table table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                
                            </tbody>
                        </table>
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
                                    <label for="update_name">Name</label>
                                    <input type="text" name="name" id="update_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="update_description">Description</label>
                                    <input type="text" name="description" id="update_description" class="form-control">
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.16/js/mdb.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

        $(document).ready(function(){

            var dt = $('#show').DataTable({
                "bInfo" : false,
                "bLengthChange": false
            });

            function reset(){
                $('#update_data')[0].reset();
            }

            load();

            function load(){
                $.ajax({
                    type: "POST",
                    url: "{{url('get_all_testimonial')}}",
                    
                    cache: false,
                    success: function(data){
                    var data_return=JSON.parse(data);
                    console.log(data);
                    dt.clear();
                    var no = 1;                   
                    for(var i = 0;i<data_return.length;i++){
                        dt.row.add( [
                            no++,
                            '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                            data_return[i]['name'],
                            data_return[i]['description'].substr(0,100),
                            '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>',
                            '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>'
                        ] ).draw( false );
                    }

                        $('#insert_testimonial')[0].reset();
                        $('#image').attr('src','http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');

                    }
                });
            }

            $('#insert_testimonial').on('submit',function (e)
            {
                e.preventDefault();
                var alldata = new FormData(this);
                $.ajax
                ({
                    type: "POST",
                    url: "{{url('insert/testimonial')}}",
                    data:alldata,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                    alert('Done');
                    load();
                  }
                });
                return false;
            });
            
            delete_data=function(id){
                if(confirm('Are you sure You want to delete!')==true){
                    $.ajax({
                            type: "POST",
                            url: "delete/testimonial/"+id,
                            
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
                    url: "edit/testimonial/"+id,
                    
                    cache: false,
                    success: function(data){
                    reset();
                    var testimonial=JSON.parse(data);
                    
                    //console.log(testimonial);
                    $("#imgs").attr("src", testimonial['photo_url']);
                    $('#id_edit').val(testimonial['id']);
                    $('#update_name').val(testimonial['name']);
                    $('#update_description').val(testimonial['description']);

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
		            url: "{{url('update/testimonial')}}",
		            data:updateData,
		            cache:false,
		            processData: false,
    				contentType: false,
		            success: function(data){
                    //console.log(data);
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