<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Ultra;

class RegController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    public function save()
    {

        $tour = new Tour;
        $item = request('mc-name');
        $tour->ultra = $item;
        $item = request('mc-ticket');
        $tour->ticket = $item;
        $item = request('mc-polo');
        $tour->polo = $item;
        $tour->save();

        $ultra = new Ultra;

        $item = request('mc-name');
        $ultra->name = $item;
        $item = request('mc-email');
        $ultra->email = $item;
        $item = request('mc-phone');
        $ultra->phone = $item;
        $item = request('mc-mlsz');
        $ultra->mlsz = $item;
        $item = request('mc-partner');
        $ultra->ftc_partner = $item;
        $item = request('mc-card');
        $ultra->ftc_card = $item;
        $item = request('mc-birthday');
        $ultra->birthday = $item;
        $ultra->save();

        return redirect('/home');
    }
}
