<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;





use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\DB;
class employeeController extends Controller
{

   

    public function allemployees(){
        $employee=employee::latest() -> paginate(4);
        return view('welcome',compact('employee'));
    }
    public function addemployee(Request $request){
            $validated = $request->validate([
                        'employee_id' => 'required|unique:employees|max:255',
                        'employee_name' => 'required',
                        'employee_department'=>'required',
                        ],
                        [
                        'employee_id.required'=>'please enter the id brother',
                        'employee_id.unique'=>' id already used brother',

                        'employee_name.required'=>'please enter the name brother',
                        'employee_department.required'=>'please enter the department brother',
                        ]);
                
                    employee::insert([
                        'employee_id'=>$request->employee_id,
                        'employee_name'=>$request->employee_name,
                        'employee_dept'=>$request->employee_department,
                        'created_at'=>Carbon::now(),
                    ]);

                    // $data=array();
                    // $data['employee_id']=$request->employee_id;
                    // $data['employee_name']=$request->employee_name;
                    // $data['employee_dept']=$request->employee_department;
                    // $data['created_at']=$request->Carbon::now();
                    // DB::table('employees')->insert($data);
                    return Redirect()->back()->with('success','Employeee added successfully');

                    }
public function edit($id){
    $employee=employee::find($id);
    return view('welcome',compact('employee'));
}

                   
}
