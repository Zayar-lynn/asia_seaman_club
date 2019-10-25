@extends('admin.layouts.company_admin.site_admin_design')

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
    Manage Sub Company Account
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
                                            Email
                                        </th>
                                        <th>
                                            Type
                                        </th>
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
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Insert Form</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form id="insert_account" enctype="multipart/form-data" class="md-form">
                              {{csrf_field()}}
                            <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                                  
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label for="vancant">Vancant</label> --}}
                                        <input type="email" name="email" id="email" class="form-control" required placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label for="vancant">Vancant</label> --}}
                                        <input type="password" name="password" id="password" class="form-control" required placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label for="vancant">Vancant</label> --}}
                                        <input type="password" name="comfirm_password" id="comfirm_password" class="form-control" required placeholder="Comfirm password">
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
                                                          {{-- <label for="des">Description</label> --}}
                                                          <textarea name="description" rows="8" class="form-control" id="update_description" required placeholder="Description"></textarea>
                                                      </div>
                                                      </div>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.16/js/mdb.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

        $(document).ready(function(){

            var dt = $('#datatable').DataTable({
//                "ordering": false,
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
                let id={{Auth::id()}}
                $.ajax({
                  type: "POST",
                  url: "{{url('api/get_all_staff')}}"+"/"+id,
                  
                  cache: false,
                  success: function(data){
                    //var data_return=JSON.parse(data);
                    console.log(data);
                    dt.clear();
                    var no = 1;                   
                    for(var i = 0;i<data.length;i++){
                        dt.row.add( [
                            no++,
                            data[i]['email'],
                            data[i]['type'],
                            '<button class="btn btn-danger btn-sm" onclick="delete_data('+data[i]['id']+')">Delete</button>',
                            '<button class="btn btn-info btn-sm" onclick="edit_data('+data[i]['id']+')">Edit</button>'
                        ] ).draw( false );
                    }

                      $('#insert_account')[0].reset();
                      $('#image').attr('src','http://localhost/asia_seaman_club/public/images/default.jpg');

                  }
                });
            }

          

           delete_data=function(id){
            if(confirm('Are you sure You want to delete!')==true){
                $.ajax({
                        type: "GET",
                        url: "../api/delete_normal_post/"+id,
                        
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
                  type: "GET",
                //   url: "edit/admin_blog/"+id,
                url: "../normal_post_detail/"+id,
                  
                  cache: false,
                  success: function(data){
                    //reset();
                    // var blog=JSON.parse(data);
                    var blog=data;
                    
                   // console.log(blog);
                    $("#imgs").attr("src", blog['photo_url']);
                    $('#id_edit').val(blog['id']);
                    $('#update_title').val(blog['title']);
                    $('#update_description').val(blog['description']);

                    $('#edit_modalBox').modal('show');
                  }
                });
            }

            $('#insert_account').on('submit',function (e)
            {
                e.preventDefault();
                var alldata = new FormData(this);
                $.ajax
                        ({
                            type: "POST",
                            url: "{{url('api/insert/staff')}}",
                            data:alldata,
                            cache:false,
                            processData: false,
                            contentType: false,
                            success: function(data){
                                console.log(data);
                                $('#insert_account')[0].reset();
                                $('#modalBox').modal('hide');
                                toastr.success('Insert data successful');
                                load();
                            }
                        });
                return false;
            });
            
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
                            url: "{{url('api/upload_normal_post')}}",
                            data:updateData,
                            cache:false,
                            processData: false,
                            contentType: false,
                            success: function(data){
                                var photo_str=JSON.stringify(data);
                                updateData.append('photo_url',photo_str);
                                console.log(photo_str);
                                $.ajax
                                ({
                                    type: 'POST',
                                    url: "../api/edit_normal_post/"+id,
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
                            url: "../api/edit_normal_post/"+id,
                            data:updateData,
                            cache:false,
                            processData: false,
                            contentType: false,
                            success: function(data){
                                //console.log(data);
                                //alert(data);
                                $('#edit_modalBox').modal('hide');
                                load();
                            }
                        });
                    }
		        return false;
            });

        });

    </script>

@endsection