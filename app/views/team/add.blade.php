{{ Form::open(array("url"=>url('team/add'),"class"=>"form-horizontal", 'id'=>'FileUploader')) }}
<h2 class="text-center text-muted">Add new User</h2>

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
            Full Name<br>
            {{ Form::text('name','',array('class'=>'form-control','placeholder'=>'Full Name','required'=>'required')) }}
        </div>
        <div class="col-md-6">
            Title<br>
            {{ Form::text('title','',array('class'=>'form-control','placeholder'=>'Title','required'=>'required')) }}
        </div>

    </div>

    <div class='form-group'>
        <div class="col-md-6">
            Email<br>
            {{ Form::email('email','',array('class'=>'form-control','placeholder'=>'Email','required'=>'required')) }}
        </div>
        <div class="col-md-6">
            Phone Number<br>
            {{ Form::text('phone','',array('class'=>'form-control','placeholder'=>'Phone','required'=>'required')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            Phone Number<br>
            {{ Form::text('phone','',array('class'=>'form-control','placeholder'=>'Phone Number','required'=>'required')) }}
        </div>
        <div class="col-md-6">
            Password<br>
            {{ Form::password('password','',array('class'=>'form-control','placeholder'=>'Password','required'=>'required')) }}
        </div>
    </div>
  <div class="form-group">
      <div class="col-md-6">
          Re-password<br>
          {{ Form::password('repassword','',array('class'=>'form-control','placeholder'=>'Repassword','required'=>'required')) }}
      </div>
      <div class='col-md-6 form-group text-center'>
          <br>
          {{ Form::submit('Add User',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
          {{ Form::reset('Reset',array('class'=>'btn btn-warning','id'=>'submitqn')) }}
      </div>
  </div>
  </div>

<div id="output"></div>

{{ Form::close() }}