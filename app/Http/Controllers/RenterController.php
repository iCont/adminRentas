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
        $request->validate([
            'name'=>'required',
            'app'=>'required',
            'id_apartment'=>'required',
            'id_status_renters'=>'required',
            'arrival_date'=>'required',
        ]);
        // dd($request);
        Renters::create([
            'name'=>$request->name,
            'app'=>$request->app,
            'apm'=>$request->apm,
            'phone'=>$request->phone,
            'email'=>$request->mail,
            'id_apartment'=>$request->id_apartment,
            'id_status_renter'=>$request->id_status_renters,
            'arrival_date'=>$request->arrival_date,
        ]);
        return back()->with('success','ok');
    }

    public function show(Request $request, Renters $renter){
        return view('renter.show',compact('renter'));
    }

    public function update(Request $request, Renters $renter){
        // dd($request);

        $renter->name = $request->name;
        $renter->app = $request->app;
        $renter->apm = $request->apm;
        $renter->email = $request->mail;
        $renter->id_apartment = $request->id_apartment;
        $renter->id_status_renter = $request->id_status_renter;
        $renter->id_status_renter = $request->id_status_renter;
        $renter->update();
        return back()->with('success','ok');
    }

    public function destroy(Renters $renter){
        $renter ->delete();
        // dd($renter);
        return back()->with('delete_renter','ok');
    }
}
