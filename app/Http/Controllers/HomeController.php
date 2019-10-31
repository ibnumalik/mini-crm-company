<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_companies = Company::all()->count();
        $total_employees = Employee::all()->count();

        return view('home', compact('total_companies', 'total_employees'));
    }
}
