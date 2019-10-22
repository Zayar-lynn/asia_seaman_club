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
                                    <thead class=" text-primary">
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Photo
                                        </th>
                                        <th>
                                            Position
                                        </th>
                                        <th>
                                            Vancant
                                        </th>
                                        <th>
                                            Salary
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
                                                <label for="">Select Jobpostion</label>
                                                <select name="job_position_id" class="form-control">
                                                    <optgroup label="DECK">
                                                    @foreach ($deck_positions as $deck_position)
                                                        <option value="{{$deck_position->id}}">{{$deck_position->position_name}}</option>
                                                    @endforeach
                                                    </optgroup>
                                                    <optgroup label="ENGINE">
                                                        @foreach ($engine_positions as $engine_position)
                                                            <option value="{{$engine_position->id}}">{{$engine_position->position_name}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
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
                                                    <option value="Customize">
                                                    <option value="Urgent">
                                                    <option value="within ONE week">
                                                    <option value="within TWO week">
                                                    <option value="within ONE month">
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
                                            <input list="english_level" name="english_level" class="form-control" placeholder="Level of english">
                                            <datalist id="english_level">
                                                <option value="Customize">
                                                <option value="Elementary">
                                                <option value="Intermediate">
                                                <option value="Upper-Intermediate">
                                            </datalist>
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
                                        <select name="vessel_type_id" class="form-control">
                                            <optgroup label="BULK CARRIERS">
                                            @foreach ($bulk_vesseltypes as $bulk_vesseltype)
                                                <option value="{{$bulk_vesseltype->id}}">{{$bulk_vesseltype->vessel_name}}</option>
                                            @endforeach
                                            </optgroup>
                                        </select>
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
                                            <option value="Customize">
                                            <option value="Coastal">
                                            <option value="International">
                                            <option value="Worldwide">
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
                                            <img src="" class="img-thumbnail" id="imgs" class="imagePreview">
                                            <label class="btn btn-primary upload_btn">
                                                Upload<input type="file" onchange="displaySelectedPhoto('update_upload_photo','imgs')" id="update_upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                            </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select name="position" class="form-control" value="">
                                                                <option value="" id="update_position"></option>
                                                            <optgroup label="DECK">
                                                            @foreach ($deck_positions as $deck_position)
                                                                <option value="{{$deck_position->id}}">{{$deck_position->position_name}}</option>
                                                            @endforeach
                                                            </optgroup>
                                                            <optgroup label="ENGINE">
                                                                @foreach ($engine_positions as $engine_position)
                                                                    <option value="{{$deck_position->id}}">{{$engine_position->position_name}}</option>
                                                                @endforeach
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        {{-- <label for="vancant">Vancant</label> --}}
                                                        <input type="text" name="vancant" id="update_vancant" class="form-control" required placeholder="Vancant">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        {{-- <label for="salary">Salary</label> --}}
                                                        <input type="text" name="salary" id="update_salary" class="form-control" required placeholder="Salary">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input list="join_date" name="join_date" class="form-control" placeholder="Join Date" id="update_join_date">
                                                        <datalist id="join_date">
                                                            <option value="Customize">
                                                            <option value="Urgent">
                                                            <option value="within ONE week">
                                                            <option value="within TWO week">
                                                            <option value="within ONE month">
                                                        </datalist>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="contract_duration" id="update_contract_duration" class="form-control" required placeholder="Duration of contract">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input list="english_level" name="english_level" class="form-control" placeholder="Level of english" id="update_english_level">
                                                    <datalist id="english_level">
                                                        <option value="Customize">
                                                        <option value="Elementary">
                                                        <option value="Intermediate">
                                                        <option value="Upper-Intermediate">
                                                    </datalist>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="requirement" rows="5" class="form-control" id="update_requirement" required placeholder="Requriement"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="vessel_name" id="update_vessel_name" class="form-control" required placeholder="Vessel Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="vessel_type" class="form-control">
                                                    <optgroup label="BULK CARRIERS">
                                                    @foreach ($bulk_vesseltypes as $bulk_vesseltype)
                                                        <option value="{{$bulk_vesseltype->id}}">{{$bulk_vesseltype->vessel_name}}</option>
                                                    @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="year" name="build_year" id="update_build_year" class="form-control" required placeholder="Build Year">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="dwt" id="update_dwt" class="form-control" required placeholder="D.W.T">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="flage" id="update_flage" class="form-control" required placeholder="Flag">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="main_engine" id="update_main_engine" class="form-control" required placeholder="Main Engine">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="crew_onboard" id="update_crew_onboard" class="form-control" required placeholder="Crew Onboard">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input list="sailing_area" name="sailing_area" class="form-control" placeholder="Sailing Area" id="update_sailing_area">
                                                <datalist id="sailing_area">
                                                    <option value="Customize">
                                                    <option value="Coastal">
                                                    <option value="International">
                                                    <option value="Worldwide">
                                                </datalist>
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
                                '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                                data_return[i]['position_name'],
                                data_return[i]['vancant'],
                                data_return[i]['salary'],
                                '<a href="'+link+'" class="btn btn-primary btn-sm" target="_blank">Detail</a>',
                                '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>',
                                '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>'
                            ] ).draw( false );
                        }

                        $('#insert_jobpost')[0].reset();
                        $('#image').attr('src','http://localhost/asia_seaman_club/public/images/default.jpg');

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
                        url: "{{url('api/upload_job_post_photo')}}",
                        data:alldata,
                        cache:false,
                        processData: false,
                        contentType: false,
                        success: function(data){
//                        //console.log(data);
//                        $('#photo_link').val(data);
                        alldata.append('photo',data);
//                        console.log(alldata);
                        $.ajax
                        ({
                            type: "POST",
                            url: "{{url('api/insert/jobpost')}}",
                            data:alldata,
                            cache:false,
                            processData: false,
                            contentType: false,
                            success: function(data){
                                //console.log(data);
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
                            url: "../api/delete/jobpost/"+id,

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
                      type: "POST",
                      url: "../edit/jobpost/"+id,

                      cache: false,
                      success: function(data){
                        reset();
                        var jobpost=JSON.parse(data);

                        //console.log(jobpost['photo']);
                        $("#imgs").attr("src", jobpost['photo_url']);
                        $('#id_edit').val(jobpost['id']);
                        $('#update_position').val(jobpost['position_name']);
                        $('#update_vancant').val(jobpost['vancant']);
                        $('#update_salary').val(jobpost['position_name']);
                        $('#update_join_date').val(jobpost['join_date']);
                        $('#update_contract_duration').val(jobpost['contract_duration']);
                        $('#update_requirement').val(jobpost['requirement']);
                        $('#update_vessel_name').val(jobpost['vessel_name']);
                        $('#update_vessel_type').val(jobpost['vessel_type']);
                        $('#update_build_year').val(jobpost['build_year']);
                        $('#update_dwt').val(jobpost['dwt']);
                        $('#update_flage').val(jobpost['flage']);
                        $('#update_main_engine').val(jobpost['main_engine']);
                        $('#update_crew_onboard').val(jobpost['crew_onboard']);
                        $('#update_sailing_area').val(jobpost['sailing_area']);
                        $('#update_description').val(jobpost['description']);
                        $('#update_english_level').val(jobpost['english_level']);

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
		            url: "{{url('update/jobpost')}}",
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
		        return false;
            });
            });
    </script>

@endsection
