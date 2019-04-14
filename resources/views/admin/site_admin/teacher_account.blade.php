@extends('admin.layouts.site_admin.site_admin_design')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    {{--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">--}}
    {{--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>--}}
    {{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

    @endsection
@section('nav_bar_text')
    Manage Teacher Account
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">


                                <div class="card-title p-2 mb-0 pb-0">
                                    <h4>
                                        Create New Account
                                    </h4>
                                </div>
                                <div class="card-body mt-0 pt-0">
                                    <form action="" id="insert_account">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <input type="text" placeholder="Name*" required class="form-control" name="teachername">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" placeholder="Phone*" required class="form-control" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="Email*" required class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Password*" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" placeholder="Retype-Password*" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" value="Register Now">
                                        </div>
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
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
{{--<script>--}}
    {{--$(document).ready(function() {--}}
        {{--$('#summernote').summernote();--}}
    {{--});--}}
{{--</script>--}}
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

            load();

            function load(){
                $.ajax({
                type: "POST",
                url: "{{url('get_all_teacher_acc')}}",
                
                cache: false,
                success: function(data){
                    var data_return=JSON.parse(data);
                    //console.log(data);
                    dt.clear();
                    var no = 1;                   
                    for(var i = 0;i<data_return.length;i++){
                        dt.row.add( [
                            no++,
                            data_return[i]['name'],
                            data_return[i]['phone'],
                            data_return[i]['email'],
                            '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>'
                        ] ).draw( false );
                    }

                    $('#insert_account')[0].reset();

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
                    url: "{{url('/teacherregister')}}",
                    data:alldata,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                    alert('Done');
                    load();
                    $('#insert_account')[0].reset();
                  }
                });
                return false;
            });

            delete_data=function(id){
                if(confirm('Are you sure You want to delete!')==true){
                    $.ajax({
                        type: "POST",
                        url: "../delete/teacher_acc/"+id,
                        
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
          });
    </script>
@endsection