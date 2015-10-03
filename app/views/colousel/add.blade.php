{{ Form::open(array("url"=>url('colousel/add'),"class"=>"form-horizontal", 'id'=>'FileUploader')) }}
<h2 class="text-center text-muted">Add new Sliding Image</h2>

<!--response messages-->
@if(isset($emsg))
<div class="alert alert-danger alert-dismissable" >
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ $emsg }}!</strong>
</div>
@endif

@if(isset($msg))
<div class="alert alert-success alert-dismissable" >
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ $msg }}!</strong>
</div>
@endif
<div class='12' style="font-size: 12px">

    <div class='form-group'>
        <div class="col-md-6">
            Name<br>
            {{ Form::text('name','',array('class'=>'form-control','placeholder'=>'Name','required'=>'required')) }}
        </div>
        <div class="col-md-6">
            Image<br>
            {{ Form::text('image','',array('class'=>'form-control','placeholder'=>'Image','required'=>'required')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
            Descriptions<br>
            {{ Form::text('descriptions','',array('class'=>'form-control','placeholder'=>'Descriptions')) }}
        </div>
    </div>
  <div class="form-group">
      <div class='col-md-12 form-group text-center'>
          <br>
          {{ Form::submit('Add Slide Picture',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
          {{ Form::reset('Reset',array('class'=>'btn btn-warning','id'=>'submitqn')) }}
      </div>
  </div>
  </div>

<div id="output"></div>

{{ Form::close() }}