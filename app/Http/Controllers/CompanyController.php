<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\StoreCompany;
use App\Mail\CompanyCreated;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return inertia('Companies/Index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Companies/Form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompany $request)
    {
        $logo = $request->file('logo');
        $logo_name = $logo ? $logo->getClientOriginalName() . '.' . $logo->getClientOriginalExtension() : '';

        if ($request->hasFile('logo')) {
            if (!$logo->isValid()) {
                return redirect()->back()->with('invalid_file_error', 'Invalid File');
            }

            Storage::disk('image')->put($logo_name, File::get($logo));
        }

        $company = Company::create(array_merge(
            $request->all(),
            ['logo_path' => $logo_name]
        ));

        Mail::to('ibnumalik@tbd.my')->send(new CompanyCreated($company));

        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $company = $company->load('employees');

        return inertia('Companies/Show', ['company' => $company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return inertia('Companies/Form', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCompany $request, Company $company)
    {
        // @todo allow company to change logo
        $company->update($request->only(['email', 'name', 'website']));

        return redirect()->route('companies.show', ['company' => $company->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index');
    }
}
