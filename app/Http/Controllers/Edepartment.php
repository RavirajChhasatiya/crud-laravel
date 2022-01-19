<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\department;


class Edepartment extends Controller
{
    
     // department add

     public function deptadd(Request $request){
        department::insert([
            'employee_dept'=>$request->employee_department,
                        'salary'=>$request->salary,
                        ]);
        return Redirect()->back()->with('success','Employeee added successfully');
        
    }
    public function view(){
        
        return view('department');
        
    }
}
