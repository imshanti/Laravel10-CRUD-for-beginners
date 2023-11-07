<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\fee;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
     public function index()
     {
     $student = Student::latest()->paginate();
     return view('/table',compact('student'))->with('i', (request()->input('page', 1) - 1) * 5);

     }
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $student = Student::latest()->get();
    //         return Datatables::of($student)
    //                 ->addIndexColumn()
    //                 ->addColumn('action', function($row){
   
    //                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
    //                         return $btn;
    //                     })
    //                     ->rawColumns(['action'])
    //                     ->make(true);
    //         }
          
    //         return view('table');
    //   }
    

    public function store(Request $request)
    {
        $student=new Student();
        $request-> validate([
            'name'=>'required', 'class'=>'required','roll'=>'required',
            'address'=>'required','email'=>'required','phone'=>'required'

        ]);
        $student->name=$request->name;
        $student->class=$request->class;
        $student->roll=$request->roll;
        $student->address=$request->address;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        $student=Student:: all();
        return redirect('/')
         ->with('success','student created');
         
    } 

    // public function storefee(Request $request)
    // {
    //         $fee=new fee();
    //         $fee->name=$request->name;
    //         $fee->class=$request->class;
    //         $fee->roll=$request->roll;
    //         $fee->payment_method=$request->payment_method;
    //         $fee->amount=$request->amount;
    //         $fee->date=$request->date;  
    //         $fee->save();
    //         $fee=fee::all()->sortByDesc('id');
    //         return view('fee_table',compact('fee'));

    // }
    public function edit($id)
    {
        $student= Student::find($id);
        return view('edit',compact('student'));
    }

    public function update(Request $request, $id)
    {
      
        $request-> validate([
            'name'=>'required', 'class'=>'required','roll'=>'required',
            'address'=>'required','email'=>'required','phone'=>'required'

        ]);
        $student= Student::find($id);
        $student->name=$request->name;
        $student->class=$request->class;
        $student->roll=$request->roll;
        $student->address=$request->address;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->update();
     return redirect('/')->with('success','student Updated');
    }
     public function destroy($id)
    {
    $student=Student::findOrFail($id);
    $student->delete();
    return redirect()->back() ->with('success','Student deleted');
    }

    public function show($id)
    {
      
        $detail = Student::join('fee', 'students.id', '=', 'fee.id')
        ->get(['students.name', 'students.address', 'students.email','student.phone','fee.roll', 'fee.amount']);
        return view('details', compact('detail'));
    }
}
