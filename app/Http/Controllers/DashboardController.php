<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\broker;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function show(Request $request ){
        $result['Cdata']=Customer::all();
        $result['Bdata']=broker::all();
        $result['cn']=count($result['Cdata']);
        $result['bn']=count($result['Bdata']);
        $result['CCdata'] =DB::table('customers')->get();


        $search=$request->post('search');
        $result['Sdata'] =DB::table('customers')->where('currentliving',$search)->get();
        $result['sc']=count($result['Sdata']);
        $result['bc']="";

        return view('admin.dashboard',$result);
    }
    public function search(){

        $result['Cdata']=Customer::all();
        $result['Bdata']=broker::all();
        $result['cn']=count($result['Cdata']);
        $result['bn']=count($result['Bdata']);
        $result['CCdata'] =DB::table('customers')->get();    
        
        return view('admin.dashboard',$result);
    }

    public function showbc(Request $request){
        $result['Cdata']=Customer::all();
        $result['Bdata']=broker::all();
        $result['cn']=count($result['Cdata']);
        $result['bn']=count($result['Bdata']);
        $result['CCdata'] =DB::table('customers')->get();
        $search=$request->post('search');
        $result['Sdata'] =DB::table('brokers')->where('b_city',$search)->get();
        $result['bc']=count($result['Sdata']);    
        $result['sc']="";  

        return view('admin.dashboard',$result);
    }
}
