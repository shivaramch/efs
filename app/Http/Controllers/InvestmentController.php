<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Investment;
use Illuminate\Http\Request;

use App\Http\Requests;

class InvestmentController extends Controller
{
    public function index()
    {

        $investments=Investment::all();
        return view('investments.index',compact('investments'));
    }
    public function show($id)
    {
        $investment = Investment::findOrFail($id);

        return view('investments.show',compact('investment'));
    }

    public function create()
    {
        $customers = Customer::lists('name','id');
        return view('investments.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $investment= new Investment($request->all());
        $investment->save();

        return redirect('investments');
    }
    public function edit($id)
    {
        $investment=Investment::find($id);
        return view('investments.edit',compact('investment'));
    }
    public function update($id,Request $request)
    {
        //
        $investment= new Investment($request->all());
        $investment=Investment::find($id);
        $investment->update($request->all());
        return redirect('investments');
    }
    public function destroy($id)
    {
        Investment::find($id)->delete();
        return redirect('investments');
    }
}