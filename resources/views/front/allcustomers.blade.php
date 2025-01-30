@include('front.includes.header')
@include('front.includes.navbar_front')
<div class="content-wrapper">
<div class="container-fluid">
<h1 class="text-center pt-4">Customers Details</h1>
<div class="card my-3 col-md-10 px-5 mx-5">
<table class="table table-borderless table-data3 text-center" id="myTable">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>View Prifles</th>
            </tr>
        </thead>
        <tbody>
          @if(isset($data))
            @foreach($data as $list)
            <tr>
                <td>{{$list->id}}</td>
                <td>{{$list->name}}</td>
                <td>
            <a href="{{url('front/customer/show_customer_details')}}/{{$list->id}}">
                <button type="submit" class="btn btn-success" onclick="myFunction()">View </button>
            </a>
            <form action="">
                <input type="hidden" name="click" id="clicks" value="">     
                <input type="hidden" name="id" id="id" value="{{$list->id}}">     
            </form>      
                </td>
            </tr>
            @endforeach

            @endif
        </tbody>
    </table>
    </div>
    </div>
    </div>
</div>
@include('front.includes.footer')