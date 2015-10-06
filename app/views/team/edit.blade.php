{{ Form::open(array("url"=>url("team/edit/{$team->id}"),"class"=>"form-horizontal",'id' => "FileUploader",'files' => true)) }} }}
<h2 class="text-center text-muted">Edit Member's Information</h2>

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
            Password<br>
            {{ Form::password('password','',array('class'=>'form-control','required'=>'required')) }}
        </div>
        <div class="col-md-6">
            Image1** {{ Form::file('image',array('required'=>'required','class'=>'')) }}
        </div>
        <div class="col-md-12">
            Description<br>
            {{ Form::textarea('descriptions','',array('class'=>'form-control','placeholder'=>'Descriptions','required'=>'required')) }}
        </div>
    </div>
    <div class="form-group">
        <div class='col-md-12 form-group text-center'>
            <br>
            {{ Form::submit('Edit Member',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
            {{ Form::reset('Reset',array('class'=>'btn btn-warning','id'=>'submitqn')) }}
        </div>
    </div>
</div>

<div id="output"></div>

{{ Form::close() }}

<script>
    $(document).ready(function (){

        $('#FileUploader').on('submit', function(e) {
            e.preventDefault();
            $("#output").html("<h3><i class='fa fa-spin fa-spinner '></i><span>Making changes please wait...</span><h3>");
            $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess
            });

        });

        function afterSuccess(){
            $('#FileUploader').resetForm();
            setTimeout(function() {
                $("#output").html("");
                $("#addteam").load("<?php echo url("team/add") ?>")
            }, 3000);
            $("#listteam").load("<?php echo url("team/list") ?>")

        }
    });
</script>