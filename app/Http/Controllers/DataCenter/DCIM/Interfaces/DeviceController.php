<?php

namespace App\Http\Controllers\DataCenter\Dcim\Interfaces;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreManufacturerRequest;
use App\Http\Requests\UpdateManufacturerRequest;
use App\Models\DataCenter\DCIM\Device;
use App\Models\DataCenter\DCIM\Manufacturer;
use App\Models\DataCenter\Organization\Tenancy\Tenant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class DeviceController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        $devices = Device::query()->get();
//        dd($tenants);
        return view('data-center.dcim.interfaces.devices.index', compact('devices'));
    }

    public function show(Device $device)
    {
        $device->load('device_interfaces');

        $ports = collect($device->device_interfaces)->groupBy('port_type', true);
//        dd($ports->toArray());

        return view('data-center.dcim.interfaces.devices.show', compact(['device','ports']));
    }
}
