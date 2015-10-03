@extends('master1')
@section('content')
<div class="panel panel-default col-md-7">
    <div class="panel-body" id="listservice">
<h3>List services goes here</h3>
    </div>
</div>

<div class="panel panel-default col-md-5">
    <div class="panel-body" id="addservice">
        @include('service/add')
    </div>
</div>

@stop