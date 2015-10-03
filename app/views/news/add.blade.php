{{ Form::open(array("url"=>url('news/add'),"class"=>"form-horizontal", 'id'=>'FileUploader')) }}
<h2 class="text-center text-muted">Add new News</h2>

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
        <div class="col-md-12">
            Contents<br>
            {{ Form::textarea('contents','',array('class'=>'form-control','placeholder'=>'Contents','required'=>'required')) }}
        </div>
        <div class="col-md-6">
            Date<br>
            {{ Form::text('date','',array('class'=>'form-control','placeholder'=>'Date','required'=>'required')) }}
        </div>
    </div>
  <div class="form-group">
      <div class='col-md-12 form-group text-center'>
          <br>
          {{ Form::submit('Add News',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
          {{ Form::reset('Reset',array('class'=>'btn btn-warning','id'=>'submitqn')) }}
      </div>
  </div>
  </div>

<div id="output"></div>

{{ Form::close() }}