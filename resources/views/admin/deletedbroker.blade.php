@extends('admin.app')
@section('page_title','Broker')
@section('deleted_broker_selected','active')
@section('container')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Heading for Broker Records -->
            <h1>Deleted Broker Records</h1>
            <!-- Success alert message -->
            @if (session()->has('message'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{session('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3 text-center" id="myTable">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Company Name</th>
                        <th>E-mail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->b_name}}</td>
                        <td>{{$list->bc_name}}</td>
                        <td>{{$list->b_email}}</td>

                        <td>
                            <a href="{{url('admin/broker/restore')}}/{{$list->id}}">
                                <button type="submit" class="btn btn-info">Restore</button>
                            </a>

                            <a href="{{url('admin/customer/show_broker_details')}}/{{$list->id}}">
                                <button type="submit" class="btn btn-success">View</button>
                            </a>
                            <a href="{{url('front/broker/permanantDelete')}}/{{$list->id}}">
                                <button type="submit" class="btn btn-danger">Permanently Delete</button>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection