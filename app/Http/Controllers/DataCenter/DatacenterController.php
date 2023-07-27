<?php

namespace App\Http\Controllers\DataCenter;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreManufacturerRequest;
use App\Http\Requests\UpdateManufacturerRequest;
use App\Models\DataCenter\Dcim\Manufacturer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class DatacenterController extends Controller
{
    public function index()
    {
        return view('data-center.index');
    }
}
