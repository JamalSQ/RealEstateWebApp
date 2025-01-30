@include('front.includes.header')
@include('front.includes.navbar_front')
<div class="content-wrapper">
<div class="container-fluid">
<h1 class="text-center pt-4">Brokers Details</h1>
<div class="card my-3 col-md-10 px-5 mx-5">
<table class="table table-borderless table-data3 text-center" id="myTable">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Broker company name</th>
                <th>Broker city</th>
                <th>Broker name</th>
                <th>Chat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $list)
            <tr>
                <td>{{$list->id}}</td>
                <td>{{$list->bc_name}}</td>
                <td>{{$list->b_city}}</td>
                <td>{{$list->b_name}}</td>
                <td><a href="{{url('layout/customer/show_customer_details')}}/{{$list->id}}">
                    <button type="submit" class="btn btn-success">Chat</button></a> </td>
              </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    </div>
</div>

@include('front.includes.footer')