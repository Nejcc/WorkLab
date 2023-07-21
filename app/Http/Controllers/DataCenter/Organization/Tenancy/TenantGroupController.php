<?php

namespace App\Http\Controllers\DataCenter\Organization\Tenancy;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTenantGroupRequest;
use App\Http\Requests\UpdateTenantGroupRequest;
use App\Models\DataCenter\Organization\Tenancy\TenantGroup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TenantGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTenantGroupRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TenantGroup $tenantGroup): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TenantGroup $tenantGroup): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTenantGroupRequest $request, TenantGroup $tenantGroup): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TenantGroup $tenantGroup): RedirectResponse
    {
        //
    }
}
