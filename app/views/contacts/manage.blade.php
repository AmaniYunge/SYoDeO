@extends('master1')
@section('content')
<div class="panel panel-default col-md-7">
    <div class="panel-body" id="listuser">
<h3>List contacts goes here</h3>
    </div>
</div>

<div class="panel panel-default col-md-5">
    <div class="panel-body" id="adduser">
        @include('contacts/add')
    </div>
</div>

@stop