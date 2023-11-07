<?php

namespace App\Http\Controllers;
use App\Models\fee;

use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index()
    {
        $fee = fee::latest()->paginate(5);
        return view('fee_table',compact('fee'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function store(Request $request)
    {
            $fee = new fee();
            $request-> validate([
               'name'=>'required','class'=>'required','roll'=>'required','payment_method'=>'required',
               'amount'=>'required','payment_date'=>'required'
            ]);
            $fee->name=$request->name;
            $fee->class=$request->class;
            $fee->roll=$request->roll;
            $fee->payment_method=$request->payment_method;
            $fee->amount=$request->amount;
            $fee->payment_date=$request->payment_date;  
            $fee->save();
            $fee=fee::all();
            return redirect('fee_table')
            ->with('success','Payment created');

    }

    public function edit($id)
    {
        $fee= fee::find($id);
        return view('fee_edit',compact('fee'));
    }

    public function update(Request $request, $id)
    {
        $fee= fee::find($id);
        $request-> validate([
            'name'=>'required', 'class'=>'required','roll'=>'required',
            'payment_method'=>'required','amount'=>'required','payment_date'=>'required'

        ]);
        $fee->name= $request->name;
        $fee->class= $request->class;
        $fee->roll= $request->roll;
        $fee->payment_method=$request->payment_method;
        $fee->amount=$request->amount;
        $fee->payment_date=$request->payment_date;  
        $fee->update();
        return redirect('fee_table')
        ->with('success','Payment updated');
    }

    public function destroy($id)
    {
        $fee=fee::findOrFail($id);
        $fee->delete();
        return redirect()->back() ->with('success','payment deleted');
    }

   


}
