<?php

namespace App\Http\Controllers;

use App\Models\DataCenter\Dcim\Interfaces\DeviceInterface;
use App\Http\Requests\StoreDeviceInterfaceRequest;
use App\Http\Requests\UpdateDeviceInterfaceRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class DeviceInterfaceController extends Controller
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
    public function store(StoreDeviceInterfaceRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DeviceInterface $deviceInterface): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeviceInterface $deviceInterface): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeviceInterfaceRequest $request, DeviceInterface $deviceInterface): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeviceInterface $deviceInterface): RedirectResponse
    {
        //
    }
}
