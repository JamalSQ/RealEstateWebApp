<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\broker;
use App\Models\per_broker_record;
use App\Models\brokerlastlogin;
use App\Models\searchByBroker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class BrokerController extends Controller
{
        
    public function show(){
        $result['data']=broker::all();
        return view('admin.broker',$result);
     }
     public function show_broker(request $request,$id='')
     {
         
         $result['customer_list']=per_broker_record::where('id','=',$id)->get();
         $lastlogin['login']=brokerlastlogin::all();
         return view('admin/broker_details',$result,$lastlogin);
     }
// for showing records to the front end
     public function show_all_broker(){
      $result['data']=broker::all();
      return view('front.allBroker',$result);
   }

// for login
     public function index(Request $request)
     {   
          if($request->session()->has('BROKER_LOGIN')){
            return view('/');
        }else{
            return view('front.brokerLogin');
        }
     }

     public function auth(Request $request)
     {
         $email=$request->post('b_email');
         $password=$request->post('b_password');
 
         // $result=Admin::where(['email'=>$email, 'password'=>$password])->get();
         $result=broker::where(['b_email'=>$email])->first();
         
         if($result){
             if($request->post('b_password')==$result->b_pass){
                 $request->session()->put('BROKER_LOGIN',true);
                 $request->session()->put('BROKER_ID',$result->id);
                 $date = Carbon::today();  
                 $model1=new brokerlastlogin;
                 $model1->brokerid=$result->id;
                 $model1->lastscene=$date;
                 $model1->save();
                 return redirect('/');
             }else{
                 $request->session()->flash('error','Please enter correct password');
                 return view('front.brokerLogin');
             }
         }else{
             $request->session()->flash('error','Please enter correct Email');
             return view('front.brokerLogin');
         }
            
     }
       public function status(request $request,$status,$id){
 
         $model1=per_broker_record::find($id);
         $model1->is_approved=$status;
            if($status==1){
                    $model=new broker;
                    $model->id=$model1->id;
                    $model->bc_name=$model1->bc_name;
                    $model->bc_number=$model1->bc_number;
                    $model->b_city=$model1->b_city;
                    $model->b_name=$model1->b_name;
                    $model->b_pass=$model1->b_pass;
                    $model->b_sname=$model1->b_sname;
                    $model->b_email=$model1->b_email;
                    $model->b_phoneno=$model1->b_phoneno;
                    $model->is_member_of_fmi=$model1->is_member_of_fmi;
                    $model->b_working_area=$model1->b_working_area;
                    $model->b_customer_area=$model1->b_customer_area;
                    $model->save();
            }elseif($status==0){
                $models=broker::find($id);
                $models->delete();
            }
        $model1->save();
         $request->session()->flash('message','customer status Updated');
         return redirect('admin/broker');
         }

    public function searches(){
    $result['data']=searchByBroker::all();
    return view('admin.Bsearch',$result);
    }
         
}
