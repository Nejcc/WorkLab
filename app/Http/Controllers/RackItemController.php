<?php

namespace App\Http\Controllers;

use App\Models\DataCenter\Dcim\RackItem;
use App\Http\Requests\StoreRackItemRequest;
use App\Http\Requests\UpdateRackItemRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class RackItemController extends Controller
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
    public function store(StoreRackItemRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RackItem $rackItem): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RackItem $rackItem): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRackItemRequest $request, RackItem $rackItem): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RackItem $rackItem): RedirectResponse
    {
        //
    }
}
