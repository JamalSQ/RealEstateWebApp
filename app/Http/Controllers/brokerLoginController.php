<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrokerRequest; // Use the custom request class
use App\Models\Broker;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class BrokerLoginController extends Controller
{
    // Display broker registration page
    public function index()
    {
        return view('front.brokerReg');
    }

    // Handle broker creation
    public function manage_broker_process(BrokerRequest $request)
    {

        try {
            $this->createBroker($request);
            $request->session()->flash('success', 'Broker record inserted');
            return redirect('front/brokerInsert');
        } catch (\Exception $e) {
            Log::error('Broker creation failed', ['error' => $e->getMessage()]);
            $request->session()->flash('error', 'An error occurred while processing your request.');
            return redirect('front/brokerInsert');
        }
    }

    // Delete broker
    public function delete(Request $request, $id)
    {
        Broker::findOrFail($id)->delete();
        $request->session()->flash('message', 'Broker record deleted');
        return redirect('admin/broker');
    }

    // Helper method to create broker
    private function createBroker(BrokerRequest $request)
    {
        $brokerData = array_merge($request->validated(), [
            // 'id' => (string) Str::uuid(),
            'id' => random_int(111111, 999999),
            'created_at' => Carbon::now(),
            'is_approved' => '0',
        ]);
        Broker::create($brokerData);
    }
}
