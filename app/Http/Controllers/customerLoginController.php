<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\perCustomer;
use Illuminate\Http\Request;
use Carbon\Carbon;

class customerLoginController extends Controller
{
    public function index(){
        return view('front.customerReg');
    }

    public function  manage_customer_process(request $request)
    {
        if($request->post('id') > 0){
            // Sizes Updated code
            //  $model=customer::find($request->post('id'));
            //  $request->session()->flash('message','Sizes updated');
            //  $model->size=$request->post('size');
            //  $model->status=0;
            //  return redirect('admin/size');
        }else{

            $date = Carbon::today();           
            // Sizes inserted code
            $model= new customer;
            $id=random_int (1000000,9999999);
            $model->id=$id;
            $model->name=$request->post('name');
            $model->surname=$request->post('surname');
            $model->adress=$request->post('adress');
            $model->pass=$request->post('pass');
            $model->email=$request->post('email');
            $model->phoneno=$request->post('phoneno');
            $model->currentliving=$request->post('currentliving');
            $model->confirmCL=$request->post('confirmCL');
            $model->Adults=$request->post('adults');
            $model->total_child=$request->post('total_child');
            $model->city_where_buy_house=$request->post('city_where_buy_house');
            $model->area_of_house=$request->post('area_of_house');
            $model->is_garage=$request->post('is_garage');
            $model->is_seaview=$request->post('is_seaview');
            $model->budget=$request->post('budget');
            $model->is_renovated=$request->post('is_renovated');
            $model->new_house_move_time=$request->post('new_house_move_time');
            $model->want_help_from_broker=$request->post('want_help_from_broker');
            $model->more_info=$request->post('more_info');
            $model->created_at=$date;

            // for permanent record
            $model1= new perCustomer;

            $model1->name=$request->post('name');
            $model1->surname=$request->post('surname');
            $model1->adress=$request->post('adress');
            $model1->email=$request->post('email');
            $model1->pass=$request->post('pass');
            $model1->phoneno=$request->post('phoneno');
            $model1->currentliving=$request->post('currentliving');
            $model1->confirmCL=$request->post('confirmCL');
            $model1->Adults=$request->post('adults');
            $model1->total_child=$request->post('total_child');
            $model1->city_where_buy_house=$request->post('city_where_buy_house');
            $model1->area_of_house=$request->post('area_of_house');
            $model1->is_garage=$request->post('is_garage');
            $model1->is_seaview=$request->post('is_seaview');
            $model1->budget=$request->post('budget');
            $model1->is_renovated=$request->post('is_renovated');
            $model1->new_house_move_time=$request->post('new_house_move_time');
            $model1->want_help_from_broker=$request->post('want_help_from_broker');
            $model1->more_info=$request->post('more_info');
            $model1->created_at=$date;
            
        };
            $model->save();
            $model1->save();
            $request->session()->flash('message','Customer Inserted');
            return redirect('front/brokerReg');
           
    }
    public function delete(request $request,$id){

        $model=customer::find($id);
        $model->delete();
        $request->session()->flash('message','customer deleted');
        return redirect('admin/customer');
    }

    public function status(request $request,$status,$id){

        $model=Size::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('message','Size status Updated');
        return redirect('admin/size');
        }
}
