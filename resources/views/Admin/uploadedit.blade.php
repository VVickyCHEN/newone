@extends('Admin.Common')

@section('title', '上传修改')

@section('Tablescurrent', 'current')

@section('content')

   
      <!-- End Navigation -->
      <div class="container-fluid main-content"><div class="page-title">
  <h1>
    Form Components
  </h1>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
      <div class="heading">
        <i class="icon-reorder"></i>Step 1
      </div>
      <div class="widget-content padded">
        <form action="upload" method="post" class="form-horizontal">

          <!-- csrf令牌问题 -->
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group">
            <label class="control-label col-md-2">Title</label>
            <div class="col-md-3">
              <input class="form-control" placeholder="Title" name="title" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Select Photo</label>
            <div class="col-md-4">
              <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">

                  <!-- 获取图片的base64 -->
                  <input type="hidden" class="img" name="img" value="">

                </div>
                <div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 200px; max-height: 150px"></div>
                <div>
                  <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span><a class="btn btn-default fileupload-exists" data-dismiss="fileupload" href="#">Remove</a>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Textarea</label>
            <div class="col-md-3">
              <textarea class="form-control" rows="3" placeholder="detail" name="detail"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Form Actions</label>
            <div class="col-md-7">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>




<div class="row">
  <div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
     
      <div class="widget-content padded">
        <form action="#" class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-2">Default</label>
            <div class="col-md-3">
              <input class="form-control datepicker" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">As a Component</label>
            <div class="col-md-3">
              <div class="input-group date datepicker">
                <input class="form-control" type="text"><span class="input-group-addon"><i class="icon-calendar"></i></span></input>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Autoclose</label>
            <div class="col-md-3">
              <div class="input-group date datepicker" data-date-autoclose="true" data-date-format="dd-mm-yyyy">
                <input class="form-control" type="text"><span class="input-group-addon"><i class="icon-calendar"></i></span></input>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Start With the Year</label>
            <div class="col-md-3">
              <div class="input-group date datepicker" data-date-autoclose="true" data-date-format="dd.mm.yyyy" data-date-start-view="2">
                <input class="form-control" type="text"><span class="input-group-addon"><i class="icon-calendar"></i></span></input>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Date Range 1</label>
            <div class="col-sm-2">
              <input class="form-control" data-date-autoclose="true" data-date-format="dd-mm-yyyy" id="dpd1" placeholder="Start date" type="text">
            </div>
            <div class="col-sm-2">
              <input class="form-control" data-date-autoclose="true" data-date-format="dd-mm-yyyy" id="dpd2" placeholder="End date" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Date Range 2</label>
            <div class="col-md-3">
              <div class="input-group date">
                <input class="form-control date-range" type="text"><span class="input-group-addon"><i class="icon-calendar"></i></span></input>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
      <div class="heading">
        <i class="icon-time"></i>Time Pickers
      </div>
      <div class="widget-content padded">
        <form action="#" class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-2">Default</label>
            <div class="col-md-3">
              <div class="input-group bootstrap-timepicker">
                <input class="form-control" id="timepicker-default" type="text"><span class="input-group-addon"><i class="icon-time"></i></span></input>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">24 Hour</label>
            <div class="col-md-3">
              <div class="input-group bootstrap-timepicker">
                <input class="form-control" id="timepicker-24h" type="text"><span class="input-group-addon"><i class="icon-time"></i></span></input>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">No Dropdown</label>
            <div class="col-md-3">
              <div class="bootstrap-timepicker">
                <input class="form-control" id="timepicker-noTemplate" type="text"><i class="icon-time"></i>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
      <div class="heading">
        <i class="icon-tint"></i>Color Pickers
      </div>
      <div class="widget-content padded">
        <form action="#" class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-2">Default</label>
            <div class="col-sm-4">
              <input class="form-control" id="cp1" type="text" value="#8fff00">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">RGBA</label>
            <div class="col-sm-4">
              <input class="form-control" data-color-format="rgba" id="cp2" type="text" value="rgb(0,194,255,0.78)">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">As a Component</label>
            <div class="col-sm-4">
              <div class="input-group color" data-color="rgb(200, 0, 0)" data-color-format="rgb" id="cp3">
                <input class="form-control" readonly="" type="text" value="rgb(200, 0, 0)"><span class="input-group-addon"><i style="background-color: rgb(200, 0, 0)"></i></span></input>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



      </div>
    </div>
    @endsection