<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\customerlastlogin;
use App\Models\click;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function show()
    {
        $result['data'] = Customer::all();
        $result['click'] = click::all();
        return view('admin.customer', $result);
    }

    public function show_all_customer()
    {
        $result['data'] = Customer::all();

        return view('front.allcustomers', $result);
    }

    //  customer login form

    public function index1(Request $request)
    {
        if ($request->session()->has('CUSTOMER_LOGIN')) {
            return view('/');
        } else {
            return view('front.customerLogin');
        }
    }

    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        // $result=Admin::where(['email'=>$email, 'password'=>$password])->get();
        $result = Customer::where(['email' => $email])->first();

        if ($result) {
            if ($request->post('password') == $result->pass) {
                $request->session()->put('CUSTOMER_LOGIN', true);
                $request->session()->put('CUSTOMER_ID', $result->id);
                $date = Carbon::today();
                $model1 = new customerlastlogin;
                $model1->customerid = $result->id;
                $model1->lastscene = $date;
                $model1->save();
                return redirect('/');
            } else {
                $request->session()->flash('error', 'Please enter correct password');
                return redirect('customerlog');
            }
        } else {
            $request->session()->flash('error', 'Please enter correct Email');
            return redirect('customerlog');
        }
    }

    public function index()
    {
        $result['data'] = customer::all();
        return view('admin/manage_customer', $result);
    }

    public function show_CT_broker($id = '')
    {
        $result['customer_list'] = Customer::find($id);
        $ide = click::find($id);


        if ($ide != null) {
            DB::table('clicks')
                ->where('customerid', $id)
                ->update([
                    'clicks' => DB::raw('clicks + 1')
                ]);
        } elseif ($ide == null) {
            $modelclick = new click;
            $modelclick->customerid = $id;
            $modelclick->clicks = '1';
            $modelclick->save();
        }
        return view('front.show_customer_to_broker', $result);
    }

    public function show_customer(request $request, $id = '')
    {

        $result['customer_list'] = Customer::where('id', '=', $id)->get();
        $lastlogin['login'] = customerlastlogin::all();

        return view('admin/customer_details', $result, $lastlogin);
    }

    public function status(request $request, $status, $id)
    {

        $model = Customer::find($id);
        $model->status = $status;
        $model->save();
        $request->session()->flash('message', 'customer status Updated');
        return redirect('admin/customer');
    }
}
