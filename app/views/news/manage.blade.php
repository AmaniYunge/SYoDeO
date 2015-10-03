@extends('master1')
@section('content')
<div class="panel panel-default col-md-7">
    <div class="panel-body" id="listservice">
<h3>List News goes here</h3>
    </div>
</div>

<div class="panel panel-default col-md-5">
    <div class="panel-body" id="addservice">
        @include('news/add')
    </div>
</div>

@stop