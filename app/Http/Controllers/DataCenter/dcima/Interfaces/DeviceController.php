<?php



namespace  App\Http\Controllers\DataCenter\Dcima\Interfaces;


use App\Http\Controllers\Controller;
use App\Models\DataCenter\Dcim\Device;


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
