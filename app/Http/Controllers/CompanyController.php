<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Http\Resources\CompanyResource
     */
    public function index()
    {
        $companies = Company::all();

        return CompanyResource::collection($companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CompanyRequest  $request
     * @return \App\Http\Resources\CompanyResource
     */
    public function store(CompanyRequest $request)
    {
        $company = Company::create($request->validated());

        return new CompanyResource($company);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \App\Http\Resources\CompanyResource
     */
    public function show(Company $company)
    {
        return new CompanyResource($company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CompanyRequest
     * @param  \App\Models\Company  $company
     * @return \App\Http\Resources\CompanyResource
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $company->update($request->validated());

        return new CompanyResource($company);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \App\Http\Resources\CompanyResource
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return (new CompanyResource($company))->response()->setStatusCode(204);
    }
}