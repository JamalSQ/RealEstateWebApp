<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\broker;
use App\Models\brokerlastlogin;
use App\Models\searchByBroker;
use Carbon\Carbon;

class BrokerController extends Controller
{
    public function show()
    {
        $result['data'] = broker::all();
        return view('admin.broker', $result);
    }
    public function show_broker(request $request, $id = '')
    {
        $result['customer_list'] = broker::where('id', '=', $id)->get();
        $lastlogin['login'] = brokerlastlogin::all();
        return view('admin/broker_details', $result, $lastlogin);
    }
    // for showing records to the front end
    public function show_all_broker()
    {
        $result['data'] = broker::all();
        return view('front.allBroker', $result);
    }

    // for login
    public function index(Request $request)
    {
        if ($request->session()->has('BROKER_LOGIN')) {
            return view('/');
        } else {
            return view('front.brokerLogin');
        }
    }

    public function auth(Request $request)
    {
        $email = $request->post('b_email');
        $password = $request->post('b_password');

        // $result=Admin::where(['email'=>$email, 'password'=>$password])->get();
        $result = broker::where(['b_email' => $email])->first();

        if ($result) {
            if ($request->post('b_password') == $result->b_pass) {
                $request->session()->put('BROKER_LOGIN', true);
                $request->session()->put('BROKER_ID', $result->id);
                $date = Carbon::today();
                $model1 = new brokerlastlogin;
                $model1->brokerid = $result->id;
                $model1->lastscene = $date;
                $model1->save();
                return redirect('/');
            } else {
                $request->session()->flash('error', 'Please enter correct password');
                return view('front.brokerLogin');
            }
        } else {
            $request->session()->flash('error', 'Please enter correct Email');
            return view('front.brokerLogin');
        }
    }
    public function status(request $request, $status, $id)
    {

        // $brokerdata = broker::where('id', $id)->update(['is_approved' => $status]);
        $brokerdata = Broker::find($id);

        if ($brokerdata) {
            $brokerdata->is_approved = $status;
            $brokerdata->save();

            // SendBrokerAccountApprovedEmail::dispatch($brokerdata);
        }

        $request->session()->flash('message', 'Please Allow the email and account approvel from your code base BrokerController.php');
        // $request->session()->flash('message', 'status update successfully');
        return redirect('admin/broker');
    }

    public function searches()
    {
        $result['data'] = searchByBroker::all();
        return view('admin.Bsearch', $result);
    }

    public function deletedBrokers()
    {
        $result['data'] = broker::onlyTrashed()->get();
        return view('admin.deletedbroker', $result);
    }

    public function restoreBroker($id)
    {
        $brokerRecord = broker::withTrashed()->find($id);
        $brokerRecord->restore();
        // Redirect back to the broker record page with a flash message
        return redirect('admin/broker')->with('message', 'The broker has been restored. See it in the list of all brokers.');
    }

    public function permanentdeletebroker($id)
    {
        $perDelbroRecord = broker::withTrashed()->find($id);
        $perDelbroRecord->forceDelete();
        // Redirect back to the broker record page with a flash message
        return redirect('admin/admin/broker/deleted')->with('message', 'The broker has been deleted permanantly.');
    }
}
