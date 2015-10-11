@extends('master2')
@section('content')
<div class="panel panel-default col-md-7">
    <div class="panel-body" id="listcolousel">
<h3>List Sliding Picture goes here</h3>
    </div>
</div>

<div class="panel panel-default col-md-5">
    <div class="panel-body" id="addcolousel">
        @include('colousel/add')
    </div>
</div>

@stop
