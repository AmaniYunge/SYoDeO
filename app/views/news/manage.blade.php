@extends('master2')
@section('content')
<div class="panel panel-default col-md-7">
    <div class="panel-body" id="listservice">
        @include('news/list')
    </div>
</div>

<div class="panel panel-default col-md-5">
    <div class="panel-body" id="addservice">
        @include('news/add')
    </div>
</div>

@stop
