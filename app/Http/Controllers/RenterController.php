<?php

namespace App\Http\Controllers;

use App\Models\Renters;
use Illuminate\Http\Request;

class RenterController extends Controller
{
    public function index(){
        $renters = Renters::latest()->get();
        return view('renter.index', compact('renters'));
    }

    public function store(){}
    public function edit(){}
    public function update(){}
    public function destroy(){}
}
