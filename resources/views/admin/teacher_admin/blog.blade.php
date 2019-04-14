@extends('admin.layouts.teacher_admin.site_admin_design')

@section('css')
    {{--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">--}}
    {{--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>--}}
    {{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

    @endsection
@section('nav_bar_text')
    Manage Blog
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">


                                <div class="card-title p-2 mb-0 pb-0">
                                    <h4>
                                        Create New Blog
                                    </h4>
                                </div>
                                <div class="card-body mt-0 pt-0">
                                    <form action="">
                                        <div class="form-group">
                                            <input type="text" placeholder="Title" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Text Blog"></textarea>
                                        </div>
                                    </form>
                                </div>


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
@endsection