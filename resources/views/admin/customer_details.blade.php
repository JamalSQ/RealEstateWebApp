@extends('admin.app')
@section('page_title','Show Customer Details')
@section('customer_selected','active')
@section('container')
<div class="content-wrapper">
<div class="container-fluid">
<h1 class="text-center pt-4">Customers Details</h1>
<a href="{{url('admin/customer')}}" class="py-2">
    <button type="submit" class="btn btn-success" role="btn">
        Back
    </button>
</a>
<div class="card my-3 col-md-10 px-5 mx-5">
<table class="table table-borderless table-data" id="myTable">
         <tbody>
            <tr>
                    <th>ID</th>
                    <td>{{$customer_list['0']->id}}</td>
            </tr>
            
            <tr>
                    <th>Name</th>
                    <td>{{$customer_list['0']->name}}</td>
            </tr>
          
            <tr>
                    <th>Sur name</th>
                    <td>{{$customer_list['0']->surname}}</td>
            </tr>
            <tr>
                    <th>Address</th>
                    <td>{{$customer_list['0']->adress}}</td>
            </tr>
            <tr>
                    <th>E-mail</th>
                    <td>{{$customer_list['0']->email}}</td>
            </tr>
            <tr>
                    <th>phone No</th>
                    <td>{{$customer_list['0']->phoneno	}}</td>
            </tr>
            <tr>
                    <th>Current Living</th>
                    <td>{{$customer_list['0']->currentliving}}</td>
            </tr>
            <tr>
                    <th>Confirm Current Living</th>
                    <td>{{$customer_list['0']->confirmCL}}</td>
            </tr>
            <tr>
                    <th>total_child</th>
                    <td>{{$customer_list['0']->total_child}}</td>
            </tr>
            <tr>
                    <th>city_where_buy_house</th>
                    <td>{{$customer_list['0']->city_where_buy_house}}</td>
            </tr>
            <tr>
                    <th>area_of_house</th>
                    <td>{{$customer_list['0']->area_of_house}}</td>
            </tr>
            <tr>
                    <th>is_garage</th>
                    <td>{{$customer_list['0']->is_garage}}</td>
            </tr>
            <tr>
                    <th>is_seaview</th>
                    <td>{{$customer_list['0']->is_seaview}}</td>
            </tr>
            <tr>
                    <th>is_renovated</th>
                    <td>{{$customer_list['0']->is_renovated}}</td>
            </tr>
            <tr>
                    <th>New House Move Time</th>
                    <td>{{$customer_list['0']->new_house_move_time}}</td>
            </tr>
            <tr>
                    <th>Want Help From Broker</th>
                    <td>{{$customer_list['0']->want_help_from_broker}}</td>
            </tr>
            <tr>
                    <th>More Info</th>
                    <td>{{$customer_list['0']->more_info}}</td>
            </tr>

            <tr>
                    <th>Created At</th>
                    <td>{{\carbon\carbon::parse($customer_list['0']->Created_at)->format('d-m-y h:i:s')}}</td>
            </tr>
            <tr>
                    <th>Updated At</th>
                    <td>{{\carbon\carbon::parse($customer_list['0']->updated_at)->format('d-m-y h:i:s')}}</td>
            </tr>
            <tr>
                <th>Recent Login</th>
                <td>
                 @foreach($login as $list1)
                        
                                @if($customer_list['0']->id==$list1->customerid)<strong>|</strong>
                
                                        {{$list1->created_at}}
                                
                                        @else

                                @endif

                   
                    @endforeach
                    <td>
                </tr>

        </tbody>
     
    </table>
    </div>
    </div>
    </div>
</div>


@endsection