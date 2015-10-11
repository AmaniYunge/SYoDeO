@extends('master2')
@section('content')
<div class="panel panel-default col-md-7">
    <div class="panel-body" id="listteam">
        @include('team/list')
    </div>
</div>

<div class="panel panel-default col-md-5">
    <div class="panel-body" id="addteam">
        @include('team/add')
    </div>
</div>

@stop
