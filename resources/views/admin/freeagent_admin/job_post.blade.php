@extends('admin.layouts.freeagent_admin.site_admin_design')

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
    Manage Job Post
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">


                        <div class="card-title p-2 mb-0 pb-0">
                            <h4>
                                Create New Job Post
                            </h4>
                        </div>
                        <div class="card-body mt-0 pt-0">
                            <form action="" id="insert_jobpost">
                                    {{csrf_field()}}
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
                                    <input type="text" name="rank" placeholder="Rank" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="salary" placeholder="Salary" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="contract_time" placeholder="Contract-Time" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="vessel_name" placeholder="Vessel-Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <select name="ship_type" id="" class="form-control">
                                        <option value="">Ship Type</option>
                                        @foreach($shiptypes as $shiptype)
                                            <option value="{{$shiptype->id}}">{{$shiptype->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="grt" placeholder="GRT" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="flag_of_vessel" placeholder="Flag-of-vessel" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="navigation_area" placeholder="Navigation-area" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="request_certificates" placeholder="Request-certificates" class="form-control">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Description" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <select name="english_level" id="" class="form-control">
                                        <option value="">English Level</option>
                                        <option value="lowlevel">Low Level</option>
                                        <option value="mediumlevel">medium Level</option>
                                        <option value="hightlevel">Hight Level</option>
                                    </select>
                                </div>

                                <input type="submit" value="send" class="btn btn-success">
                            </form>
                        </div>


                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card  mt-0 p-3">
                        <table id="show" class="table table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Photo</th>
                                    <th>Company</th>
                                    <th>Rank</th>
                                    <th>Salary</th>
                                    <th>Contract Time</th>
                                    <th>Vessel Name</th>
                                    <th>Shiptype</th>
                                    <th>GRT</th>
                                    <th>Flag of vessel</th>
                                    <th>Navigation Area</th>
                                    <th>Request Certificates</th>
                                    <th>Description</th>
                                    <th>English level</th>
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
                                <label for="update_rank">Rank</label>
                                <input type="text" name="rank" id="update_rank" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="update_salary">Salary</label>
                                <input type="text" name="salary" id="update_salary" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="update_contract_time">Contract Time</label>
                                <input type="text" name="contract_time" id="update_contract_time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="update_vessel_name">Vessel Name</label>
                                <input type="text" name="vessel_name" id="update_vessel_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="update_shiptype">Ship Type</label>
                                <select name="ship_type" id="update_shiptype" class="form-control">
                                    <option value="">Ship Type</option>
                                    @foreach($shiptypes as $shiptype)
                                        <option value="{{$shiptype->id}}">{{$shiptype->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="update_grt">GRT</label>
                                <input type="text" name="grt" id="update_grt" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="update_flag_of_vessel">Flag of vessel</label>
                                <input type="text" name="flag_of_vessel" id="update_flag_of_vessel" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="update_navigation_area">Navigation Area</label>
                                <input type="text" name="navigation_area" id="update_navigation_area" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="update_request_certificates">Request Certificate</label>
                                <input type="text" name="request_certificates" id="update_request_certificates" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="update_description">Description</label>
                                <textarea class="form-control" name="description" id="update_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="update_english_level">English level</label>
                                <select name="english_level" id="update_english_level" class="form-control">
                                    <option value="">English Level</option>
                                    <option value="lowlevel">Low Level</option>
                                    <option value="mediumlevel">medium Level</option>
                                    <option value="hightlevel">Hight Level</option>
                                </select>
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
                    url: "{{url('get_all_freeagent_jobpost')}}",
                    
                    cache: false,
                    success: function(data){
                        var data_return=JSON.parse(data);
                        //console.log(data);
                        dt.clear();
                        var no = 1;                   
                        for(var i = 0;i<data_return.length;i++){
                            dt.row.add( [
                                no++,
                                '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                                data_return[i]['company_name'],
                                data_return[i]['rank'],
                                data_return[i]['salary'],
                                data_return[i]['contract_time'],
                                data_return[i]['vessel_name'],
                                data_return[i]['shiptype_id'],
                                data_return[i]['grt'],
                                data_return[i]['flag_of_vessel'],
                                data_return[i]['navigation_area'],
                                data_return[i]['request_certificates'],
                                data_return[i]['description'].substr(0,70),
                                data_return[i]['english_level'],
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
                        url: "{{url('insert/freeagent_jobpost')}}",
                        data:alldata,
                        cache:false,
                        processData: false,
                        contentType: false,
                        success: function(data){
                        alert('Success');
                        //console.log(data);
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
                            url: "../delete/freeagent_jobpost/"+id,
                            
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
                      url: "../edit/freeagent_jobpost/"+id,
                      
                      cache: false,
                      success: function(data){
                        reset();
                        var jobpost=JSON.parse(data);
                        
                        //console.log(jobpost['photo']);
                        $("#imgs").attr("src", jobpost['photo_url']);
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
                        url: "{{url('update/freeagent_jobpost')}}",
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