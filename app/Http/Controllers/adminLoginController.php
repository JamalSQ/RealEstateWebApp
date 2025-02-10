<?php

namespace App\Http\Controllers;

use App\Models\admin;

use Illuminate\Http\Request;

class adminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('ADMIN_LOGIN')) {
            return redirect('admin/dashboard');
        } else {
            return view('admin/admin_login');
        }
    }

    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        // $result=Admin::where(['email'=>$email, 'password'=>$password])->get();
        $result = admin::where(['email' => $email])->first();

        if ($result) {
            if ($request->post('password') == $result->password) {
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result->id);
                return redirect('admin/dashboard');
            } else {
                $request->session()->flash('error', 'Please enter correct password');
                return redirect('admin');
            }
        } else {
            $request->session()->flash('error', 'The Email does not Exist.');
            return redirect('admin');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
