<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     *
     */
    public function index()
    {
        return CompanyResource::collection(Company::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CompanyRequest $request
     * @return \App\Http\Resources\CompanyResource
     */
    public function store(CompanyRequest $request): CompanyResource
    {
        $company = Company::create($request->validated());
        return new CompanyResource($company);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \App\Http\Resources\CompanyResource
     */
    public function show(company $company): CompanyResource
    {
        return new CompanyResource($company);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param CompanyRequest $request
     * @param \App\Models\company $company
     * @return CompanyResource|CompanyResource
     */
    public function update(CompanyRequest $request, company $company): CompanyResource
    {
        $company->update($request->validated());
        return new CompanyResource($company);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company)
    {
        $company->delete();
        return response()->noContent();
    }
}
