<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\EmpList;
use App\Technology;
use App\Department;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    //displaying technology list
     public function techList()
    {
        $tech=new Technology;
        $result['response']= $tech->all();
        return view('technology',$result);
    }
    
    //adding new technology to the list
     function doAddTech()
    {
  
               
        return view('add');
         
    }
    
    function tech1(Request $request)
    {
        $technologyName=$request->input('tech_name');
        

        $tech=new Technology;
        $tech->tech_name=$technologyName;
        
        $tech->save(); 
        
        return redirect('/tech');
    }
    
    //displaying department list
    public function deptList() {
        $dept = new Department;
        $result['response'] = $dept->all();
        return view('department', $result);
    }

    //adding new department the list
    function doAddDept() {
       
        return view('addDept');
    }

    function dept1(Request $request) {
        $departmentName = $request->input('dept_name');
        $dept = new Department;
        $dept->dept_name = $departmentName;
        $dept->save();
        return redirect('/dept');
    }
    
    
    //this function take u to the list of employee displaying 
    //his/her id,name and respective action to be performed 
     function empList()
    {
        $emp=new EmpList;
        $result['response']=$emp->all();
        return view('listEmployee',$result);
    }
    
    
    //adding new employee -entering the employee form 
    function doAddEmployee()
    {
        $dept=new Department();
        $result['response']=$dept->all();//extracting list of department from department table
         
        $tech=new Technology;
        $result1['response1']=$tech->all();//extracting list of technology from technology table
       
        return view('employeeForm',$result,$result1);
    }
    
     
    
    function newEmployee1(request $request)
    {
         $employeeName=$request->input('employee_name');
         $employeeEmail=$request->input('employee_email');
         $employeeMobile=$request->input('mobile');
         $employeeDoj=$request->input(' doj ');
         $employeeDesignation=$request->input('designation');
         $employeeEmergencyNo=$request->input(' emergency_no');
         $employeeAddress=$request->input('address ');
         $employeeProject=$request->input(' project');
         $employeeRepotManager=$request->input('reporting_manager');
         $employeeDept=$request->input('dept_id');
         
         
         $employee=new EmpList;
         $employee->employee_name=$employeeName;
         $employee->employee_email=$employeeEmail;
         $employee->mobile=$employeeMobile;
         $employee->doj= $employeeDoj;
         $employee->designation= $employeeDesignation;
         $employee->emergency_no= $employeeEmergencyNo;
         $employee->address=$employeeAddress;
         $employee->project= $employeeProject;
         $employee->reporting_manager=$employeeRepotManager;
         $employee->dept_id=$employeeDept;
         
         $tech=new Technology;
         
        // $data['technology'][]=$request->input('tech_id');
         //$tech->id=$data['technology'][];//doubt
         
         $employee->save();
         return redirect('/emplist');
    }
}
