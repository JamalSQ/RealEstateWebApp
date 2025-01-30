@include('front.includes.header')
<div class="card my-3 col-md-10 px-5 mx-5">
<table class="table table-bordered table-data" id="myTable">
    <h3 class="text-center">Customer Details</h3>
    <a href="">
        <button type="submit" class="btn btn-success mb-3">Chat</button>
    </a>
         <tbody>
            <tr>
                    <th>ID</th>
                    <td>{{$customer_list->id}}</td>
            </tr>
            <tr>
                    <th>Name</th>
                    <td>{{$customer_list->name}}</td>
            </tr>         
            <tr>
                    <th>Current Living</th>
                    <td>{{$customer_list->currentliving}}</td>
            </tr>
            <tr>
                    <th>Confirm Current Living</th>
                    <td>{{$customer_list->confirmCL}}</td>
            </tr>
            <tr>
                    <th>total_child</th>
                    <td>{{$customer_list->total_child}}</td>
            </tr>
            <tr>
                    <th>city_where_buy_house</th>
                    <td>{{$customer_list->city_where_buy_house}}</td>
            </tr>
            <tr>
                    <th>area_of_house</th>
                    <td>{{$customer_list->area_of_house}}</td>
            </tr>
            <tr>
                    <th>is_garage</th>
                    <td>{{$customer_list->is_garage}}</td>
            </tr>
            <tr>
                    <th>is_seaview</th>
                    <td>{{$customer_list->is_seaview}}</td>
            </tr>
            <tr>
                    <th>is_renovated</th>
                    <td>{{$customer_list->is_renovated}}</td>
            </tr>
        </tbody>
     
    </table>
    </div>
@include('front.includes.footer')

