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
    Post List
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
                                          Company Name
                                      </th>
                                      <th>
                                          Position
                                      </th>
                                      <th>
                                        Salary
                                      </th>
                                      <th>
                                        Contract Duration
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
    </div>

    {{-- <div class="content">
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
    </div> --}}

   
                
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
            // var t2=$("#datatable2").DataTable({
            //     "ordering": false,
            //     // "paging": false,
            //     "bInfo" : false,
            //     // "bPaginate": false,
            //     "bLengthChange": false
            //     // "bFilter": true,
            //     // "bAutoWidth": false
            // });
            // var t3=$("#datatable3").DataTable({
            //     "ordering": false,
            //     // "paging": false,
            //     "bInfo" : false,
            //     // "bPaginate": false,
            //     "bLengthChange": false
            //     // "bFilter": true,
            //     // "bAutoWidth": false
            // });
            function reset(){
                $('#update_data')[0].reset();
            }

            load();
            // load2();
            // load3();

            function load(){
                $.ajax({
                  type: "POST",
                  url: "{{url('get_all_confirm_post')}}",

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
                            // '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                            data_return[i]['company_name'],
                            data_return[i]['position_name'],
                            data_return[i]['salary'],
                            data_return[i]['contract_duration'],
                            // '<a href="'+link+'" class="btn btn-primary btn-sm" target="_blank">Detail</a>',
                            '<button class="btn btn-success btn-sm" onclick="update_data('+data_return[i]['id']+')">Active</button>',
                            '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Cancel</button>'
                        ] ).draw( false );
                    }

                  }
                });
            }
            // function load2(){
            //     $.ajax({
            //       type: "POST",
            //       url: "{{url('get_all_company_training_list')}}",

            //       cache: false,
            //       success: function(data){
            //         var data_return=JSON.parse(data);
            //         //console.log(data);
            //         t2.clear();
            //         var no = 1;
            //         for(var i = 0;i<data_return.length;i++){
            //           var link=window.location.href+"../../../company_profile/"+data_return[i]['id'];
            //             t2.row.add( [
            //                 no++,
            //                 '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
            //                 data_return[i]['company_name'],
            //                 data_return[i]['company_type'],
            //                 data_return[i]['phone'],
            //                 data_return[i]['email'],
            //                 '<a href="'+link+'" class="btn btn-primary btn-sm" target="_blank">Detail</a>',
            //                 '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>',
            //                 '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>'
            //             ] ).draw( false );
            //         }

            //       }
            //     });
            // }
            // function load3(){
            //     $.ajax({
            //       type: "POST",
            //       url: "{{url('get_all_company_freeagent_list')}}",

            //       cache: false,
            //       success: function(data){
            //         var data_return=JSON.parse(data);
            //         //console.log(data);
            //         t3.clear();
            //         var no = 1;
            //         for(var i = 0;i<data_return.length;i++){
            //           var link=window.location.href+"../../../company_profile/"+data_return[i]['id'];
            //             t3.row.add( [
            //                 no++,
            //                 '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
            //                 data_return[i]['company_name'],
            //                 data_return[i]['company_type'],
            //                 data_return[i]['phone'],
            //                 data_return[i]['email'],
            //                 '<a href="'+link+'" class="btn btn-primary btn-sm" target="_blank">Detail</a>',
            //                 '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>',
            //                 '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>'
            //             ] ).draw( false );
            //         }

            //       }
            //     });
            // }

            update_data=function(id){
            if(confirm('Are you sure You want to change active!')==true){
                $.ajax({
                        type: "POST",
                        url: "../active/pending_post/"+id,

                        cache: false,
                        success: function(data){
                          //console.log(data);
                            alert('Success');
                            load();
                        }
                    });
                }else{
                    return false;
                }
            }

              delete_data=function(id){
            if(confirm('Are you sure You want to cancel!')==true){
                $.ajax({
                        type: "POST",
                        url: "../delete/pending_post/"+id,

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
