<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\broker;
use App\Models\per_broker_record;
use Carbon\Carbon;

class brokerLoginController extends Controller
{
    public function index(){
        return view('front.brokerReg');
    }
    

    // public function index()
    // {
    //     $result['data']=Size::all();
    //     return view('admin/size',$result);
    // }

    public function  manage_broker_process(request $request)
    {
        if($request->post('id') > 0){
            // Sizes Updated code
             $model=customer::find($request->post('id'));
             $request->session()->flash('message','Sizes updated');
             $model->size=$request->post('size');
             $model->status=0;
             return redirect('admin/size');
        }else{
            $date = Carbon::today();           
            // for permonent record
            $model1= new per_broker_record;
            $id=random_int (100000,999999);
            $model1->id=$id;
            $model1->bc_name=$request->post('bc_name');
            $model1->bc_number=$request->post('bc_number');
            $model1->b_city=$request->post('b_city');
            $model1->b_pass=$request->post('pass');
            $model1->b_name=$request->post('b_name');
            $model1->b_pass=$request->post('b_pass');
            $model1->b_sname=$request->post('b_sname');
            $model1->b_email=$request->post('b_email');
            $model1->b_phoneno=$request->post('b_phoneno');
            $model1->is_member_of_fmi=$request->post('is_member_of_fmi');
            $model1->b_working_area=$request->post('b_working_area');
            $model1->b_customer_area=$request->post('b_customer_area');
            $model1->is_approved='0';
            $model1->created_at=$date;
            $model= new broker;

            // for temporary record
        };
            
            $model1->save();
            $request->session()->flash('message','Customer Inserted');
            return redirect('front/brokerInsert');
    }
    public function delete(request $request,$id){

        $model=broker::find($id);
        $model->delete();
        $request->session()->flash('message','customer deleted');
        return redirect('admin/broker');
    }

}
