<?php

namespace App\Http\Controllers;

use App\Models\CatApartments;
use App\Models\CatStatusRenters;
use App\Models\Renters;
use Illuminate\Http\Request;

class RenterController extends Controller
{
    public function index(){
        $renters = Renters::latest()->get();
        $apartments = CatApartments::all();
        $status_renters = CatStatusRenters::all();
        // dd($apartments)
        return view('renter.index', compact('renters','apartments','status_renters'));
    }

    public function store(Request $request){
        // dd($request);
        Renters::create([
            'name'=>$request->name,
            'app'=>$request->app,
            'apm'=>$request->apm,
            'id_apartment'=>$request->id_apartment,
            'arrival_date'=>$request->arrival_date,
            'id_status_renter'=>$request->id_status_renters,
            'email'=>$request->mail,
        ]);
        return back()->with('success','ok');
    }

    public function edit(){}
    public function update(){}
    public function destroy(){}
}
