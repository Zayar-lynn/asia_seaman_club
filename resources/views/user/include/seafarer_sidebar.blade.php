<div class="col-md-3">
    <ul class="over-view-list">
        <li><a href="" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Insert Post</a></li>
        <li><a href="{{url('/serfarer_over-view')}}">Over View</a></li>
        <li><a href="{{url('/serfarer_cv-profile')}}">CV Profile</a></li>
        <li><a href="{{url('/serfarer_buy-coin')}}">Buy Coin</a></li>
        <li><a href="{{url('/serfarer_coin-transition')}}">Coin transition</a></li>
        <li><a href="{{url('/serfarer_coin-history')}}">Coin history</a></li>
        <li><a href="#">General</a></li>
    </ul>
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
                  <form id="insert_seafarer_post" enctype="multipart/form-data" class="md-form">
                          {{csrf_field()}}

                          <div class="row">
                              <div class="col-sm-4 imgUp">
                                  <img src="{{asset('images/default.jpg')}}" class="img-thumbnail" id="image" class="imagePreview">
                                  <label class="btn btn-primary upload_btn">
                                      Upload<input type="file" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" name="photo[]" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                  </label>
                              </div>
                              <div class="col-sm-8">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{-- <label for="vancant">Vancant</label> --}}
                                            <input type="text" name="title" id="title" class="form-control" required placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{-- <label for="des">Description</label> --}}
                                            <textarea name="description" rows="8" class="form-control" id="description" required placeholder="Description"></textarea>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="seafarer_post_photo_link" id="seafarer_post_photo_link" value="">

                          <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Create</button>
                          <div class="clearfix"></div>
                      </form>
                </div>
            </div>
        </div>
    </div>