<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class brokerPortalController extends Controller
{
    public function index()
    {
        return view('brokerportal.dashboard');
    }

    public function addProperty()
    {
        return view('brokerportal.property.addproperty');
    }

    public function ListAllProperty()
    {
        return view('brokerportal.property.brokerPropertyListing');
    }

    public function offers()
    {
        return view('brokerportal.offers.offers');
    }

    public function notifications()
    {
        return view('brokerportal.chats.notifications');
    }

    public function chats()
    {
        return view('brokerportal.chats.brokerChats');
    }

    public function history()
    {
        return view('brokerportal.brokerhistory');
    }

    public function propertyAnalytics()
    {
        return view('brokerportal.property.propertyAnalytics');
    }

    public function accountSettings()
    {
        return view('brokerportal.accountSettings');
    }

    public function supportResources()
    {
        return view('brokerportal.supportResources');
    }
}
