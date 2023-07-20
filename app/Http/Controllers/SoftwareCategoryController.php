<?php

namespace App\Http\Controllers;

use App\Models\SoftwareCategory;
use App\Http\Requests\StoreSoftwareCategoryRequest;
use App\Http\Requests\UpdateSoftwareCategoryRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class SoftwareCategoryController extends Controller
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
    public function store(StoreSoftwareCategoryRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SoftwareCategory $softwareCategory): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoftwareCategory $softwareCategory): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSoftwareCategoryRequest $request, SoftwareCategory $softwareCategory): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoftwareCategory $softwareCategory): RedirectResponse
    {
        //
    }
}
