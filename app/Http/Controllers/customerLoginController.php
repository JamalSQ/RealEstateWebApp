<?php

namespace App\Http\Controllers;

use App\Events\registeredUser;
use App\Models\customer;
use App\Models\perCustomer;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Event;

class customerLoginController extends Controller
{
    public function index()
    {
        return view('front.customerReg');
    }

    public function  manage_customer_process(request $request)
    {

        $rules = [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'pass' => 'required|string|min:8', // Assuming you have a 'password_confirmation' field
            'email' => 'required|email|unique:customers,email', // Assuming you're storing this in the 'users' table
            'phoneno' => 'required|numeric|digits_between:10,15', // Assuming phone number has 10-15 digits
            'currentliving' => 'required|string|max:255',
            'confirmCL' => 'required|string|max:255', // Assuming it's a confirmation of current living
            'Adults' => 'required|integer|min:1',
            'total_child' => 'required|integer|min:0',
            'city_where_buy_house' => 'required|string|max:255',
            'area_of_house' => 'required|string|max:255',
            'is_garage' => 'required|boolean', // Assuming it's a true/false checkbox
            'is_seaview' => 'required|boolean', // Assuming it's a true/false checkbox
            'budget' => 'required|numeric|min:0',
            'is_renovated' => 'required|boolean', // Assuming it's a true/false checkbox
            'new_house_move_time' => 'required|date', // Assuming it's a valid date
            'want_help_from_broker' => 'required|string|max:255',
            'more_info' => 'nullable|string', // Assuming it's optional additional information
        ];
        // Validate the incoming request
        // $validated = $request->validate($rules);


        $date = Carbon::today();
        $model = new customer;
        $id = random_int(1000000, 9999999);
        $model->id = $id;
        $model->name = $request->post('name');
        $model->surname = $request->post('surname');
        $model->adress = $request->post('adress');
        $model->pass = $request->post('pass');
        $model->email = $request->post('email');
        $model->phoneno = $request->post('phoneno');
        $model->currentliving = $request->post('currentliving');
        $model->confirmCL = $request->post('confirmCL');
        $model->Adults = $request->post('adults');
        $model->total_child = $request->post('total_child');
        $model->city_where_buy_house = $request->post('city_where_buy_house');
        $model->area_of_house = $request->post('area_of_house');
        $model->is_garage = $request->post('is_garage');
        $model->is_seaview = $request->post('is_seaview');
        $model->budget = $request->post('budget');
        $model->is_renovated = $request->post('is_renovated');
        $model->new_house_move_time = $request->post('new_house_move_time');
        $model->want_help_from_broker = $request->post('want_help_from_broker');
        $model->more_info = $request->post('more_info');
        $model->created_at = $date;
        // $model->save();
        // $model1->save();
        // $request->session()->flash('success', 'Customer Record Created');
        $request->session()->flash('success', 'uncomment the code to insert the record and shoot the email');

        // this event will notify the admin via email, the user itself and
        //  also store the log into the laravel.log file withe the name and email
        // Event::dispatch(new registeredUser($model));
        return redirect('front/customerReg');
    }
    public function delete(request $request, $id)
    {

        $model = customer::find($id);
        $model->delete();
        $request->session()->flash('message', 'customer deleted');
        return redirect('admin/customer');
    }
}
