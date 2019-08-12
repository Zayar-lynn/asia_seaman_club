@extends('admin.layouts.company_admin.site_admin_design')


@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>

        img.card-img-top{
            border: 2px dotted #ccc;
            box-shadow: 0px 0px 1px #000;
        }
        img.light_box_img{
            margin-left:7.5%!important;
            //margin-right: 50%!important;
        }
        .up_load_photo{
            margin-left:7.5%;
        }
        .model-footer-1 {
            border: transparent;
        }
    </style>
@endsection

@section('nav_bar_text')
    Photo
@endsection


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
               @foreach($company_photos as $company_photo)
               <div class="col-md-3">

                   <div class="card">
                       <img style="height: 180px" class="card-img-top" src="{{$company_photo['photo_url']}}" alt="Card image cap">
                       <div class="card-body">
                           <p class="card-text text-center">{{$company_photo->title}}</p>
                       </div>
                       <div class="card-footer">
                           <button type="button" class="btn btn-primary btn-block" onclick="show_edit_model({{$company_photo->id}})" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">
                               Edit
                           </button>
                       </div>
                   </div>

                    {{-- <div class="card">
                       <img style="height: 180px" class="card-img-top" src="{{asset('/upload/company_project/no_images.jpg')}}" alt="Card image cap">
                       <div class="card-body">
                          <p class="card-text text-center">No Title</p>
                       </div>
                       <div class="card-footer">
                           <button type="button" class="btn btn-primary btn-block" onclick="show_edit_model(0)">
                               Edit
                           </button>
                       </div>
                    </div> --}}

               </div>
              @endforeach
            </div>
        </div>
    </div>


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="modalBox">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Form</h4>
                    <button data-dismiss="modal" class="close">&times;</button>
                </div>
                <div class="modal-body">


                    <form action="{{url('update/company_photo')}}" id="update_data" enctype="multipart/form-data" class="" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="type" id="type">
                        <input type="hidden" name="project_id" id="project_id">
                        <div class="modal-body">
                           <img id="image" style="height: 180px;width:200px;" class="card-img-top light_box_img" alt="Card image cap">
                           <div class="card-body">
                              <label for="upload_photo" class="btn btn-success up_load_photo"><i class="fa fa-photo"></i> &nbsp;Upload photo</label>
                              <input class="form-control upload_photo" type="file" accept="image/*" name="photo" placeholder="Text Here..." id="upload_photo" onchange="displaySelectedPhoto('upload_photo','image')" style="visibility: hidden">
                              <input class="form-control" type="text" id="title" name="title" placeholder="Text Here...">
                           </div>
                        </div>
                        <div class="modal-footer model-footer-1">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //        function ajax_set_admin_data()

        $(document).ready(function() {
            show_edit_model=function(id){
                //if insert

                    $.ajax({
                        type: 'post',
                        url: '../company/photo_detail/'+id,
                        // data:"id="+id,
                        cache:false,
                        contentType: false,
                        processData: false,
                        success: function(data_return) {
                            var data=JSON.parse(data_return);
                            console.log(data);
                            //$('#type').val('update');
                            $('#title').val(data.title);
                            $('#project_id').val(data.id);
                            document.getElementById('image').src=data.photo_url;
                            $('#model_box').modal('show');
//                            load_data();
                        },
                    });


            }

            {{--  $('#update_data').on('submit',function (e)
                {
                e.preventDefault();
                var updateData = new FormData(this);
                $.ajax
		        ({
		            type: 'POST',
		            url: "{{url('update/company_photo')}}",
		            data:updateData,
		            cache:false,
		            processData: false,
    				contentType: false,
		            success: function(data){
                    console.log(data);
                    //alert(data);
		            $('#modalBox').modal('hide');

				  }
		        });
		        return false;
            });  --}}
        });
    </script>
    @endsection
