<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\DataCenter\DCIM\Device;
use App\Models\DataCenter\DCIM\Manufacturer;
use Illuminate\Http\Request;
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
        Manufacturer::updateOrCreate([
            'app_token_id' => 1,
            'slug'         => $parse['manufacturer'],
        ], [
            'name' => $parse['manufacturer'],
        ]);

        //Device
        Device::updateOrCreate([
            'app_token_id' => 1,
            'slug'         => $parse['slug'],
        ], [
            'name'        => $parse['model'],
            'airflow'     => (!empty($parse['airflow'])) ? $parse['airflow'] : null,
            'description' => $parse['comments'],
            'part_number' => (!empty($parse['part_number'])) ? $parse['part_number'] : null,
            'u_height' => (!empty($parse['u_height'])) ? $parse['u_height'] : 0,
            'is_full_depth' => (!empty($parse['is_full_depth'])) ? $parse['is_full_depth'] : false,
        ]);
        return redirect()->back();
//        dd($parse);
    }
}
