<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\click;


class frontController extends Controller
{

    public function index()
    {
        $result['click'] = click::all();
        return view('front.home', $result);
    }

    public function aboutus()
    {
        return view('front.about');
    }

    public function property()
    {
        return view('front.properties');
    }

    public function contactus()
    {
        return view('front.contactus');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function filterproprty()
    {
        return view('front.filterProperties');
    }

    public function propertydetail()
    {
        return view('front.propertydetail');
    }
}
