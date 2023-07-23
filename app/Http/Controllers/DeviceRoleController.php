<?php

namespace App\Http\Controllers;

use App\Models\DataCenter\Dcim\DeviceRole;
use App\Http\Requests\StoreDeviceRoleRequest;
use App\Http\Requests\UpdateDeviceRoleRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class DeviceRoleController extends Controller
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
    public function store(StoreDeviceRoleRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DeviceRole $deviceRole): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeviceRole $deviceRole): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeviceRoleRequest $request, DeviceRole $deviceRole): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeviceRole $deviceRole): RedirectResponse
    {
        //
    }
}
