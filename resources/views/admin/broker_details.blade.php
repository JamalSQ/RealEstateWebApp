@extends('admin.app')
@section('page_title','Show broker Details')
@section('Broker_selected','active')
@section('container')
<div class="content-wrapper">
<div class="container-fluid">
<h1 class="text-center pt-4">Broker Details</h1>
<a href="{{url('admin/broker')}}" class="py-2">
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
                    <th>bc_name</th>
                    <td>{{$customer_list['0']->bc_name}}</td>
            </tr>
          
            <tr>
                    <th>bc_number</th>
                    <td>{{$customer_list['0']->bc_number}}</td>
            </tr>
            <tr>
                    <th>b_city</th>
                    <td>{{$customer_list['0']->b_city}}</td>
            </tr>
            <tr>
                    <th>b_name</th>
                    <td>{{$customer_list['0']->b_name}}</td>
            </tr>
            <tr>
                    <th>b_sname</th>
                    <td>{{$customer_list['0']->	b_sname}}</td>
            </tr>
            <tr>
                    <th>b_email</th>
                    <td>{{$customer_list['0']->b_email}}</td>
            </tr>
            <tr>
                    <th>b_phoneno</th>
                    <td>{{$customer_list['0']->b_phoneno}}</td>
            </tr>
            <tr>
                    <th>is_member_of_fmi</th>
                    <td>{{$customer_list['0']->is_member_of_fmi}}</td>
            </tr>
            <tr>
                    <th>b_working_area</th>
                    <td>{{$customer_list['0']->b_working_area}}</td>
            </tr>
            <tr>
                    <th>b_customer_area</th>
                    <td>{{$customer_list['0']->b_customer_area}}</td>
            </tr>
            <tr>
                    <th>is_approved</th>
                    <td>{{$customer_list['0']->is_approved}}</td>
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
                        
                                @if($customer_list['0']->id==$list1->brokerid)<strong>|</strong>
                
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