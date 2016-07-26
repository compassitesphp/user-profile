<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home');
    }

    function deleteEmployee($id) {
        $employee = new Employee;
        $emp = $employee->find($id);
        $emp->delete();
        \Session::flash('flash_message', 'Record deleted Successfully');
        return redirect('/listEmployee');
    }


}
