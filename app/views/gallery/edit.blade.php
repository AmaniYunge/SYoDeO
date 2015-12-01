{{ Form::open(array("url"=>url("gallery/edit/{$gallery->id}"),"class"=>"form-horizontal",'id' => "FileUploader",'files' => true)) }}
<h2 class="text-center text-muted">Edit gallery's Information</h2>

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
            {{ Form::text('name',$gallery->name,array('class'=>'form-control','placeholder'=>'Full Name','required'=>'required')) }}
        </div>
        <div class="col-md-6">
            Title<br>
            {{ Form::text('title',$gallery->name,array('class'=>'form-control','placeholder'=>'Title','required'=>'required')) }}
        </div>

    </div>
    <div class="col-md-12">
        Image1** {{ Form::file('image',array('required'=>'required','class'=>'')) }}
    </div>


    <div class="form-group">
        <div class='col-md-12 form-group text-center'>
            <br>
            {{ Form::submit('Edit Gallery',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
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
                $("#addgallery").load("<?php echo url("gallery/add") ?>")
            }, 3000);
            $("#listgallery").load("<?php echo url("gallery/list") ?>")

        }
    });
</script>