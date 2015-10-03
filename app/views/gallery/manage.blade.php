@extends('master1')
@section('content')
<div class="panel panel-default col-md-7">
    <div class="panel-body" id="listgallery">
<h3>List Gallery goes here</h3>
    </div>
</div>

<div class="panel panel-default col-md-5">
    <div class="panel-body" id="addgallery">
        @include('gallery/add')
    </div>
</div>

@stop