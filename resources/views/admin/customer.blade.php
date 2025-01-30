@extends('admin.app')
@section('page_title','Customer')
@section('customer_selected','active')
@section('container')
<div class="content-wrapper">
<div class="container-fluid">
<h1>Customer Records</h1>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3 text-center" id="myTable">
        <thead class="text-center">
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Clicks From Broker</th>
                <th>E-mail No</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
       
            @foreach($data as $list)
            <tr>
                <td>{{$list->id}}</td>
                <td>{{$list->name}}</td>
                <td>
                @foreach($click as $list1)
                    @if($list->id==$list1->customerid)
                            {{$list1->clicks}}
                    @endif
                @endforeach
                </td>
                <td>{{$list->email}}</td>
                <td>{{$list->currentliving}}</td>
                <td>
            <a href="{{url('admin/customer/show_customer_details')}}/{{$list->id}}">
                <button type="submit" class="btn btn-success">View</button>
            </a>
            <a href="{{url('front/customerInsert/delete')}}/{{$list->id}}">
                <button type="submit" class="btn btn-danger">Delete</button>
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
