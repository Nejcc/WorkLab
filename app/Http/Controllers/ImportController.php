<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\DataCenter\DCIM\Device;
use App\Models\DataCenter\Dcim\Interfaces\DeviceInterface;
use App\Models\DataCenter\DCIM\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;

final class ImportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function import()
    {
        return view('import');
    }

    public function parse_import(Request $request)
    {
        $parse = Yaml::parse($request->input('yaml_data'));
//        dd($parse);
        //manufacturer
        $device = DB::transaction(function () use ($parse) {
            Manufacturer::updateOrCreate([
                'app_token_id' => 1,
                'slug'         => $parse['manufacturer'],
            ], [
                'name' => $parse['manufacturer'],
            ]);

            //Device
            $device = Device::updateOrCreate([
                'app_token_id' => 1,
                'slug'         => $parse['slug'],
            ], [
                'name'          => $parse['model'],
                'airflow'       => (!empty($parse['airflow'])) ? $parse['airflow'] : null,
                'description'   => $parse['comments'],
                'part_number'   => (!empty($parse['part_number'])) ? $parse['part_number'] : null,
                'u_height'      => (!empty($parse['u_height'])) ? $parse['u_height'] : 0,
                'is_full_depth' => (!empty($parse['is_full_depth'])) ? $parse['is_full_depth'] : false,
            ]);

            if (!empty($parse['interfaces'])) {
                $port_num = 1;
                foreach ($parse['interfaces'] as $device_interface) {
//                    dd($device_interface);
                    $d = [];
                    $port = [];
                    if (!empty($device_interface['label'])){
                        $d = explode('-', $device_interface['label']);
                        $port = explode(' ', $device_interface['label']);
                    }

                    DeviceInterface::updateOrCreate([
                        'app_token_id' => 1,
                        'device_id'    => $device->id,
                        'slug'         => Str::slug($device_interface['name']),
                    ], [
                        'name'        => $device_interface['name'],
                        'type'        => $device_interface['type'],
                        'label'       => (!empty($device_interface['label'])) ? $device_interface['label'] : null,
                        'port_number' => (!empty($port)) ? $port[1] : $port_num,
                        'port_type'   => (!empty($d)) ? str_replace(' ', '', trim($d[1])) : trim((str_contains($device_interface['name'],'SFP')) ? 'SFP' : 'LAN'),
                        'port_speed'  => null,
                    ]);
                    $port_num++;
                }
            }

            return $device;
        });

        return redirect()->route('data-center.dcim.interfaces.device.show', $device->id);
//        dd($parse);
    }
}
