@extends('master1')
@section('content')
<div class="panel panel-default col-md-7">
    <div class="panel-body" id="listuser">
        @include('team/list')
    </div>
</div>

<div class="panel panel-default col-md-5">
    <div class="panel-body" id="adduser">
        @include('team/add')
    </div>
</div>

@stop