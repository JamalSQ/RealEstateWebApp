@extends('admin.app')
@section('page_title','Broker Searches')
@section('searches_selected','active')
@section('container')
<div class="content-wrapper">
    <div class="container-fluid">
    <h1>Searches Done By Brokers</h1>
        <div class="table-responsive m-b-40">
    <div class="row">
        @foreach($data as $list)
        <div class="col-md-1">
            {{$list->search}}
        </div>
        @endforeach
    </div>
        </div>
    </div>
</div>
@endsection