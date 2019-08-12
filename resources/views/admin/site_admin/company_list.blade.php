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
    Company List
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="card-title mt-0"> Company List</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-hover">
                                  <thead class=" text-primary">
                                      <th>
                                          No
                                      </th>
                                      <th>
                                          Photo
                                      </th>
                                      <th>
                                          Company Name
                                      </th>
                                      <th>
                                        Type
                                      </th>
                                      <th>
                                        Phone
                                      </th>
                                      <th>
                                          Email
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
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="card-title mt-0"> Training List</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable2" class="table table-hover">
                                  <thead class=" text-primary">
                                      <th>
                                          No
                                      </th>
                                      <th>
                                          Photo
                                      </th>
                                      <th>
                                          Company Name
                                      </th>
                                      <th>
                                        Type
                                      </th>
                                      <th>
                                        Phone
                                      </th>
                                      <th>
                                          Email
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
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="card-title mt-0"> Freeagent List</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable3" class="table table-hover">
                                  <thead class=" text-primary">
                                      <th>
                                          No
                                      </th>
                                      <th>
                                          Photo
                                      </th>
                                      <th>
                                          Company Name
                                      </th>
                                      <th>
                                        Type
                                      </th>
                                      <th>
                                        Phone
                                      </th>
                                      <th>
                                          Email
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

                              <div class="row">
                                <div class="col-sm-4">
                                  <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                  <img src="" alt="" width="100px;" id="imgs" class="imagePreview">
                                  <label class="btn btn-primary upload_btn">
                                      Upload<input type="file" onchange="displaySelectedPhoto('update_photo','imgs')" id="update_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                  </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="update_name">Name</label>
                                              <input type="text" name="name" id="update_name" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="update_phone">Phone</label>
                                              <input type="text" name="phone" id="update_phone" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="update_email">Email</label>
                                              <input type="text" name="email" id="update_email" class="form-control">
                                          </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="update_whatwedo
                                          ">What We Do</label>
                                          <textarea name="whatwedo" rows="8" class="form-control" id="update_whatwedo"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="update_whyjoinus
                                          ">Why Join Us</label>
                                          <textarea name="whyjoinus" rows="8" class="form-control" id="update_whyjoinus"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="update_workplaceandculture
                                          ">Workplace and Culture</label>
                                          <textarea name="workplaceandculture" rows="8" class="form-control" id="update_workplaceandculture"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="update_address
                                          ">Address</label>
                                          <textarea name="address" rows="8" class="form-control" id="update_address"></textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="update_facebook">Facebook URL</label>
                                      <input type="text" name="facebook" id="update_facebook" class="form-control">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="update_website">Website URL</label>
                                      <input type="text" name="website" id="update_website" class="form-control">
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
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>

    $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

        $(document).ready( function () {
            var t=$("#datatable").DataTable({
                "ordering": false,
                // "paging": false,
                "bInfo" : false,
                // "bPaginate": false,
                "bLengthChange": false
                // "bFilter": true,
                // "bAutoWidth": false
            });
            var t2=$("#datatable2").DataTable({
                "ordering": false,
                // "paging": false,
                "bInfo" : false,
                // "bPaginate": false,
                "bLengthChange": false
                // "bFilter": true,
                // "bAutoWidth": false
            });
            var t3=$("#datatable3").DataTable({
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
            load2();
            load3();

            function load(){
                $.ajax({
                  type: "POST",
                  url: "{{url('get_all_company_list')}}",

                  cache: false,
                  success: function(data){
                    var data_return=JSON.parse(data);
                    //console.log(data);
                    t.clear();
                    var no = 1;
                    for(var i = 0;i<data_return.length;i++){
                      var link=window.location.href+"../../../company_profile/"+data_return[i]['id'];
                        t.row.add( [
                            no++,
                            '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                            data_return[i]['company_name'],
                            data_return[i]['company_type'],
                            data_return[i]['phone'],
                            data_return[i]['email'],
                            '<a href="'+link+'" class="btn btn-primary btn-sm" target="_blank">Detail</a>',
                            '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>',
                            '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>'
                        ] ).draw( false );
                    }

                  }
                });
            }
            function load2(){
                $.ajax({
                  type: "POST",
                  url: "{{url('get_all_company_training_list')}}",

                  cache: false,
                  success: function(data){
                    var data_return=JSON.parse(data);
                    //console.log(data);
                    t2.clear();
                    var no = 1;
                    for(var i = 0;i<data_return.length;i++){
                      var link=window.location.href+"../../../company_profile/"+data_return[i]['id'];
                        t2.row.add( [
                            no++,
                            '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                            data_return[i]['company_name'],
                            data_return[i]['company_type'],
                            data_return[i]['phone'],
                            data_return[i]['email'],
                            '<a href="'+link+'" class="btn btn-primary btn-sm" target="_blank">Detail</a>',
                            '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>',
                            '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>'
                        ] ).draw( false );
                    }

                  }
                });
            }
            function load3(){
                $.ajax({
                  type: "POST",
                  url: "{{url('get_all_company_freeagent_list')}}",

                  cache: false,
                  success: function(data){
                    var data_return=JSON.parse(data);
                    //console.log(data);
                    t3.clear();
                    var no = 1;
                    for(var i = 0;i<data_return.length;i++){
                      var link=window.location.href+"../../../company_profile/"+data_return[i]['id'];
                        t3.row.add( [
                            no++,
                            '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                            data_return[i]['company_name'],
                            data_return[i]['company_type'],
                            data_return[i]['phone'],
                            data_return[i]['email'],
                            '<a href="'+link+'" class="btn btn-primary btn-sm" target="_blank">Detail</a>',
                            '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>',
                            '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>'
                        ] ).draw( false );
                    }

                  }
                });
            }

            edit_data=function(id){

                $.ajax({
                  type: "POST",
                  url: "edit/company_list/"+id,

                  cache: false,
                  success: function(data){
                    reset();
                    var company_list=JSON.parse(data);

                    //console.log(blog);
                    $("#imgs").attr("src", company_list['photo_url']);
                    $('#id_edit').val(company_list['id']);
                    $('#update_name').val(company_list['company_name']);
                    $('#update_phone').val(company_list['phone']);
                    $('#update_email').val(company_list['email']);
                    $('#update_whatwedo').html(company_list['what_we_do']);
                    $('#update_whyjoinus').html(company_list['why_join_us']);
                    $('#update_workplaceandculture').html(company_list['workplace_and_culture']);
                    $('#update_address').html(company_list['address']);
                    $('#update_facebook').val(company_list['facebook_url']);
                    $('#update_website').val(company_list['website_url']);

                    $('#edit_modalBox').modal('show');
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
    		            url: "{{url('update/company_list')}}",
    		            data:updateData,
    		            cache:false,
    		            processData: false,
        				    contentType: false,
    		            success: function(data){
                        //console.log(data);
                        //alert(data);
    		            $('#edit_modalBox').modal('hide');
          				  	load();
                      load2();
                      load3();
          				  }
    		        });
    		        return false;
              });

              delete_data=function(id){
            if(confirm('Are you sure You want to delete!')==true){
                $.ajax({
                        type: "POST",
                        url: "delete/company_list/"+id,

                        cache: false,
                        success: function(data){
                          console.log(data);
                            alert('Success');
                            load();
                        }
                    });
                }else{
                    return false;
                }
            }

        } );
    </script>
    @endsection
